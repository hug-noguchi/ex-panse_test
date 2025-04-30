<?php function include_custom_css(){
    if(is_single()||is_page()){
    if($css = get_post_meta(get_the_ID(), 'includeCSS', true)){
    echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$css}\" />\n";
                        }
                    }
                }
add_action('wp_head','include_custom_css');

function forced_publish_future_post( $data, $postarr ) {
    if ( $data['post_status'] == 'future' && $postarr['post_status'] == 'publish' ) {
        $data['post_status'] = 'publish';
    }
    return $data;
}
add_filter( 'wp_insert_post_data', 'forced_publish_future_post', 10, 2 );

function mysetup() {
add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mysetup' );


if ( function_exists('register_sidebar') )
    register_sidebar();
//---------------------------------------------------------------------------
//　自動整形無効
//---------------------------------------------------------------------------
remove_filter( 'the_content', 'wpautop' );

//---------------------------------------------------------------------------
// 画像指定
//---------------------------------------------------------------------------
function my_excerpt_more( $more ) {
    return ' <a class="x" href="'. get_permalink( get_the_ID() ) . '">more</a>';
}
add_filter( 'excerpt_more', 'my_excerpt_more' );

//---------------------------------------------------------------------------
// 画像指定
//---------------------------------------------------------------------------
function replaceImagePath($arg) {
	$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');


//アイキャッチサムネイル生成
add_theme_support('post-thumbnails');
add_image_size('thumb100',100,100,true);
add_image_size('thumb110',110,110,true);


//1件目の記事取得
function is_first(){
  global $wp_query;
  return ($wp_query->current_post === 0);
}

// URLからドメイン部分を削除したURLを返す
function delete_domain_from_url( $url ) {
    if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
        $url = $match[2];
    }
    return $url;
}
//冒頭分・抜粋文字数
function custom_excerpt_length( $length ) {
     return 40;	//表示したい文字数
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//カテゴリー説明文でHTMLタグを使う
remove_filter( 'pre_term_description', 'wp_filter_kses' );
//カテゴリー説明文から自動で付与されるpタグを除去
remove_filter('term_description', 'wpautop');

// wp_get_archivesの年表記を置き換える
// ----------------------------------------------------------------------

function my_archives_link($html){
  $html = str_replace('年','/',$html);
  $html = str_replace('月','',$html);
  return $html;
}

add_filter('get_archives_link', 'my_archives_link');


// アーカイブウィジェットの年表記を置き換える
// ----------------------------------------------------------------------

function my_archives( $html ){
  $html = str_replace('年','/',$html);
  $html = str_replace('月','',$html);
  return $html;
}

add_filter( 'widget_archives_args','my_archives');

/*
* $pages : 全ページ数
* $paged : 現在のページ
* $range : 左右に何ページ表示するか
*/
function pagenation( $pages = '', $range = 2 ) {

  // 現在のページ番号を取得
  global $paged;
  // ページ番号が空であれば1をセット
  if ( empty($paged) ) $paged = 1;

  if ( $pages == '' ) {
    // 全ページ数を取得
    global $wp_query;
    $pages = $wp_query->max_num_pages;

    // 取得できなければ1をセット
    if ( !$pages ) {
      $pages = 1;
    }
  }

  // 2ページ以上ある場合に表示
  if( 1 != $pages ) {

    // 現在のページ数と全ページ数を表示
    echo "<div class=\"pagination justify-content-center\">"."<span class=\"result\">".$paged."</span>"."/"."<span class=\"total\">".$pages."</span>"."</div>";

    echo "<ul class=\"pagination justify-content-center\">";

    // 最初へ
    if ( $paged > $range + 1 ) {
      echo "<li class=\"first\"><a href='".get_pagenum_link(1)."'>最初へ</a></li>";
    }

    // 前へ
    if ( $paged > 1 ) {
      echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></li>";
    }

    // ページ番号を表示
    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        if ( $paged == $i ) {
          echo "<li class=\"current\">".$i."</li>";
        } else {
          echo "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
        }
      }
    }

    // 次へ
    if ( $paged < $pages ) {
      echo "<li class=\"next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></li>";
    }

    // 最後へ
    if ( $paged + $range < $pages ) {
      echo "<li class=\"last\"><a href='".get_pagenum_link( $pages )."'>最後へ</a></li>";
    }

    echo "</ul>";
  }
}

add_action( 'template_redirect', 'is404_redirect' );
function is404_redirect() {
  if ( is_404() ) {
    wp_safe_redirect( home_url( '/' ), 301 );
    exit();
  }
}


function adjust_category_paged( $query = []) {
  if (isset($query['name'])
   && $query['name'] === 'page'
   && isset($query['page'])
   && isset($query['category_name'])) {
    $query['paged'] = intval($query['page']); // 念のため整数化しておく
    unset($query['name']);
    unset($query['page']);
  }
  return $query;
}
add_filter('request', 'adjust_category_paged');

function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_post_type_archive('review') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '10' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


// キャンペーン日時自動変更
function campaign_end_date() {
  date_default_timezone_set('Asia/Tokyo'); // タイムゾーンを設定
  $current_time = strtotime(date('Y-m-d H:i'));
  $campaign_end_date = strtotime('2025-4-30 23:59');

  ob_start(); // 出力バッファリングを開始

  ?>
  <p class="campaign">
      春の特別キャンペーン <br class="campaign_pc">期間限定<span>
      <?php if ($current_time < $campaign_end_date) { ?>
          4/30
      <?php } else { ?>
          5/31
      <?php } ?>
      </span>まで
  </p>
  <?php

  return ob_get_clean(); // バッファの内容を返す
}
add_shortcode('campaign_date', 'campaign_end_date');

//本文を読むのにかかる時間
function get_time_to_content_read($content){
  $count = mb_strlen(strip_tags($content));
  if ($count == 0) {
    return 0;
  }
  $minutes = floor($count / 600) + 1;
  return $minutes;
}

function custom_posts_per_page_for_all_templates_and_categories($query) {
  if (!is_admin() && $query->is_main_query() && (is_category() || is_page_template())) {
      $query->set('posts_per_page', 10);
  }
}
add_action('pre_get_posts', 'custom_posts_per_page_for_all_templates_and_categories');
