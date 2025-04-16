	<footer class="footer">
		<div class="footer_inner">
			<div class="footer_logo">
				<a href="<?php bloginfo('url'); ?>" class="btn_fade">
					<img src="<?php bloginfo('url'); ?>/images/lp/footer/logo.svg" width="200" height="132" alt="アーユルヴェーダスクールです">
				</a>
			</div>
			<?php $url = $_SERVER['REQUEST_URI']; ?>
			<div class="footer_nav">

				<?php if($url == "/thanks03/") { ?>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#">セラピスト養成講座コースの特徴</a></li>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#onayami">このようなお悩みありませんか？</a></li>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#voice">卒業生の声</a></li>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#price">料金</a></li>
					</ul>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#curriculum">コースカリキュラム</a></li>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#message">理事からのメッセージ</a></li>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#faq">よくあるご質問</a></li>
						<li><a href="<?php bloginfo('url'); ?>/basicmaster-courses_lp/#reserve">お申込み</a></li>
					</ul>
				<?php } else { ?>
					<ul>
						<li><a href="#">セラピスト養成講座コースの特徴</a></li>
						<li><a href="#onayami">このようなお悩みありませんか？</a></li>
						<li><a href="#voice">卒業生の声</a></li>
						<li><a href="#price">料金</a></li>
					</ul>
					<ul>
						<li><a href="#curriculum">コースカリキュラム</a></li>
						<li><a href="#message">理事からのメッセージ</a></li>
						<li><a href="#faq">よくあるご質問</a></li>
						<li><a href="#reserve">お申込み</a></li>
					</ul>
				<?php } ?>
			</div>
		</div>
		<small class="footer_copyright">Copyright (C) 2024- R&amp;M Co.,Ltd. All Rights Reserved.</small>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
