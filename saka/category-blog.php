<?php get_header(2); ?>

<div id="main_img" class="content_main_img common"></div>

<main>
    <section class="container element js-animation blog_content">
      <div class="main_contents">
        <ul id="breadcrumb">
            <li><a href="/">TOP</a>&nbsp;&gt;&nbsp;</li>
            <li>記事一覧</li>
        </ul>

        <div class="main_box">
          <article class="main_content">
            <h2 class="section_h2"><span>All Articles</span><br>記事一覧</h2>

            <ul class="info_list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <p class="date"><?php the_time('Y年n月j日'); ?></p>
                            <p class="title">
                              <span class="category">
                                <?php
                                  $cat = get_the_category();
                                  $cat = $cat[0]; {
                                  echo $cat->cat_name;
                                  }
                                ?>
                              </span>
                              <br class="sp">
                              <?php the_title(); ?>
                            </p>
                        </a>
                    </li>
                <?php endwhile; else : ?>
                    <p>記事がありません</p>
                <?php endif; ?>
            </ul>

            <nav class="pagination_nav">
                <div class="text-center">
                    <?php
                    $args = array(
                        'mid_size' => 1,
                        'prev_text' => '<span aria-hidden="true">«</span>',
                        'next_text' => '<span aria-hidden="true">»</span>',
                        'screen_reader_text' => ' ',
                    );
                    the_posts_pagination($args);
                    ?>
                </div>
            </nav>
        </article>
        <div class="sidebar_blog">
          <h2>カテゴリー</h2>
          <ul class="category_list">
            <li><a href="/category/ayurveda"><span>アーユルヴェーダ</span></a></li>
            <li><a href="/category/business"><span>開業</span></a></li>
						<li><a href="/category/other"><span>その他</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

    <section class="ranking pc2">
        <?php if (function_exists('wpp_get_mostpopular')) {
            $arg = array(
                'post_type' => 'post',
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'posts_per_page' => 4,
                'limit' => 4,
                'order' => 'DESC',
                'stats_date' => 1,
                'stats_date_format' => 'Y年m月d日',
                'title_length' => '22',
                'excerpt_length' => '40',
                'wpp_start' => '<ul class="wpp_list">',
                'wpp_end' => '</ul>',
                'header' => '人気記事',
                'header_start' => '<h2>',
                'header_end' => '</h2>',
                'post_html' => '<li class="listItem"><a href="{url}"><div class="wpp_box"><p class="listTitle">{text_title}</p><p class="listText">{summary}</p><p class="listDate">記事公開日：<br class="sp">{date}</p></div></a></li>',
            );
            wpp_get_mostpopular($arg);
        } ?>
    </section>

    <section class="ranking sp">
        <?php if (function_exists('wpp_get_mostpopular')) {
            $arg = array(
                'post_type' => 'post',
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'posts_per_page' => 4,
                'limit' => 4,
                'order' => 'DESC',
                'stats_date' => 1,
                'stats_date_format' => 'Y年m月d日',
                'title_length' => '11',
                'excerpt_length' => '40',
                'wpp_start' => '<ul class="wpp_list">',
                'wpp_end' => '</ul>',
                'header' => '人気記事',
                'header_start' => '<h2>',
                'header_end' => '</h2>',
                'post_html' => '<li class="listItem"><a href="{url}"><div class="wpp_box"><p class="listTitle">{text_title}</p><p class="listText">{summary}</p><p class="listDate">記事公開日：<br class="sp">{date}</p></div></a></li>',
            );
            wpp_get_mostpopular($arg);
        } ?>
    </section>
</main>

<?php get_footer(); ?>
