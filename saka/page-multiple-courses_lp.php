<?php get_header("lp-multiple"); ?>

<style>
	.nav_reserve a {
		padding: 37px 0;
	}
	.nav_reserve a::after {
		top: 36px;
	}

	.kv_box .btn_kv_pc {
		bottom: 9%;
    left: 20%;
	}
</style>

<main>
	<div class="kv_box">
		<h1 class="kv">
			<picture>
				<img src="<?php bloginfo('url'); ?>/images/lp-multiple/kv_lp-multiple_sp.png" alt="エクスパンス スクール" class="sp">
				<img src="<?php bloginfo('url'); ?>/images/lp-multiple/kv_lp-multiple_pc.png" alt="エクスパンス スクール" class="pc">
			</picture>
			<a href="#reserve" class="sp btn_kv_sp" id="cv_fv_sp">
				<img src="<?php bloginfo('url'); ?>/images/lp-multiple/btn_kv_lp-multiple_sp.png" alt="エクスパンス スクール">
			</a>
			<a href="#reserve" class="pc btn_kv_pc" id="cv_fv_pc">
				<img src="<?php bloginfo('url'); ?>/images/lp-multiple/btn_kv_lp-multiple_pc.png" alt="エクスパンス スクール">
			</a>
		</h1>
	</div>


	<div class="nav">
		<div class="nav_logo">
			<a href="/">
				<img src="<?php bloginfo('url'); ?>/images/lp/logo.svg" alt="アーユルヴェーダスクール" width="106" height="70" />
			</a>
		</div>
		<div class="nav_link">
			<ul class="nav_anchor">
				<li>
					<a href="#expanse">エクスパンスについて</a>
				</li>
				<li>
					<a href="#school">エクスパンススクール<br>について</a>
				</li>
				<li>
					<a href="#message">理事挨拶</a>
				</li>
				<li>
					<a href="#graduating">卒業後の進路</a>
				</li>
				<li>
					<a href="#voice">卒業生の声</a>
				</li>
				<li class="nav_btn">
					<a href="#faq">よくあるご質問</a>
				</li>
			</ul>
		</div>
		<div class="nav_reserve">
			<a href="#reserve" id="cv_nav">お申込み</a>
		</div>
		<div class="nav_menu">
			<button id="menu">
				<img src="<?php bloginfo('url'); ?>/images/lp/menu.svg" alt="menu" width="30" height="10">
			</button>
			<div class="nav_menu-inner">
				<ul class="nav_menu-list" id="menu-list">
					<li>
						<a href="#expanse">エクスパンスについて</a>
					</li>
					<li>
						<a href="#school">エクスパンススクールについて</a>
					</li>
					<li>
						<a href="#message">理事挨拶</a>
					</li>
					<li>
						<a href="#graduating">卒業後の進路</a>
					</li>
					<li>
						<a href="#voice">卒業生の声</a>
					</li>
					<li>
						<a href="#faq">よくあるご質問</a>
					</li>
					<li>
						<a href="#reserve">お申込み</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<section class="expanse js-animation" id="expanse">
		<div class="w-container">
			<div class="expanse_box">
				<div class="expanse_inner">
					<h3 class="heading">
						<span class="heading_en">about Expanse</span>
						<span class="heading_ja">エクスパンスについて</span>
					</h3>
					<p class="expanse_text">
						私たちはお客様一人ひとりのお身体のお悩みをお聞し、心身ともにリラックスしていただく上でどのような施術をするのが最適かをお客様に合わせてご提案させていただきます。<br><br>
						お客様のお身体の状態を把握し体質に合わせた薬草のハーブオイルを調合することから始めます。
						その為、しっかりと施術後のお身体の状態の変化を確認していただけますので健康的なスッキリとしたお身体をキープすることができます。<br><br>
						お客様の「こうなりたい！」と思う気持ちは施術で手に入れた美しいお身体を維持していくためには欠かせない大切なことです。
						ツライ症状が楽になるだけではなく、身体の内側から綺麗になるよう私たちと一緒に改善し、健康なお身体を目指しましょう。
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="school js-animation" id="school">
		<div class="w-container">
			<div class="school_inner">
				<h3 class="heading">
					<span class="heading_en">ABOUT Expanse.. School </span>
					<span class="heading_ja">エクスパンススクール<br class="sp">について</span>
				</h3>
				<p class="school_text">
					マンツーマンを基本にした、他に類を見ないアーユルヴェーダスクール「Expanse.. School」<br>
					当校は、生徒さんのご要望に合わせての日程調整、ご理解頂けるまでのレクチャーをできる限り行います。<br>
					例えばお子様連れであっても学べる環境づくりを行ってまいりました。<br>
					初心者の方から、すでに各業界でご活躍されていてスキルアップをお考えの方、開業を目指されている方、サロン経営をされている方でも。<br>
					それぞれのペース、それぞれの目的で学べるのは、「Expanse.. School」だけ！<br><br>
					アーユルヴェーダの技術、幅広い知識を学び、お客様ひとりひとりに合った施術を行うことができる最高のセラピストを目指しましょう。
				</p>
				<ol class="school_img">
					<li>
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-multiple/school01.png" alt="エクスパンススクールについて" width="368" height="300">
						</figure>
					</li>
					<li class="pc">
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-multiple/school02.png" alt="エクスパンススクールについて" width="368" height="300">
						</figure>
					</li>
					<li class="pc">
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-multiple/school03.png" alt="エクスパンススクールについて" width="368" height="300">
						</figure>
					</li>
				</ol>
			</div>
			<div class="learn school_box" id="learn">
				<div class="school_title">
					<h4 class="font_serif">エクスパンススクール<br class="sp">で学べること</h4>
				</div>
				<div class="school_box_lead">
					<p class="school_box_lead-sub font_serif">働いている方、<br class="sp">お子様のいる方でも</p>
					<p class="learn_box_lead-main font_serif">
						全ての生徒様が<br class="sp">心から安心して<br class="sp">学べる<br class="pc">環境づくりを<br class="sp">行なっています
					</p>
				</div>
				<div class="school_box_lead-list font_serif">
					<ul>
						<li><span class="text">生徒様の<span class="orange">ご要望に合わせた日程調整</span></span></li>
						<li><span class="text"><span class="orange">熟練の講師陣</span>による分かりやすい指導</span></li>
						<li><span class="text">安心の<span class="orange">フォローアップ制度</span></span></li>
					</ul>
				</div>
				<h5 class="sub_title">コース一覧</h5>
				<p class="sub_title_lead">基礎を学ぶコース、独立・開業するコース、セラピストとしてさらなる高みを目指した方向け、海外で学ぶコースなど様々なコースがあり、それぞれのペースで、それぞれの目的で学びができます。</p>
				<div class="school_content">
					<ul class="courses_list school_list">
						<li class="courses_title">Courses</li>
						<li>アーユルヴェーダの基本理論を学べるコース</li>
						<li>アーユルヴェーダの基本理論とオイルトリートメントテクニックの基礎を学べるコース</li>
						<li>アーユルヴェーダ・トリートメントの基本的なテクニックと身体を理解した上で実技内容を学べるコース</li>
						<li>未経験からでも高品質・高レベルのサロン開業を目指せるコース</li>
						<li>脳のトリートメントを学ぶシローダーラーコース</li>
						<li>しわ・むくみなどの解消法を学ぶフェイシャルコース</li>
						<li>セラピストを続けるために必要なこと</li>
						<li>インドで学ぶ実践重視のコース</li>
						<li>ハワイで学ぶ、アーユルヴェーダ＋ロミロミの新技術！</li>
						<li>バリでアーユルヴェーダマッサージ資格取得！</li>
					</ul>
					<ol class="courses_img school_sub_img">
						<div class="courses_img_top">
							<li>
								<figure>
									<img src="<?php bloginfo('url'); ?>/images/lp-multiple/courses01.png" alt="コース一覧" width="270" height="160">
								</figure>
							</li>
							<li>
								<figure>
									<img src="<?php bloginfo('url'); ?>/images/lp-multiple/courses02.png" alt="コース一覧" width="270" height="160">
								</figure>
							</li>
						</div>
						<li>
							<figure>
								<img src="<?php bloginfo('url'); ?>/images/lp-multiple/courses03.png" alt="コース一覧" width="564" height="340">
							</figure>
						</li>
					</ol>
				</div>
			</div>
			<div class="curriculum school_box" id="curriculum">
				<div class="school_title">
					<h4 class="font_serif">カリキュラム</h4>
				</div>
				<div class="school_box_lead font_serif">
					<p class="school_box_lead-sub">豊富なコースの<br class="sp">カリキュラムは</p>
					<p class="school_box_lead-main01">
						<span>座学</span> × <span>実技</span>
					</p>
					<p class="school_box_lead-main02">
						コースにあった<br class="sp">様々な<br class="pc">カリキュラム<br class="sp">で学んでいきます
					</p>
				</div>
				<div class="curriculum_box zagaku">
					<h5 class="sub_title">座学</h5>
					<figure class="school_img">
						<img src="<?php bloginfo('url'); ?>/images/lp-multiple/curriculum01.png" alt="座学" class="pc" width="1200" height="280">
						<img src="<?php bloginfo('url'); ?>/images/lp-multiple/curriculum01_sp.png" alt="座学" class="sp">
					</figure>
					<div class="curriculum_box_text">
						<p class="sub_title_lead">
							古くから伝わるインドの知恵を学び、生活ケア法・食事ケア法など体質に合わせたアドバイスを理解して頂き、アーユルヴェーダ健康法などなどいくつかのカリキュラムをご用意しております。
						</p>
						<h5 class="sub_title02">座学カリキュラム一覧<br class="sp"><span>（コースによって異なります）</span></h5>
						<p class="sub_title_lead">
							古くから伝わるインドの知恵を学び、生活ケア法・食事ケア法など体質に合わせたアドバイスを理解して頂き、アーユルヴェーダ健康法などなどいくつかのカリキュラムをご用意しております。
						</p>
						<div class="school_content">
							<ul class="curriculum_list school_list">
								<li>「生命の科学」アーユルヴェーダとは</li>
								<li>シローダーラー解説</li>
								<li>アーユルヴェーダ療法とは</li>
								<li>アーユルヴェーダ健康法</li>
							</ul>
							<ul class="curriculum_list school_list">
								<li>シローヴィヤンガ解説</li>
								<li>マルマ療法</li>
								<li>アーユルヴェーダセラピストとして</li>
								<li>フェイシャル理論</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="curriculum_box">
					<h5 class="sub_title jitsugi">実技</h5>
					<figure class="school_img">
						<img src="<?php bloginfo('url'); ?>/images/lp-multiple/curriculum02.png" alt="実技" class="pc" width="1200" height="280">
						<img src="<?php bloginfo('url'); ?>/images/lp-multiple/curriculum02_sp.png" alt="実技" class="sp">
					</figure>
					<div class="curriculum_box_text">
						<p class="sub_title_lead">
							インドの伝統的なハーブオイルマッサージで身体に溜まっている毒素排出し、生理機能を整える技術を学び、施術後の生活法・食事法についても学びや、「マルマ」の意味と効果とアロマオイル使用法についてなどいくつかのカリキュラムをご用意しております。
						</p>
						<h5 class="sub_title02 jitsugi">実技カリキュラム一覧<br class="sp"><span>（コースによって異なります）</span></h5>
						<p class="sub_title_lead">
							古くから伝わるインドの知恵を学び、生活ケア法・食事ケア法など体質に合わせたアドバイスを理解して頂き、アーユルヴェーダ健康法などなどいくつかのカリキュラムをご用意しております。
						</p>
						<div class="school_content">
							<ul class="curriculum_list school_list">
								<li>アヴィヤンガ（ボディトリートメント）</li>
								<li>シローヴィヤンガ（ヘッドトリートメント）</li>
								<li>シローダーラー</li>
								<li>フェイシャルトリートメント</li>
							</ul>
							<ul class="curriculum_list school_list">
								<li>マルマ療法</li>
								<li>アーユルヴェーダ式 鼻・耳・口・目のケア方法</li>
								<li>シローダーラー体験</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="message js-animation" id="message">
		<div class="w-container">
			<h3 class="heading">
				<span class="heading_en">message</span>
				<span class="heading_ja">理事挨拶</span>
			</h3>
			<div class="message_content">
				<figure>
					<img src="<?php bloginfo('url'); ?>/images/lp-multiple/izawa.jpg" alt="井澤 美夏" width="360" height="480">
				</figure>
				<div class="message_body">
					<div class="message_body_box">
						<h4 class="message_name">
							<span class="message_name-main">井澤 美夏</span>
							<span class="message_name-sub">Expanse.. School理事 兼 Expanse..銀座SPAセラピスト</span>
						</h4>
						<p class="message_lead">丁寧に、大切に、生きるということ。<br>新しい一歩に寄り添える存在でありたい。</p>
						<div class="message_text">
							<p>
								～アーユルヴェーダとの出会い～<br>
								デスクワークをしていた２０代の頃、少しずつ身体に不調が出始め、様々なトリートメントを受けましたが、なかなか良くならず漢方を試したり、病院にも行っても特に病気ではないと言われ、そんな時に初めてアーユルヴェーダを体験したのが始まりです。<br>
								体も気持ちも驚くほど楽になり感動したことを覚えています。<br>
								「アーユルヴェーダを学びたい、周りの人にも楽になってほしい」という想いですぐにインドへ渡り、ドクターに学び、その後エクスパンスに出会うことができました。
							</p>
							<p>
								アーユルヴェーダに触れる中で「丁寧に、大切に、自分と向き合いながら生きる」ということを日々学んでいます。<br>
								様々なオイル治療を受けたり、食事療法を試したり、インド・スリランカでは本当に様々な手法が存在するアーユルヴェーダ。知れば知るほど奥深いものです。
							</p>
							<p>
								これから新しいスタートをきる皆様の第一歩に寄り添える存在になりたい。<br>
								皆様にお会いできることを心より楽しみにしております。
							</p>
							<p class="name">井澤美夏</p>
						</div>
						<div class="message_history">
							<ul class="message_history-list">
								<li>
									<span>2008年</span><p>インド・ケララ州にてアーユルヴェーダを学ぶ</p>
								</li>
								<li>
								<span>2012年</span><p>株式会社Ｒ＆Ｍ入社　エクスパンス恵比寿本店配属</p>
								</li>
								<li>
									<span>2015年</span><p>恵比寿本店店長として様々な症例を学びながらサロン運営、現役セラピスト兼<br>スクール講師として人材育成にあたる</p>
								</li>
								<li>
									<span>2018年</span><p>エクスパンス　アーユルヴェーダ・スクール校長に就任</p>
								</li>
								<li>
									<span>2021年</span><p>エクスパンス　アーユルヴェーダ・スクール理事に就任</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="graduating js-animation" id="graduating">
		<div class="w-container">
			<h3 class="heading">
				<span class="heading_ja">卒業後の進路</span>
			</h3>
			<div class="graduating_inner">
				<div class="graduating_box_lead font_serif">
					<p class="graduating_box_lead-sub">夢のセラピストへ</p>
					<p class="graduating_box_lead-main">
						3,000人以上の<br class="sp">卒業生を輩出！<br>セラピストとして<br class="sp">活躍しています！
					</p>
				</div>
				<p class="graduating_lead">
					スクール卒業生の半数以上の方は、エクスパンス直営店(恵比寿本店、池袋本店、銀座SPA)での勤務へとステップアップしています。<br>
					15年間の実績と選ばれ続けるエクスパンスのノウハウ、再来率8割を超えるお客様の心を掴む接客力・技術力などを含め、<br class="pc">すべてのサロンワークを学ぶことができます。<br>
					その後の進路は、エクスパンス加盟店として独立開業される方、<br class="pc">
					そのままエクスパンスへ就職して最上級ランクであるグランドマスターを目指して活躍されている方も。
				</p>
				<p class="graduating_lead graduating_lead02">
					夢のセラピストへの第一歩を<br class="sp">踏み出してみましょう！<br>
					エクスパンスでの学びと経験は<br class="sp">生涯において役立ちます。
				</p>
			</div>
			<ol class="graduating_content">
				<li class="graduating_list">
					<div class="graduating_text_box">
						<div class="graduating_sub-title-box">
							<p>1</p>
							<h4 class="graduating_sub-title01">エクスパンス<br class="sp">直営店で勤務</h4>
						</div>
						<p class="graduating_text">
							すぐに開業するのが不安という方は、直営店舗にて勤務しながら技術力・接客力を磨くことができます。<br>
							また加盟店になると、サロン運営のノウハウや充実したフォローアップ制度を受けることができるため安心です。
						</p>
					</div>
					<figure class="graduating_img">
						<img src="<?php bloginfo('url'); ?>/images/lp-multiple/graduating04.png" alt="エクスパンス直営店で勤務" width="600" height="400">
					</figure>
				</li>
				<li class="graduating_list">
					<figure class="graduating_img">
						<img src="<?php bloginfo('url'); ?>/images/lp-multiple/graduating05.png" alt="独立開業" width="600" height="400">
					</figure>
					<div class="graduating_text_box">
						<div class="graduating_sub-title-box">
							<p>2</p>
							<h4 class="graduating_sub-title02">独立開業</h4>
						</div>
						<p class="graduating_text">
							アーユルヴェーダサロンを開業するために、何から手をつけて良いのか全く分からない方でも、エクスパンススクールを卒業することで、サロンオーナーになりご活躍されている方が全国各地にいらっしゃいます。<br>
							エクスパンスには、独自の技術・こだわりの接客と様々なノウハウがあり、それらをしっかり習得して繰り返し練習することで、失敗しない「本物のサロン作り」を実現することができます。
						</p>
					</div>
				</li>
			</ol>
		</div>
	</section>

	<section class="voice js-animation" id="voice">
		<h3 class="heading">
			<span class="heading_en">voice</span>
			<span class="heading_ja">卒業生の声</span>
		</h3>
		<div class="voice_content">
			<div class="show_more">
				<span class="open">続きを読む</span>
			</div>
			<div class="voice-item">
				<div class="voice_inner">
					<div class="slider">
						<div class="slick-item">
							<div class="video_box">
								<video controls playsinline preload="none" poster="<?php bloginfo('url'); ?>/movie/sotugyou3.jpg">
									<source src="<?php bloginfo('url'); ?>/movie/sotugyou3.mp4" type="video/mp4">
								</video>
							</div>
							<div class="voice_body">
								<p>エクスパンス直営店で勤務</p>
								<p>マスターセラピスト・恵比寿本店リーダー</p>
								<p>川畑</p>
								<ul>
									<li class="quetion">
										Q.なぜアーユルヴェーダセラピストを目指したのですか？<br>
											エクスパンススクールを選んだ決め手を教えてください。
									</li>
									<li class="answer">
										以前勤めていいたサロンで施術をさせていただくうちに、お客様一人一人に合った体質に対してのケア方法はないかと疑問に思っていました。<br>
										かつ、私の受けたセラピストさんがアーユルヴェーダ出身の方で上手だったことやオイルケアを上手になりたい思いがあったので、色々検索したらエクスパンスに出会いました。
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="voice_content">
			<div class="show_more">
				<span class="open">続きを読む</span>
			</div>
			<div class="voice-item">
				<div class="voice-item_inner">
					<div class="voice-item_box">
						<div style="width: 38%;">
							<img src="https://www.ex-panse.jp/images/lp/voice_tahanashi_01.png" alt="" class="pc">
							<img src="https://www.ex-panse.jp/images/lp/voice_tahanashi_01_sp.png" alt="" class="sp">
						</div>
						<div class="voice-item_profile" style="width: 58%;">
							<p>【独立・開業コース】2022年11月卒業</p>
							<p>Niccori -Ayurveda Salon-(軽井沢)</p>
							<p>高橋 陽子 様</p>
							<ul>
								<li class="quetion">
									Q.エクスパンススクールに決めた理由・決め手をお聞かせください。
								</li>
								<li class="answer">
									スクールだけでなく、常にお客様をお迎えしているサロンである事、そしていくつもの店舗を抱える実績のあるサロンである事が決め手となりました。
								</li>
								<li class="quetion">
									Q.実際に通ってみてエクスパンススクールの「ここが良かった！」と思う点を教えて下さい。
								</li>
								<li class="answer">
									毎回マンツーマンである事が私にとっては嬉しかったです。<br>
									先生も前回の弱点をしっかり覚えていて下さり、私だけの為の授業であると感じれた事が良かったです。</li>
								<li class="quetion">
									Q.店舗オープンまで卒業後何ヶ月ほどかかりましたか？
								</li>
								<li class="answer">
									約半年かかりました。
								</li>
							</ul>
							<img src="https://www.ex-panse.jp/images/lp/voice_tahanashi_02_sp.png" alt="" class="sp" style="margin: 20px 0;">
						</div>
					</div>
					<div class="voice-item_qa01">
						<div style="width: 58%;">
							<ul>
								<li class="quetion">
									Q.サロンのコンセプト、こだわりや大切にしていることは何ですか？
								</li>
								<li  class="answer">
									私はアーユルヴェーダを学ぶ前、とにかく自分の人生、心身共に満足していませんでした。<br>
									学んでいくうちに、そして生活に取り入れていくうちに、不調が消えました。<br>
									それだけでなく、日々の感情も安定し、イライラとは程遠い生活となりました。<br>
									私がそうなったように、誰でも変化できると確信しています。<br>
									私のサロンは、私1人で経営しています。<br>
									“あなただけの専属セラピスト”<br>
									をモットーに、単にオイルトリートメントだけではなく、その方の人生に一歩踏み込んで、様々なカウンセリングもさせて頂いています。
									<br><br>
									“人生って思っているより楽しい&amp;幸せ”<br>
									そう感じてもらえるように、1人1人のお客様にピッタリと寄り添います。<br>
									結果、世の中に優しさが循環するような世界を目指しています。
									</li>
								</ul>
						</div>
						<div style="width: 38%;">
							<img src="https://www.ex-panse.jp/images/lp/voice_tahanashi_02.png" alt="" class="pc">
						</div>
					</div>
					<div class="voice-item_qa02">
						<div style="width: 58%;">
							<ul>
								<li class="quetion">Q.これから卒業される方、開業する方へ向けて、激励とアドバイスをお願いします。</li>
								<li class="answer">
									私自身は、アーユルヴェーダを学ぶ前に自宅で整体サロンを経営していた時期もあったため、今のサロンをオープンするにあたっては、あまり悩まず勢いで進む事ができました。<br>
									しかしながら、初めてサロンをオープンしようと考えていらっしゃる方にとってはとても勇気のいる事だと思います。
									<br><br>
									大変ですが、学びながら着々と準備を進めて行く事が何よりの近道だと思います。
									<br><br>
									卒業してあまりに時間を空けてしまうと、知識も手技も、そしてご自身の熱も冷めてしまう事が考えられます。<br>
									是非、勢いとスピード感を持って進んで行かれる事をお勧め致します。<br>
									あとは、やりながら形を変えながら、皆様独自のサロンが出来上がって行く事と思います！
								</li>
							</ul>
						</div>
						<div style="width: 38%;">
							<img src="https://www.ex-panse.jp/images/lp/voice_tahanashi_03.png" alt="" class="pc"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="recruit js-animation">
		<picture>
			<!-- <source srcset="<?php bloginfo('url'); ?>/images/lp-multiple/recruit_lead_sp.png" media="(max-width: 640px)"> -->
			<img src="<?php bloginfo('url'); ?>/images/lp-multiple/recruit_lead_pc.png" alt="働きながら学びたい方も大歓迎" width="812" height="104">
		</picture>
		<a href="https://expanse.jp/recruit/" target="_blank" id="cv_main_01">
			<picture>
				<!-- <source srcset="<?php bloginfo('url'); ?>/images/lp-multiple/btn_recruit_sp.png" media="(max-width: 640px)"> -->
				<img src="<?php bloginfo('url'); ?>/images/lp-multiple/btn_recruit_pc.png" alt="採用お問い合わせはこちら" width="800" height="120">
			</picture>
		</a>
	</div>

	<section class="faq" id="faq">
		<div class="w-container">
			<h3 class="heading">
				<span class="heading_en">faq</span>
				<span class="heading_ja">よくあるご質問</span>
			</h3>
			<div class="faq_content">
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>仕事をしながら学ぶことは可能ですか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>可能です。多くの生徒様が働きながら通学されています。<br>また子育て中の方も多く、それぞれの通い方に対応しておりますのでご安心ください。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>受講ペース、曜日は決まっていますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>完全マンツーマンのため生徒様のペース、曜日に合わせながらスケジュールを組んでまいります。<br>例：1回2～3時間ずつ受講し、週1～2回通学など自由にお選びいただけます。<br>遠方のため短期集中をご希望の場合、1回5時間×7日間で卒業も可能です。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>地方からでも学ぶ事は可能ですか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>もちろん可能です。一週間ほど東京に滞在して取得が可能です。<br>近くにビジネスホテルも沢山ございますのでご安心ください。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>初心者なのですが大丈夫ですか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>大丈夫です。受講生の半数以上は未経験からスタートしています。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>ネイルはしていても大丈夫ですか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>基本的にネイルはオフしていただいております。<br>また、爪が長いと施術に支障がでるため、短めに切っていただいております。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>オンライン受講は可能ですか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>座学のみオンライン受講が可能です。<br>実技はご来校いただきマンツーマンにて直接指導となります。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>体力に自信がないのですが大丈夫ですか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>はい。基礎体力はある程度は必要ですが、エクスパンスの手技は力任せに行うものではなく、自分の体重をうまく使って施術するため、練習して慣れてまいりますと問題なく入れるようになります。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>年齢や性別に制限はありますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>成人している方が対象です。性別に制限はございません。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>休学の制度はありますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>やむを得ない事情の場合、一時的に休学することが可能です。<br>通常はお申込日より6ヶ月期限ですが、延長ご希望の場合はご相談の上最長1年間まで延長が可能です。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>クレジットカードでの支払いは可能ですか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>当行では現地での現金お支払いorお振込みにて対応しております。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>クーリングオフは対象になりますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>お申込み後8日以内は対象になります。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>卒業後すぐに開業できますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>はい。開業セット（ベッド、タオル、オイル、備品等）が付いているコースのため、<br>通学中から物件決めや準備を進めれば、卒業後すぐにサロン開業が可能です。<br>未経験の場合は、3ヶ月から半年ほど練習を積み重ねながらサロン開業準備を進めていき、<br>万全の準備をしてからスタートすることをお勧めいたしております。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>卒業後のアフターフォローはありますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>はい。ご卒業後2か月以内は無料フォローアップ講座を受講できます。（上限4時間）<br>その後もご希望の卒業生様向けにフォローアップ講座（有料）を随時開催しております。<br>理論やカウンセリング法、実技の復習などにご活用ください。
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>卒業後は直営サロンで働くことはできますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>できます。現在1店舗に各2名ほどスクール卒業生が在籍しております。<br>ご卒業後に面接を行い、採用となりましたらインターンシップを経て店舗配属となります。<br>（直営店は、恵比寿本店、池袋本店、銀座SPAです）
						</div>
					</dd>
				</dl>
				<dl>
					<dt class="accordion-title"><span class="q">Q</span>資格や証明書はもらえますか？</dt>
					<dd class="accordion-box">
						<div class="faq_answer">
							<span class="a">A</span>エクスパンス・アーユルヴェーダセラピスト協会のディプロマを発行しております。
						</div>
					</dd>
				</dl>
			</div>
		</div>
	</section>

	<section class="application js-animation" id="reserve">
		<div class="application_inner">
			<h3 class="heading">
				<span class="heading_en">application</span>
				<span class="heading_ja">お申込み</span>
			</h3>
			<div class="application_form">
				<?php echo do_shortcode( '[mwform_formkey key="1088"]' ); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer("lp-multiple"); ?>

<script>
	const itemHeights = [];

	$(function() {
		$(".voice-item_inner, .voice_inner").each(function () {
			const thisHeight = $(this).height();
			itemHeights.push(thisHeight);
		});

		$('.show_more').on('click', function() {
			if( $(this).children().is('.open') ) {
				$(this).html('<span>閉じる</span>').addClass('close-btn');
				$(this).parent().removeClass('slide-up').addClass('slide-down');
				const index = $(this).index(".show_more");
				const addHeight = itemHeights[index] + 90;
				$(this).next().animate({ height: addHeight }, 1000)
			} else {
				$(this).html('<span class="open">続きを読む</span>').removeClass('close-btn');
				$(this).parent().removeClass('slide-down').addClass('slide-up');
				$(this).next().animate({ height: 470 }, 1000)
			}
		});
	})
</script>
