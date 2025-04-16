<?php get_header("lp-basicmaster"); ?>

<main>
	<div class="kv_box">
		<h1 class="kv">
			<picture>
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/kv_sp.png" alt="エクスパンスセラピストで「手に職」を" class="sp">
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/kv_pc.png" alt="エクスパンスセラピストで「手に職」を" class="pc">
			</picture>

			<a href="#reserve">
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/btn_kv_sp.png" class="sp btn_kv_sp" id="cv_fv_sp" alt="エクスパンスセラピストで「手に職」を">
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/btn_kv_pc.png" class="pc btn_kv_pc" id="cv_fv_pc" alt="エクスパンスセラピストで「手に職」を">
			</a>
		</h1>
	</div>

	<div class="nav">
		<div class="nav_logo">
			<a href="#">
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/logo.svg" alt="アーユルヴェーダスクール" width="106" height="70" />
			</a>
		</div>
		<div class="nav_link">
			<ul class="nav_anchor">
				<li>
					<a href="#">セラピスト養成講座<br>コースの特徴</a>
				</li>
				<li>
					<a href="#onayami">このようなお悩み<br>ありませんか？</a>
				</li>
				<li>
					<a href="#voice">卒業生の声</a>
				</li>
				<li>
					<a href="#price">料金</a>
				</li>
				<li>
					<a href="#curriculum">コース<br>カリキュラム</a>
				</li>
				<li>
					<a href="#message">理事からの<br>メッセージ</a>
				</li>
			</ul>
			<ul class="nav_btn">
				<li>
					<a href="#faq">よくあるご質問</a>
				</li>
			</ul>
		</div>
		<div class="nav_reserve">
			<a href="#reserve" id="cv_nav">お申込み</a>
		</div>
		<div class="nav_menu">
			<button id="menu">
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/menu.svg" alt="menu" width="30" height="10">
			</button>
			<div class="nav_menu-inner">
				<ul class="nav_menu-list" id="menu-list">
					<li>
						<a href="#">セラピスト養成講座<br>コースの特徴</a>
					</li>
					<li>
						<a href="#onayami">このようなお悩み<br>ありませんか？</a>
					</li>
					<li>
						<a href="#voice">卒業生の声</a>
					</li>
					<li>
						<a href="#price">料金</a>
					</li>
					<li>
						<a href="#curriculum">コース<br>カリキュラム</a>
					</li>
					<li>
						<a href="#message">理事からの<br>メッセージ</a>
					</li>
						<a href="#faq">よくあるご質問</a>
					</li>
					<li>
						<a href="#reserve">お申込み</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<section class="onayami w-container js-animation" id="onayami">
		<h2 class="feature_lead">
			<picture>
				<source srcset="<?php bloginfo('url'); ?>/images/lp-basicmaster/lead_sp.png" media="(max-width: 640px)" />
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/lead_pc.png" alt="これまで約3000人の卒業生の輩出実績" width="1040" height="136">
			</picture>
		</h2>
		<h3 class="heading">
			<span class="heading_en">onayami</span>
			<span class="heading_ja">このようなお悩み<br>ありませんか？</span>
		</h3>
		<div class="onayami_content">
			<picture>
				<source srcset="<?php bloginfo('url'); ?>/images/lp-basicmaster/onayami_sp.png" media="(max-width: 640px)">
				<img decoding="async" src="<?php bloginfo('url'); ?>/images/lp-basicmaster/onayami.png" alt="このようなお悩みありませんか？" width="1200" height="559">
			</picture>
		</div>
	</section>

	<section class="point js-animation">
		<div class="w-container">
			<h3 class="heading-v2">
				<span class="heading-v2_en">エクスパンススクールなら</span>
				<p class="heading-v2_ja">
					<span>全て<span>解決！</span></span>
				</p>
			</h3>
			<div class="point_lead_box">
				<p class="point_lead">
					エクスパンススクールが<span>選ばれる理由</span>
				</p>
			</div>
			<ol class="point_list">
				<li>
					<figure class="point_num">
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point01.svg" alt="point01" width="133" height="46">
					</figure>
					<div class="point_body">
						<h4><span class="emphasis">未経験</span>でも大丈夫！</h4>
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point01-fig.png" alt="未経験でも大丈夫！" width="368" height="369">
						</figure>
						<p class="point_text">マンツーマン指導のためそれぞれのペースに合わせて受講できるため、未経験の方も焦ることなくじっくり学べます。</p>
					</div>
				</li>
				<li>
					<figure class="point_num">
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point02.svg" alt="point02" width="133" height="46">
					</figure>
					<div class="point_body">
						<h4>スケジュール<span class="emphasis">自由</span></h4>
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point02-fig.png" alt="スケジュール自由" width="368" height="369">
						</figure>
						<p class="point_text">マンツーマンだかこその、ライフスタイルに合わせた時間や予定の相談ができる。</p>
					</div>
				</li>
				<li>
					<figure class="point_num">
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point03.svg" alt="point03" width="133" height="46">
					</figure>
					<div class="point_body">
						<h4><span class="emphasis">ご自宅</span>で学べる</h4>
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point03-fig.png" alt="ご自宅で学べる" width="368" height="369">
						</figure>
						<p class="point_text">オンラインでも学べるので場所を問わず遠方の方でも学べます。※通学で学ぶ事も可能です。</p>
					</div>
				</li>
				<li>
					<figure class="point_num">
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point04.svg" alt="point04" width="133" height="46">
					</figure>
					<div class="point_body">
						<h4><span class="emphasis">基本理論</span>を学べる</h4>
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point04-fig.png" alt="基本理論を学べる" width="368" height="369">
						</figure>
						<p class="point_text">アーユルヴェーダセラピストに向けて、第一歩である基本理論を学べるコースです。<br>
						創業14年、都内4店舗展開するエクスパンスのアーユルヴェーダ知識とノウハウが学べます。</p>
					</div>
				</li>
				<li>
					<figure class="point_num">
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point05.svg" alt="point05" width="133" height="46">
					</figure>
					<div class="point_body">
						<h4><span class="emphasis">短期間</span>で学べる</h4>
						<figure>
							<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/point05-fig.png" alt="短期間で学べる" width="368" height="369">
						</figure>
						<p class="point_text">オンラインなら4時間、通学なら5時間という短い時間でアーユルヴェーダを学べます。<br>
						※通学コースには30分アヴィヤンガ施術付き</p>
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
			<div class="voice_inner">
				<div class="slider">
					<div class="slick-item">
						<div class="video_box">
							<video controls playsinline preload="none" poster="<?php bloginfo('url'); ?>/movie/sotugyou3.jpg">
								<source src="<?php bloginfo('url'); ?>/movie/sotugyou3.mp4" type="video/mp4">
							</video>
						</div>
						<div class="voice_body">
							<p><span>【基礎コース】卒業</span></p>
							<span class="voice_name">マスターセラピスト・恵比寿本店リーダー</span>
							<span class="voice_area">川畑</span>
						</div>
					</div>
					<div class="slick-item">
						<div class="video_box">
							<video controls playsinline preload="none" poster="<?php bloginfo('url'); ?>/movie/sotugyou2.jpg">
								<source src="<?php bloginfo('url'); ?>/movie/sotugyou2.mp4" type="video/mp4">
							</video>
						</div>
						<div class="voice_body">
							<p><span>【じっくりコース】卒業</span></p>
							<span class="voice_name">セラピスト</span>
							<span class="voice_area">福嶋</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<ul class="voice_content voice_content02">
			<li class="slick-item">
				<div class="voice_name02">
					<figure>
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster//icon_voice.svg" alt="voice01" width="72" height="72">
					</figure>
					<p>2022年卒業　E．F様</p>
				</div>
				<p class="voice_note">１２月８日〜１６日<br>
				短期集中で独立開業コースを受講させて頂きました。
				<br><br>
				今回、エクスパンススクールを選んだ一番の理由がマンツーマンで受講者のスケジュールに合わせて学べる所、そして問い合わせの際担当して下さった山本様の電話のご対応が素晴らしく色々アドバイスくださりエクスパンススクールなら安心して学ぶことが出来ると思い受講させて頂きました。
				<br><br>
				私は現在石垣島に在住しており都度東京に行って学ぶ事は色々な面で難しく短期集中で受講内容をプログラムしてくれたのは大変助かりました。<br>
				又この業界が未経験であった為マンツーマンで学べた事も都度分からない事を確認出来て良かったです。
				<br><br>
				学んで行くうちにどんどんアーユルヴェーダをもっと知りたくなり、<br>
				卒業した後も様々な書籍を読んだりして日々アーユルヴェーダを学んでます。
				<br><br>
				卒業後知り合いのサロンをお借りしてモニター体験をさせて頂き10日間で25名の方に施錠させて頂きました。<br>
				皆とても気持ち良かった。<br>
				他のオイルトリートメンとは又違って良かったとのお言葉め頂き改めてエクスパンススクールにて学べて良かったと実感しました。
				<br><br>
				現在プライベートサロンオープンに向けて準備の真っ最中です。<br>
				多くの方にアーユルヴェーダの素晴らしさとエクスパンススクールにて学んだおもてなしをお伝えしていきたいと思います
				<br><br>
				担当して下さった山本様始めエクスパンススクールの皆様大変お世話になりました。</p>
			</li>
			<li class="slick-item">
				<div class="voice_name02">
					<figure>
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster//icon_voice.svg" alt="voice01" width="72" height="72">
					</figure>
					<p>2022年卒業　Y・N様</p>
				</div>
				<p class="voice_note">アーユルヴェーダに出会う前の私は身体と精神的にも不調があり、これが普通なんだと思い込んで日常生活を送っていました。<br>
				でもアーユルヴェーダを学ぶうちに自分の内側での不調に気づくことができました。<br>
				アヴィヤンガを定期的にすることで今までずーっと悩んでいた物事の捉え方や身体の痛み、そして精神までも改選されていき驚きでした。
				<br><br>
				上原校長の手技が素晴らしくて、包み込まれるようなそっと寄り添ってくれているようにも感じました。<br>
				私の不調を一緒に考えてくれてアドバイスもして頂き、私も現代今のコロナ渦で頑張っている人達に心地よいリラクゼーションをしてあげたいと思うようになりスクールに通い始めました。<br>
				マンツーマンでの実技と講義なのでわからないところも、しっかり教えてくれるのでとても復習もやりやすかったです。<br>
				アーユルヴェーダの世界にどっぷりつかって日常生活でも色々取り入れて実践しています。<br>
				エクスパンスの皆さんの笑顔素晴らしい優しさありがとうございます。（一部抜粋）</p>
			</li>
			<li class="slick-item">
				<div class="voice_name02">
					<figure>
						<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster//icon_voice.svg" alt="voice01" width="72" height="72">
					</figure>
					<p>2022年卒業　K・K様</p>
				</div>
				<p class="voice_note">受講スケジュールがフレキシブルで、仕事をしながら自分のペースで進められます。<br>
				モデルとなってくれるサロンのスタッフさんたちも丁寧に教えてくれて、エクスパンスのスタッフ全員がサポートしてくれる環境です。
				<br><br>
				講師兼校長は心からアーユルヴェーダが好きなんだと解る、受講生に何度でも丁寧に指導してくれる人柄でした。</p>
			</li>
		</ul>
	</section>

	<section class="price js-animation" id="price">
		<h3 class="heading">
			<span class="heading_en">price</span>
			<span class="heading_ja">料金</span>
		</h3>
		<div class="price_content">
			<div class="price_inner">
				<ul class="price_list">
					<li>
						<div class="price_list-top">
							<p class="price_list-lesson">オンライン</p>
							<p class="price_list-time"><span>4</span>時間</p>
						</div>
						<div class="price_list-bottom">
							<div class="price_list-price price01">
								<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/price_online.png" alt="¥49,500" width="211px" height="94px">
							</div>
						</div>
					</li>
					<li>
						<div class="price_list-top">
							<p class="price_list-lesson">通学</p>
							<p class="price_list-time"><span>5</span>時間</p>
						</div>
						<div class="price_list-bottom">
							<div class="price_list-price price02">
								<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/price_goto.png" alt="¥79,500" width="208px" height="94px">
							</div>
							<p class="price_list-text">※通学コースには30分アヴィヤンガ施術付き</p>
						</div>
					</li>
				</ul>
				<p class="price_note"><span class="marker">コース卒業後「基本コース18時間」、「じっくりコース24時間」、「独立開業コース35時間」を受講される場合、49,500円割引</span></p>
			</div>
		</div>
	</section>

	<div class="session js-animation">
		<picture>
			<source srcset="<?php bloginfo('url'); ?>/images/lp-basicmaster/session-lead_sp.png" media="(max-width: 640px)">
			<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/session-lead.png" alt="エクスパンスセラピストで「手に職」を" width="671" height="90">
		</picture>
		<a href="#reserve" id="cv_main_01">
			<picture>
				<source srcset="<?php bloginfo('url'); ?>/images/lp-basicmaster/session-btn_sp.png" media="(max-width: 640px)">
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/session-btn.png" alt="お申し込みはこちら" width="800" height="134">
			</picture>
		</a>
	</div>

	<section class="curriculum js-animation" id="curriculum">
		<div class="w-container">
			<h3 class="heading">
				<span class="heading_en">curriculum</span>
				<span class="heading_ja">コースカリキュラム</span>
			</h3>
			<div class="curriculum_box">
				<h4 class="curriculum_heading"><img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/icon_note.svg" alt="座学" width="46" height="46">座学</h4>
				<div class="curriculum_body">
					<ol class="curriculum_list">
						<li>
							<div class="row">
								<figure>
									<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/menu01.jpg" alt="「生命の科学」アーユルヴェーダとは" width="120" height="120">
								</figure>
								<h5>①「生命の科学」アーユルヴェーダとは</h5>
							</div>
							<div class="curriculum_content">
								<h5>①「生命の科学」アーユルヴェーダとは</h5>
								<div>
									<p class="curriculum_text">古くから伝わるインドの知恵を学びます。</p>
									<p class="curriculum_text">生活ケア法・食事ケア法など体質に合わせたアドバイスを理解し意識することで、マッサージとの相乗効果が生まれます。<br>日常生活に取り入れていただきたい内容ばかりです。</p>
								</div>
								<ul class="curriculum_item">
									<li>⚫︎ 世界三大医学/未病を癒す予防医学として</li>
									<li>⚫︎ アーユルヴェーダ式 自分の個性とは（ドーシャ体質論）</li>
									<li>⚫︎ トリドーシャの特徴/アグニ・アーマ・オージャスとは</li>
									<li>⚫︎ アーマ（未消化物）をなくすためにやること＝白湯の力</li>
								</ul>
								<p class="curriculum_text">セラピストとして、体質改善・ヒーリング・対処法としても役立ちます。</p>
							</div>
						</li>
						<li>
							<div class="row">
								<figure>
									<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/menu02.jpg" alt="アーユルヴェーダ健康法" width="120" height="120">
								</figure>
								<h5>②アーユルヴェーダ健康法</h5>
							</div>
							<div class="curriculum_content">
								<h5>②アーユルヴェーダ健康法</h5>
								<ul class="curriculum_item">
									<li>⚫︎ 体質診断「ドーシャ・チェック」～応用編～</li>
									<li>⚫︎ アーユルヴァーダ生活法「アーマパーチャナ」</li>
									<li>⚫︎ アーマ（未消化物）をなくす毒素排出法とは</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="row">
								<figure>
									<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/menu03.jpg" alt="マルマ療法" width="120" height="120">
								</figure>
								<h5>③マルマ療法</h5>
							</div>
							<div class="curriculum_content">
								<h5>③マルマ療法</h5>
								<div>
									<p class="curriculum_text">急所という経穴「マルマ」の意味と効果とアロマオイル使用法について学びます。<br>施術後の生活法・食事法についても学びます。</p>
								</div>
							</div>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="message js-animation" id="message">
		<div class="w-container">
			<h3 class="heading">
				<span class="heading_en">message</span>
				<span class="heading_ja">理事からのメッセージ</span>
			</h3>
			<div class="message_content">
				<figure>
					<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/izawa.jpg" alt="井澤 美夏" width="360" height="480">
				</figure>
				<div class="message_body">
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
	</section>


	<section class="faq js-animation" id="faq">
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
							<span class="a">A</span>（仮）もちろん可能です。
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
			</div>
		</div>
	</section>

	<section class="reserve js-animation" id="reserve">
		<div class="reserve_inner">
			<h3 class="heading">
				<span class="heading_en">application</span>
				<span class="heading_ja">お申込はこちら</span>
				<span class="heading_sub">アーユルヴェーダベーシックマスターコース</span>
			</h3>
			<div class="reserve_form">
				<?php echo do_shortcode( '[mwform_formkey key="1177"]
' ); ?>
			</div>
		</div>
	</section>

	<div class="fixedBanner">
		<a href="#reserve" id="cv_bnr">
			<picture>
				<source srcset="<?php bloginfo('url'); ?>/images/lp-basicmaster/fixed-banner_sp.png" media="(max-width: 640px)" />
				<img src="<?php bloginfo('url'); ?>/images/lp-basicmaster/fixed-banner_pc.png" alt="お申し込みはこちら" />
			</picture>
		</a>
	</div>
</main>

<?php get_footer("lp-basicmaster"); ?>

<script>
	const itemHeights = [];

	$(function() {
		$(".voice-item_inner").each(function () {
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
