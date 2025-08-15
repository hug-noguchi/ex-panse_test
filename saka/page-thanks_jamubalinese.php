<?php get_header(); ?>

<style>
	#breadcrumb a {
    text-decoration: none;
	}
	#breadcrumb a:hover,
	#breadcrumb a:focus {
    text-decoration: underline;
	}
	.reserve {
    padding: 60px 0 120px;
	}
	.reserve #briefing_link {
    padding: 40px 0;
	}
	.reserve h2 {
		font-size: 30px;
    text-align: center;
    line-height: 1.2;
    padding-bottom: 20px;
	}
	.cp_form .cp_group {
    width: 90%;
	}
	.reserve .btn_p a {
    color: var(--main-color) !important;
	}
	.btn_p a, .btn_p a:visited, .btn_p input {
    font-size: 1.2rem;
	}
	.reserve #briefing_link {
    padding: 40px 0;
	}
	#btn_cource .btn_p a:hover {
    color: #fff !important;
	}
	@media (max-width: 1023px) {
    .reserve .cp_form {
			width: 90%;
			max-width: 90%;
			padding: 5%;
    }
	}
	@media (max-width: 991px) {
    h1 {
			font-size: 0.7rem;
			line-height: 1.2;
		}
	}
	@media (min-width: 481px) {
    .btn_domestic {
			bottom: -20%;
    }
	}
	@media (max-width: 480px) {
		.reserve {
			padding: 40px 20px 0;
    }
    .reserve h2 {
			font-size: 1.2rem;
    }
		.reserve #briefing_link {
			padding: 40px 0 0;
    }
		.reserve .cp_form .cp_group {
			padding: 20px 0;
    }
		#btn_cource {
			padding: 60px 0;
			text-align: center;
			width: 100%;
    }
		.reserve .btn_p a {
			padding: 0.8em 6rem !important;
    }
	}
</style>

<main>
	<section class="reserve reserve_thanks">
		<ul id="breadcrumb">
			<li>
				<a href="/">TOP</a>&nbsp;&gt;&nbsp;
			</li>
			<li>
				<a href="/course/">コースのご案内</a>&nbsp;&gt;&nbsp;
			</li>
			<li>
				<a href="/course/jamubalinese/">ジャムゥバリニーズコース お申込</a>&nbsp;&gt;&nbsp;
			</li>
			<li>お申込完了画面</li>
		</ul>
		<div class="element js-animation is-show" id="briefing_link">
			<h2>ジャムゥバリニーズコース<br>お申込完了</h2>
			<div class="cp_form">
				<div class="cp_group">
					お申込ありがとうございます。<br>
					このたびは、ジャムゥバリニーズコースにお申込頂き誠にありがとうございます。<br>
					ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。
					<br><br>
					しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます。<br>
					以上の内容をご確認の上、お手数ですがもう一度フォームよりお申し込み頂きますようお願い申し上げます。
				</div>
			</div>
			<div class="btn_domestic btn_domestic2" id="btn_cource">
				<article>
					<p class="btn_p text-center"><a href="/">TOPに戻る</a></p>
				</article>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
