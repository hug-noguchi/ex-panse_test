<?php get_header(2); ?>
	<main>

		
		<section class="container element js-animation">
			
			<article class="main_content">
<?php if(in_category('blog')) : ?>
<h2 class="section_h2"><span>Blog</span><br>
				ブログ</h2>
<?php endif; ?>
<?php if(in_category('info')) : ?>
<h2 class="section_h2"><span>Information</span><br>
				インフォメーション</h2>
<?php endif; ?>

	

				
<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>
<div class="">
<h3 class="section_h3"><p class="date">0000.00.00</p>
					<?php the_title() ?></h3>
		<p><?php the_content(); ?></p>
</div>
  <?php endwhile;?>
<?php endif; ?>
 <?php 
$cat = get_the_category(); 
$cat_id = $cat[0]->cat_ID; 
$link = get_category_link($cat_id);
　?>
	<div class="padding_inner">
					<article class="content">
						<p class="btn_p text-center"><a href="<?php echo $link; ?>">一覧に戻る</a></p>
					</article>
				</div>
			</article>
		
			
		</section>
		
		
		
		
	</main>
<?php get_footer(); ?>
