<?php get_header(2); ?>

	<style>
		.read_time {
			text-align: right;
		}
		@media only screen and (min-width: 481px) {
			.sp {
				display: none!important;
			}
		}
		@media only screen and (max-width: 480px) {
			.pc {
				display: none;
			}
			#breadcrumb {
				display: block;
			}
			.breadcrumb_top {
				display: flex;
			}
		}
	</style>

	<main>
		<section class="container element js-animation single_content blog_content">
			<div class="main_contents">
				<ul id="breadcrumb" class="pc">
					<li><a href="/">TOP</a>&nbsp;&gt;&nbsp;</li>
					<?php
					$categories = get_the_category();
					if ($categories) {
						$category = $categories[0];
						$category_link = get_category_link($category->term_id);
						if ($category->slug == 'blog') {
							echo '<li><a href="' . esc_url($category_link) . '">ブログ</a>&nbsp;&gt;&nbsp;</li>';
						} elseif ($category->slug == 'info') {
							echo '<li><a href="' . esc_url($category_link) . '">インフォメーション</a>&nbsp;&gt;&nbsp;</li>';
						} elseif ($category->slug == 'ayurveda') {
							echo '<li><a href="' . esc_url($category_link) . '">アーユルヴェーダ</a>&nbsp;&gt;&nbsp;</li>';
						} elseif ($category->slug == 'business') {
							echo '<li><a href="' . esc_url($category_link) . '">開業</a>&nbsp;&gt;&nbsp;</li>';
						} elseif ($category->slug == 'other') {
							echo '<li><a href="' . esc_url($category_link) . '">その他</a>&nbsp;&gt;&nbsp;</li>';
						}
					}
					?>
					<li><?php the_title(); ?></li>
				</ul>

				<ul id="breadcrumb" class="sp">
					<div class="breadcrumb_top">
						<li><a href="/">TOP</a>&nbsp;&gt;&nbsp;</li>
						<?php
						if ($categories) {
								$category = $categories[0];
								$category_link = get_category_link($category->term_id);
								if ($category->slug == 'blog') {
										echo '<li><a href="' . esc_url($category_link) . '">ブログ</a>&nbsp;&gt;&nbsp;</li>';
								} elseif ($category->slug == 'info') {
										echo '<li><a href="' . esc_url($category_link) . '">インフォメーション</a>&nbsp;&gt;&nbsp;</li>';
								} elseif ($category->slug == 'ayurveda') {
										echo '<li><a href="' . esc_url($category_link) . '">アーユルヴェーダ</a>&nbsp;&gt;&nbsp;</li>';
								} elseif ($category->slug == 'business') {
										echo '<li><a href="' . esc_url($category_link) . '">開業</a>&nbsp;&gt;&nbsp;</li>';
								} elseif ($category->slug == 'other') {
										echo '<li><a href="' . esc_url($category_link) . '">その他</a>&nbsp;&gt;&nbsp;</li>';
								}
						}
						?>
						<li><?php the_title(); ?></li>
					</div>
				</ul>

				<div class="main_box">
					<article class="main_content">
						<?php
						if ($categories) {
								$category = $categories[0];
								if ($category->slug == 'blog') {
										echo '<h2 class="section_h2"><span>Blog</span><br>ブログ</h2>';
								} elseif ($category->slug == 'info') {
										echo '<h2 class="section_h2"><span>Information</span><br>インフォメーション</h2>';
								} elseif ($category->slug == 'ayurveda') {
										echo '<h2 class="section_h2"><span>Ayurveda</span><br>アーユルヴェーダ</h2>';
								} elseif ($category->slug == 'business') {
										echo '<h2 class="section_h2"><span>Business</span><br>開業</h2>';
								} elseif ($category->slug == 'other') {
										echo '<h2 class="section_h2"><span>Other</span><br>その他</h2>';
								}
						}
						?>

						<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>

										<div class="">
												<h3 class="section_h3">
														<p class="date"><?php the_date(); ?></p>
														<?php the_title(); ?>
												</h3>
												<p class="read_time">
													<?php echo sprintf('読了予測：約%s分', get_time_to_content_read(get_the_content())); ?>
												</p>
												<div class="single_box">
													<?php if (has_post_thumbnail()) : ?>
														<div class="post-thumbnail">
															<?php the_post_thumbnail('full'); ?>
														</div>
													<?php endif; ?>
													<p><?php the_content(); ?></p>
													<div class="single_reserve">
														<strong class="bold">「お問い合わせ」</strong><br>
														&rArr;　<a href="/contact/"><strong class="blue">お問い合わせください。</strong></a>
													</div>
												</div>
												<!-- <p><?php the_content(); ?></p> -->
										</div>

								<?php endwhile; ?>
						<?php endif; ?>

						<?php
						$cat = get_the_category();
						$cat_id = $cat[0]->cat_ID;
						$link = get_category_link($cat_id);
						?>

						<div class="navigation_single">
							<span class="previous"><?php previous_post_link(' %link', '&lt;&nbsp;前の記事へ'); ?></span>
							<span class="next"><?php next_post_link('%link ', '次の記事へ&nbsp;&gt;'); ?></span>
						</div>

						<div class="padding_inner">
							<article class="content">
								<p class="btn_p text-center"><a href="<?php echo esc_url($link); ?>">一覧に戻る</a></p>
							</article>
						</div>

					</article>
					<div class="sidebar_blog sidebar_single">
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

		<section class="related">
			<?php
				$post_id = get_the_ID();
				$categories = get_the_category($post_id);
				$cat_ids = [];

				foreach ($categories as $category) :
					array_push($cat_ids, $category->term_id);
				endforeach;

				$args = [
					'post_type' => 'post',
					'posts_per_page' => '4',
					'limit' => '4',
					'post__not_in' => [$post_id]
				];

				$related_cats_query = new WP_Query($args);
			?>

			<h2>関連記事</h2>
        <?php if ($related_cats_query->have_posts()) : ?>
					<ul class="wpp_list">
            <?php while ($related_cats_query->have_posts()) : $related_cats_query->the_post(); ?>
            <li class="listItem">
							<a href="<?php the_permalink(); ?>">
								<div class="wpp_box">
									<p class="listTitle pc">
										<?php
											$max_length = 22;
											$post_title = $post->post_title;

											if (mb_strlen($post_title) > $max_length) {
													echo mb_substr($post_title, 0, $max_length) . '…';
											} else {
													echo $post_title;
											}
										?>
									</p>
									<p class="listTitle sp">
										<?php
											$max_length = 11;
											$post_title = $post->post_title;

											if (mb_strlen($post_title) > $max_length) {
													echo mb_substr($post_title, 0, $max_length) . '…';
											} else {
													echo $post_title;
											}
										?>
									</p>
									<p class="listText">
										<?php echo wp_trim_words(get_the_content(), 40, '…' ); ?>
									</p>
									<p class="listDate">
										記事公開日：<br class="sp"><?php the_time('Y年m月d日');?>
									</p>
								</div>
							</a>
            </li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <p>関連記事はありません。</p>
        <?php
        endif;
        wp_reset_postdata(); ?>
      </ul>
		</section>

		<section class="ranking pc2">
			<?php
			if (function_exists('wpp_get_mostpopular')){
				$arg = array (
					'post_type' => 'post',
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num',
					'posts_per_page' => 4,
					'limit' => 4,
					'order'=>'DESC',
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
			}
			?>
		</section>

		<section class="ranking sp">
			<?php
			if (function_exists('wpp_get_mostpopular')){
				$arg = array (
					'post_type' => 'post',
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num',
					'posts_per_page' => 4,
					'limit' => 4,
					'order'=>'DESC',
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
			}
			?>
		</section>
	</main>

<?php get_footer(); ?>
