<?php get_header(2); ?>

	<div id="main_img" class="content_main_img common">
	</div>
	<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        	    <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                    </svg>',
    'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>
	<main>

		
		<section class="container element js-animation">
			
			<article class="main_content">
<?php if(is_category('blog')) : ?>
	<h2 class="section_h2"><span>Blog</span><br>
				ブログ</h2>
<?php endif; ?>
	<?php if(is_category('info')) : ?>
	<h2 class="section_h2"><span>Information</span><br>
				インフォメーション</h2>
<?php endif; ?>		
<ul class="info_list">
<?php if(have_posts()): while(have_posts()) : the_post(); ?>
<li>
<a href="<?php the_permalink(); ?>">
   <p class="date">0000.00.00</p>
       <p class="title"><?php the_title() ?></p>
</a></li>
<?php endwhile; ?>
</li>
<?php else : ?>
  <p>記事がありません</p>
<?php endif; ?>
</ul>
<nav class="pagination_nav"><div class="text-center">
	<ul class="pagination justify-content-center">
		<li class="page-item"><a  class="page-link" href="#" aria-label="Previous Page"><span aria-hidden="true">&laquo;</span></a></li>
		<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">...</a></li>
		<li class="page-item"><a class="page-link" href="#">5</a></li>
		<li class="page-item"><a href="#"  class="page-link" aria-label="Next Page"><span aria-hidden="true">&raquo;</span></a></li>
	</ul>
</div>
</nav>
<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '&lt;&lt;前へ',
    'next_text' => '次へ&gt;&gt;',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>

<?php previous_post_link('« %link', '前の記事へ'); ?>
<div class="next"><?php next_post_link('%link »', '次の記事へ'); ?>
<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '&lt;&lt;前へ',
    'next_text' => '次へ&gt;&gt;',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>
</section>
</main>
<?php the_posts_pagination(); ?>
<?php get_footer(); ?>
