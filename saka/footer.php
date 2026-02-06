	<section class="sns fadeIn">
		<div class="sns_item">
			<h2>Instagram<br><span>インスタグラム</span></h2>
			<div class="instagram-items"><?php echo do_shortcode('[instagram-feed feed=1]'); ?></div>
		</div>
	</section>

	<footer>
		<div class="banner">
			<ul>
				<li><a href="https://eata.official.ec/" target="_blank" class="btn_fade"><picture><source type="image/webp" srcset="<?php bloginfo('url'); ?>/images/footer_banner_ec.webp"><img src="<?php bloginfo('url'); ?>/images/footer_banner_ec.jpg"></picture></a></li>
			</ul>
		</div>
		<article>
			<div class="address">
				<p class="logo"><a href="<?php bloginfo('url'); ?>" class="btn_fade"><picture><source type="image/webp" srcset="<?php bloginfo('url'); ?>/images/logo.webp"><img src="<?php bloginfo('url'); ?>/images/logo.png"></picture></a><br>
				エクスパンス・<br>アーユルヴェーダスクール</p>
				<p>〒104-0061<br>
				東京都中央区銀座7-9-11 <br>モンブラン銀座ビル8階<br>
				03-6263-9504
				</p>

				<address>Copyright (C) 2013- R&amp;M Co.,Ltd. All Rights Reserved.</address>
			</div>

			<style>
				.footer article .address {
					width: 40%;
				}
				.footer_box {
					display: flex;
					flex-wrap: wrap;
					gap: 30px;
					width: 60%;
				}
				footer article .footer_nav {
					flex: unset;
				}
				footer article .footer_box ul.footer_nav:nth-child(1) {
					width: calc(33% - 10px);
				}
				footer article .footer_box ul.footer_nav:nth-child(2) {
					width: calc(50% - 10px);
				}
				footer article .footer_box ul.footer_nav:nth-child(3) {
					width: calc(30% - -16.7px);
				}
				footer article .footer_box ul.footer_nav:nth-child(4),
				footer article .footer_box ul.footer_nav:nth-child(5) {
					width: calc(30% - 13.3px);
				}
				@media (max-width: 1023px) {
					.footer_box {
						width: 100%;
					}
				}
				@media all and (max-width: 640px) {
					footer article .footer_nav {
						width: 100% !important;
					}
				}
			</style>
			<div class="footer_box">
				<ul class="footer_nav">
					<li><a href="<?php bloginfo('url'); ?>/concept/">スクールの特長</a></li>
					<li><a href="<?php bloginfo('url'); ?>/teacher/">代表挨拶・講師紹介・協会概要</a></li>
					<li><a href="<?php bloginfo('url'); ?>/review/">卒業生の声</a></li>
					<li><a href="<?php bloginfo('url'); ?>/menu_india/">インド校</a></li>
					<li><a href="<?php bloginfo('url'); ?>/menu_hawaii/">ハワイ校</a></li>
					<li><a href="<?php bloginfo('url'); ?>/menu_bari/">バリ校</a></li>
				</ul>
				<ul class="footer_nav">
					<li><a href="<?php bloginfo('url'); ?>/course/">コースのご案内</a>
						<ul class="sub_nav">
							<li><a href="<?php bloginfo('url'); ?>/menu_online/">アーユルヴェーダベーシックマスターコース</a></li>
							<li><a href="<?php bloginfo('url'); ?>/menu_menu1/">基礎コース</a></li>
							<li><a href="<?php bloginfo('url'); ?>/menu_menu2/">じっくりコース</a></li>
							<li><a href="<?php bloginfo('url'); ?>/menu_menu3/">独立・開業コース</a></li>
							<li><a href="<?php bloginfo('url'); ?>/menu_stepup#step1_link">シローダーラーコース</a></li>
							<li><a href="<?php bloginfo('url'); ?>/menu_stepup#step2_link">フェイシャルコース</a></li>
							<li><a href="<?php bloginfo('url'); ?>/menu_stepup#step3_link">セラピストとして大切なこと</a></li>
						</ul>
					</li>
					<li><a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></li>
				</ul>
				<ul class="footer_nav">
					<li><a href="<?php bloginfo('url'); ?>/ayurveda_about/">アーユルヴェーダとは</a></li>
					<li><a href="<?php bloginfo('url'); ?>/diagnose.php" target="_blank">アーユルヴェーダ体質診断</a></li>
				</ul>
				<ul class="footer_nav">
					<li><a href="<?php bloginfo('url'); ?>/access/">アクセス</a></li>
					<li><a href="<?php bloginfo('url'); ?>/info/">インフォメーション</a></li>
					<li><a href="<?php bloginfo('url'); ?>/blog/">ブログ</a></li>
					<li><a href="https://www.instagram.com/expanse_school/" target="_blank">Instagram</a></li>
					<li><a href="<?php bloginfo('url'); ?>/faq/">よくあるご質問</a></li>
				</ul>
				<ul class="footer_nav">
					<li><a href="<?php bloginfo('url'); ?>/memberstore/">ボランタリー事業加盟店募集</a></li>
					<li><a href="<?php bloginfo('url'); ?>/privacypolicy/">プライバシーポリシー</a></li>
					<li><a href="<?php bloginfo('url'); ?>/sitemap/">サイトマップ</a></li>
				</ul>
			</div>
		</article>
	</footer>

	<div class="following">
		<p class="contact"><a href="<?php bloginfo('url'); ?>/contact#contact_link" class="btn_fade"><i class="far fa-envelope"></i>資料請求・<br class="sp">お問い合わせ</a></p>
		<p class="briefing"><a href="<?php bloginfo('url'); ?>/contact/freetrial/" class="btn_fade"><i class="far fa-file"></i>無料体験説明会</a></p>
		<p class="line"><a href="https://page.line.me/096yhabt" class="btn_fade" target="_blank">公式LINE<br class="sp">友達追加</a></p>
	</div>

	<!--座学-->
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-icon">
		<symbol viewbox="0 0 432 320" id="icon_lecture" >

		<path fill-rule="evenodd" d="M4.518,305.856 C7.346,307.708 10.897,308.010 13.993,306.663 C36.778,296.720 69.112,290.251 104.869,290.276 C149.394,290.193 188.673,300.399 210.637,314.479 C210.730,314.538 210.837,314.557 210.930,314.616 C211.023,314.671 211.091,314.754 211.184,314.803 C211.492,314.973 211.829,315.042 212.151,315.174 C212.561,315.345 212.957,315.535 213.387,315.652 C213.822,315.769 214.261,315.808 214.706,315.867 C215.140,315.926 215.565,315.999 215.999,315.999 C216.435,315.999 216.860,315.926 217.294,315.867 C217.739,315.808 218.178,315.769 218.613,315.652 C219.042,315.535 219.438,315.345 219.849,315.174 C220.171,315.042 220.508,314.973 220.816,314.803 C220.909,314.754 220.977,314.671 221.070,314.616 C221.163,314.557 221.270,314.538 221.363,314.479 C243.327,300.399 282.606,290.193 327.130,290.276 C362.888,290.251 395.221,296.720 418.007,306.663 C421.103,308.010 424.654,307.708 427.481,305.856 C430.305,304.005 431.1000,300.868 431.1000,297.487 L431.1000,55.591 C431.1000,51.604 429.641,48.009 425.987,46.416 C424.410,45.732 422.700,45.116 421.059,44.466 L421.059,27.229 C421.059,23.306 418.798,19.774 415.232,18.137 C390.377,6.739 357.491,0.026 321.231,0.001 C279.109,0.079 241.745,9.069 215.999,24.161 C190.255,9.069 152.891,0.079 110.769,0.001 C74.509,0.026 41.624,6.739 16.768,18.137 C13.202,19.774 10.941,23.306 10.941,27.229 L10.941,44.466 C9.300,45.116 7.590,45.732 6.013,46.416 C2.359,48.009 0.000,51.604 0.000,55.591 L0.000,297.487 C0.000,300.868 1.695,304.005 4.518,305.856 ZM30.947,33.879 C51.920,25.412 79.945,19.989 110.769,20.013 C150.034,19.935 184.751,28.866 205.997,41.442 L205.997,64.132 L205.997,260.785 C180.970,248.917 147.714,241.969 110.769,241.901 C81.000,241.921 53.590,246.509 30.947,254.434 L30.947,33.879 ZM401.053,254.434 C378.410,246.509 350.999,241.921 321.231,241.901 C284.286,241.969 251.030,248.917 226.002,260.785 L226.002,64.132 L226.002,41.442 C247.249,28.866 281.966,19.935 321.231,20.013 C352.055,19.989 380.081,25.412 401.053,33.879 L401.053,254.434 Z"/>
		</symbol>
	</svg>

	<!--実技-->
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-icon">
		<symbol viewbox="0 0 150 320" id="icon_skill" >

		<path fill-rule="evenodd" d="m122.77,198.09c-17.25.28-31.01,14.45-30.79,31.71.28,17.25,14.45,31.01,31.7,30.79,17.26-.28,31.02-14.45,30.79-31.71-.28-17.26-14.45-31.01-31.71-30.79Zm.68,46.25c-8.28.12-15.09-6.49-15.21-14.78-.12-8.28,6.49-15.1,14.77-15.22,8.28-.12,15.1,6.5,15.22,14.78.12,8.27-6.5,15.1-14.78,15.22Zm-1.05-71.24c-15.54.23-29.48,6.72-39.53,17.05-10.03,10.35-16.12,24.47-15.89,40.02.23,15.55,6.72,29.48,17.06,39.52,10.34,10.04,24.47,16.12,40.01,15.89,15.55-.22,29.49-6.72,39.53-17.05,10.03-10.34,16.11-24.47,15.89-40.01-.23-15.55-6.72-29.49-17.06-39.53-10.34-10.04-24.47-16.12-40.02-15.89Zm1.43,97.49c-22.78.33-41.51-17.86-41.85-40.65-.33-22.78,17.86-41.51,40.64-41.85,22.78-.34,41.51,17.85,41.85,40.64.33,22.78-17.86,41.51-40.64,41.86ZM193.01,47.41c-8.64-.05-15.64,8.44-15.69,18.9l-.26,84.93c-1.83-1.28-10.73-2.48-12.59-3.58l.47-111.78c.05-10.52-6.86-19.09-15.5-19.14-8.58-.04-15.54,8.38-15.64,18.91l-.4,103.08-2.31-.06c-1.07.02-9.19,0-10.29.04l.53-119.63C121.36,8.6,114.51.05,105.91,0c-8.57-.09-15.61,8.4-15.67,18.86l-.64,128.86c-1.9,1.07-10.79,2.22-12.63,3.49l.43-102.03c.04-10.5-6.81-19.03-15.44-19.11-8.56-.08-15.57,8.35-15.66,18.87l-.88,125.31-8.31-14.48c-6.44-11.12-19.01-13.75-28.16-5.9-9.13,7.84-11.84,16.75-5.43,27.91l40.18,82.88c8.11,17.1,12.47,28.57,26.14,34.23l-.68,32.62,114.82-1.69.28-30.03c13.64-12.83,22.73-30.22,22.87-49.47l.18-26.86.19-26.61.9-130.34c.07-10.46-6.81-19.03-15.37-19.07Zm-68.81,248.16c-36.59.54-66.67-28.68-67.22-65.26-.53-36.59,28.68-66.68,65.27-67.22,36.59-.54,66.67,28.68,67.22,65.27.53,36.58-28.68,66.67-65.27,67.21Z"/>
		</symbol>
	</svg>

	<script>
		$(function() {
			// トップページのURLを設定
			var topPageURL = 'https://ex-panse.test-hug.com/';

			// 現在のURLを取得
			var currentURL = window.location.href;

			// トップページのみ処理を実行
			if (currentURL === topPageURL) {
				var topBtn = $('.header_pc');
				topBtn.hide();
				//スクロールが930に達したらボタン表示
				$(window).scroll(function () {
					if ($(this).scrollTop() > 930) {
						topBtn.fadeIn();
					} else {
						topBtn.fadeOut();
					}
				});
				// スクロールしてトップ
				topBtn.click(function () {
					$('body,html,').animate({
						scrollTop: 0
					}, 500);
					return false;
				});
			} else {
				// トップページ以外の場合の処理
				var topBtn = $('.header_pc');
				topBtn.hide();
				//スクロールが400に達したらボタン表示
				$(window).scroll(function () {
					if ($(this).scrollTop() > 400) {
						topBtn.fadeIn();
					} else {
						topBtn.fadeOut();
					}
				});
				// スクロールしてトップ
				topBtn.click(function () {
						$('body,html,').animate({
							scrollTop: 0
						}, 500);
						return false;
				});
			}
		});

		document.addEventListener("DOMContentLoaded", function() {
			var currentPageUrl = window.location.href;
			var slugToHide = '/privacypolicy/';
			// スラッグが一致する場合にクラス名が"sns"の要素を非表示にする
			if (currentPageUrl.includes(slugToHide)) {
					var elements = document.getElementsByClassName('sns');
					for (var i = 0; i < elements.length; i++) {
							elements[i].style.display = 'none';
					}
			}
		});

		function openTab(evt, tabName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " active";
		}

	// デフォルトで最初のタブを開く
	document.addEventListener("DOMContentLoaded", function() {
			document.querySelector(".tablinks").click();
	});

	document.addEventListener('DOMContentLoaded', function () {
			// ハンバーガーメニューと背景要素を選択
			const hamburger = document.getElementById('js-hamburger');
			const blackBg = document.getElementById('js-black-bg');
			const navLinks = document.querySelectorAll('.global-nav__item a');

			// メニューを開閉する関数
			function toggleMenu() {
					hamburger.classList.toggle('is-active');
					blackBg.classList.toggle('is-active');
					document.querySelector('.global-nav').classList.toggle('is-active');
			}

			// ハンバーガーアイコンにクリックイベントを追加
			hamburger.addEventListener('click', toggleMenu);

			// 背景にクリックイベントを追加
			blackBg.addEventListener('click', toggleMenu);

			// 各ナビゲーションリンクにクリックイベントを追加
			navLinks.forEach(function (link) {
					link.addEventListener('click', function () {
							// リンクがクリックされたらメニューを閉じる
							hamburger.classList.remove('is-active');
							blackBg.classList.remove('is-active');
							document.querySelector('.global-nav').classList.remove('is-active');
					});
			});
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
