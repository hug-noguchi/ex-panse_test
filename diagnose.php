<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>アーユルヴェーダ 体質診断｜アーユルヴェーダスクール セラピスト資格｜東京都渋谷区恵比寿 Expanse..School</title>
	<meta name="keywords" content="アーユルヴェーダ,養成講座,セラピスト,スクール,インストラクター,マッサージ">
	<meta name="description" content="アーユルヴェーダスクールです。東京・恵比寿駅徒歩１分。セラピストとして新たな技術や、これから独立をお考えの方への本場ケララのアーユルヴェーダスクール。実技・座学等、色々な養成講座コースがあります。独立支援コースやサロンの開業等サポートしております。東京・神奈川・千葉・茨城">
	<link rel="icon" href="images/icon.gif" type="image/jpeg" sizes="16x16">
	<link rel="apple-touch-icon-precomposed" href="images/webclip.png" />
	<link href="include/css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="include/js/bootstrap.min.js"></script>
	<script src="include/js/main.js"></script>
    <script src="include/js/jquery.easing-1.3.pack.js"></script>
    <script src="include/js/ofi.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="include/css/style.css">



</head>





<body id="diagnose">


	<h1>アーユルヴェーダ 体質診断|東京都渋谷区恵比寿 Expanse..School</h1>



	<script>

		function check() {
			let str = [];

			//ラジオボタンの中身を取得
			const q = [document.shitsumon.q0, document.shitsumon.q1, document.shitsumon.q2, document.shitsumon.q3, document.shitsumon.q4, document.shitsumon.q5, document.shitsumon.q6, document.shitsumon.q7, document.shitsumon.q8, document.shitsumon.q9, document.shitsumon.q10, document.shitsumon.q11, document.shitsumon.q12, document.shitsumon.q13, document.shitsumon.q14, document.shitsumon.q15, document.shitsumon.q16, document.shitsumon.q17];

			//A・B・Cそれぞれの合計点数を入れるための変数
			var aaa = 0;
			var bbb = 0;
			var ccc = 0;

			//どのラジオボタンが選択されたか判定し、点数を加算
			for (let n = 0; n < q.length; n++) {
				for (let i = 0; i < q[n].length; i++) {
					if (q[n][i].checked) {
						str[n] = q[n][i].value;
						if (str[n] == "A") {
							aaa++;
						} else if (str[n] == "B") {
							bbb++;
						} else if (str[n] == "C") {
							ccc++;
						}
						break;
					}
				}
			}

			var message = "";
			if (aaa > bbb && aaa > ccc) {
				message = '';
			} else if (bbb > aaa && bbb > ccc) {
				message = '';
			} else if (ccc > aaa && ccc > bbb) {
				message = '';
			} else {
				message = '';
			}

			//HTMLへ出力
			var html = '<div><h3>診断結果</h3>';
			html += '<p>もっとも数の多いドーシャをチェックしてください。<br>※チェック数が同数の場合は、それぞれのドーシャの特性を参考にしてください</p>';
			html += '<table><tr><th><a href="diagnose.php#vata">ヴァータ体質度</a></th><td>' + aaa + '％</td></tr>';
			html += '<tr><th><a href="diagnose.php#pitta">ピッタ体質度</a></th><td>' + bbb + '％</td></tr>';
			html += '<tr><th><a href="diagnose.php#kappa">カパ体質度</a></th><td>' + ccc + '％</td></tr></table>';
			//html += '' + message + '';
			html += '<div id="vata" class="dosha" style="background-color: #102741;"><p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p><article><p class="img"><picture><source type="image/webp" srcset="images/diagnose_vata.webp"><img decoding="async" src="images/diagnose_vata.png"></picture></p><h3>ヴァータ体質の<br class="sp">特徴</h3><p>とても活動的で、感受性が強く、集中力がありますが、波が激しく落ち着きがないことも。<br>繊細で傷つきやすく、悩みや不安を感じやすく、忘れっぽい一面もあります。<br>変化や刺激が好きで、機転が利き、アイデアを出すことが得意です。<br>人なつっこく気前も良いため、人と話したり接する職業が向いています。<br>身体の面では、食事が不規則になりやすく、無理をして体力が落ちてしまい、自分が気づいたときには、動けなくなるほど疲れ果てていることも。</p><h3>ヴァータ体質の<br class="sp">ケア法</h3><p>身体が冷えて乾燥しやすいため、とにかく保温と保湿が必要なため、アヴィヤンガのマッサージが最適です。<br>自分やヴァータ体質のご家族に毎日オイルケアをしましょう。<br>頭痛や腰痛、生理痛、関節痛など痛みが出てしまっている方は、ヴァータが高まりすぎているサイン。</p><p>たっぷりのオイルケアと、睡眠・休息、安心できる人と楽しい気分で過ごし、明るい色の服や寝具に変えるなど、自分がリラックスできる環境に整えることが大切です。<br>スクールでは、より深いアーユルヴェーダケア法、セルフマッサージ法もお伝えしていきます。</p></article><p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p></div><div id="pitta" class="dosha" style="background-color: #36080c;"><p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p><article><p class="img"><picture><source type="image/webp" srcset="images/diagnose_pitta.webp"><img decoding="async" src="images/diagnose_pitta.png"></picture></p><h3>ピッタ体質の<br class="sp">特徴</h3><p>決断力があり、情熱的で優れた知性の持ち主。<br>説得力がありリーダーシップを発揮する方も多い。<br>激しく感情が動き、短気で批判的、イライラしたりぶっきらぼうになり、時には執着を持つ。<br>その一方で新しい考えを受け入れ、考え方・話し方も明晰で、人前での演説にも向いている。<br>自信に満ちていて勇敢、知識欲も旺盛なためいろいろな事にチャレンジします。<br>身体の面では、ピッタが過剰になると、胃腸を壊したり、熱がこもりやすく汗っかき、湿疹などの皮膚トラブル、目の充血など血液系の症状が起きやすくなります。</p><h3>ピッタ体質の<br class="sp">ケア法</h3><p>すべての刺激を避けることが大切です。<br>辛い食べ物やお酒、熱すぎるもの冷たいものにも要注意。<br>あらゆる種類の不純物に敏感なので、食べ物、水、空気などにも気をつけましょう。<br>自然の中で深いくつろぎを感じやすいので、休みには森林や川などの近くに行くよう心がけましょう。<br>人におせっかいを焼きすぎない、人間関係のバランスを保つようにするとストレスが減っていきます。</p><p>アヴィヤンガで緊張を緩めるマッサージを行い、シロダーラで脳をリラックスさせ神経を緩めることで、本来のピッタの良さが戻ってきます。<br>熱いのが苦手なので、温めすぎないように短時間のケアがお勧めです。<br>アーユルヴェーダでは、ピッタの高まりに対してのケアを一番優先的に行います。<br>スクールでは、その理由とケア法なども含めて、より深くお伝えしていきます。</p></article><p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p></div><div id="kappa" class="dosha" style="background-color: #07291b;"><p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p><article><p class="img"><picture><source type="image/webp" srcset="images/diagnose_kappa.webp"><img decoding="async" src="images/diagnose_kappa.png"></picture></p><h3>カパ体質の<br class="sp">特徴</h3><p>何事にも寛容で穏やかで、落ち着きがあり、愛情深く情緒が安定しています。<br>人の面倒をよくみたり、思いやりを持って人と接することができ聞き上手。<br>まさに癒し系タイプ。<br>記憶力も良く、体力もあり、我慢強いため、自分の気持ち溜め込んであまり表に出せないこともしばしば。<br>ゆっくりで慎重派、執着心を持ちやすく、環境の変化を嫌います。<br>身体の面では、カパが過剰になると眠気やだるさ、少し食べてもすぐ太りやすくなり、むくみや鼻水など水分による代謝トラブルが起きます。</p><h3>カパ体質の<br class="sp">ケア法</h3><p>たくさんの刺激と動きを取り入れましょう。<br>朝一でセフルアヴィヤンガのマッサージを行い、熱いシャワーを浴びて身体を起こしましょう。<br>カパは冷えに弱いため、常に温かくして過ごすことが大切です。<br>部屋が要らないもので散らかってきたらカパが増えているサイン。<br>定期的に断捨離をして溜め込まない環境にすることがお勧めです。<br>家でゴロゴロしたり昼寝はＮＧです。<br>安心できる家族や友人に会い、鮮やかな色の服を着て、外に出かけて刺激を取り入れましょう。<br>スクールでは、カパ体質に起こりやすい症状や病気、ケア法を含めてお伝えしていきます。</p></article><p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p></div><div class="kekka_btn"><div class="site_btn tosalon"><a href="https://expanse.test-hug.com" target="_blank">アーユルヴェーダサロン<br class="sp_text">はこちら</a></div><div class="site_btn toschool"><a href="http://ex-panse.test-hug.com/" target="_blank">アーユルヴェーダスクール<br class="sp_text">はこちら</a></div></div>';
			document.getElementById("kekka").innerHTML = html;
			document.getElementById("kekka").scrollIntoView();
		}

	</script>




	<main>


		<section>

			<article class="main_content">

				<h2><span>自分の体質を知る</span><br>
				アーユルヴェーダ 体質診断</h2>

				<div class="diagnose_box">



					<p class="parts_p parts_header"><picture><source type="image/webp" srcset="images/diagnose_box_header.webp"><img decoding="async" src="images/diagnose_box_header.png"></picture></p>
					<p class="parts_p parts_footer"><picture><source type="image/webp" srcset="images/diagnose_box_footer.webp"><img decoding="async" src="images/diagnose_box_footer.png"></picture></p>

					<div class="inner">
						<div class="text_box">
							<p>アーユルヴェーダでは、ドーシャと呼ばれる<br>
							3つ「ヴァータ」「ピッタ」「カパ」という生命エネルギーの組み合わせによって体質が分かります。</p>

							<p>健康で美しくある鍵は、、<br>
							ドーシャのバランスは、人により異なりまた一定の割合ではなく日々変化しています。<br>
							そして、バランスの乱れが様々な病気を引き起こす原因または要因になると考えられています。</p>

							<p>いまの不調をそのままにせず、快適な日々を過ごすために、<br>
							生活やケア法、自分に合った食事法を取り入れることが大切です。<br>
							まずは自分のドーシャを知ることからスタートしてみましょう！</p>
						</div>


						<form id="shitsumon" name="shitsumon" onsubmit="check(); return false;">
							<div class="shitsumon_inner">
								<h3>Q1.動作</h3>
								<ul>
									<li><label><input name="q0" type="radio" value="A" /><span>すばやい、せっかち</span></label></li>
									<li><label><input name="q0" type="radio" value="B" /><span>効率的でテキパキ</span></label></li>
									<li><label><input name="q0" type="radio" value="C" /><span>ゆっくり</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q2.記憶力</h3>
								<ul>
									<li><label><input name="q1" type="radio" value="A" /><span>物覚えが早いが忘れるのも早い</span></label></li>
									<li><label><input name="q1" type="radio" value="B" /><span>適度、たまに記憶が抜ける</span></label></li>
									<li><label><input name="q1" type="radio" value="C" /><span>覚えは遅いが、記憶力が良い</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q3.性質</h3>
								<ul>
									<li><label><input name="q2" type="radio" value="A" /><span>活発、創造的、好奇心旺盛</span></label></li>
									<li><label><input name="q2" type="radio" value="B" /><span>時間に正確、野心家、仕切る</span></label></li>
									<li><label><input name="q2" type="radio" value="C" /><span>穏やかで落ちついている、愛情深い</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q4.情緒</h3>
								<ul>
									<li><label><input name="q3" type="radio" value="A" /><span>悩んだり不安になることが多い、気分が変わりやすい</span></label></li>
									<li><label><input name="q3" type="radio" value="B" /><span>情熱的、気が強い、<br>
									イライラしがち、意見が合わないと不機嫌になり批判的</span></label></li>
									<li><label><input name="q3" type="radio" value="C" /><span>安定している、めったに怒らない、平和主義、変化が苦手</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q5.体格</h3>
								<ul>
									<li><label><input name="q4" type="radio" value="A" /><span>瘦せ型、太りにくい</span></label></li>
									<li><label><input name="q4" type="radio" value="B" /><span>均整がとれている</span></label></li>
									<li><label><input name="q4" type="radio" value="C" /><span>大柄でふっくらしている、太りやすい</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q6.歩き方</h3>
								<ul>
									<li><label><input name="q5" type="radio" value="A" /><span>人より早い</span></label></li>
									<li><label><input name="q5" type="radio" value="B" /><span>スピードはふつう、目的をもって歩く</span></label></li>
									<li><label><input name="q5" type="radio" value="C" /><span>人より遅い</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q7.決断</h3>
								<ul>
									<li><label><input name="q6" type="radio" value="A" /><span>あれこれ迷いがち</span></label></li>
									<li><label><input name="q6" type="radio" value="B" /><span>決断が早い、譲らない</span></label></li>
									<li><label><input name="q6" type="radio" value="C" /><span>優柔不断、人に合わせることが多い</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q8.話し方</h3>
								<ul>
									<li><label><input name="q7" type="radio" value="A" /><span>早口でおしゃべり</span></label></li>
									<li><label><input name="q7" type="radio" value="B" /><span>明晰、的確で説得力がある</span></label></li>
									<li><label><input name="q7" type="radio" value="C" /><span>ゆっくりで聞き上手</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q9.お通じ</h3>
								<ul>
									<li><label><input name="q8" type="radio" value="A" /><span>便秘、便は硬い</span></label></li>
									<li><label><input name="q8" type="radio" value="B" /><span>規則的、便は柔らかい、たまに下痢</span></label></li>
									<li><label><input name="q8" type="radio" value="C" /><span>やわらかい、安定</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q10.体温</h3>
								<ul>
									<li><label><input name="q9" type="radio" value="A" /><span>手足が冷えやすい、寒さに弱い</span></label></li>
									<li><label><input name="q9" type="radio" value="B" /><span>暑いと感じやすい</span></label></li>
									<li><label><input name="q9" type="radio" value="C" /><span>寒さに弱い</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q11.汗</h3>
								<ul>
									<li><label><input name="q10" type="radio" value="A" /><span>汗をかきにくい</span></label></li>
									<li><label><input name="q10" type="radio" value="B" /><span>汗っかき</span></label></li>
									<li><label><input name="q10" type="radio" value="C" /><span>動くと出る</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q12.肌質</h3>
								<ul>
									<li><label><input name="q11" type="radio" value="A" /><span>乾燥肌、敏感肌</span></label></li>
									<li><label><input name="q11" type="radio" value="B" /><span>皮膚トラブルが多い、湿疹・ニキビ</span></label></li>
									<li><label><input name="q11" type="radio" value="C" /><span>しっとりやわらかく色白</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q13.睡眠</h3>
								<ul>
									<li><label><input name="q12" type="radio" value="A" /><span>寝つきが悪い、眠りが浅い</span></label></li>
									<li><label><input name="q12" type="radio" value="B" /><span>寝つきが良いが短い、考え事があると眠れない</span></label></li>
									<li><label><input name="q12" type="radio" value="C" /><span>眠りが深い、よく寝る</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q14.髪質</h3>
								<ul>
									<li><label><input name="q13" type="radio" value="A" /><span>細く乾燥している</span></label></li>
									<li><label><input name="q13" type="radio" value="B" /><span>細くてまっすぐ、少ない</span></label></li>
									<li><label><input name="q13" type="radio" value="C" /><span>黒く太い、多い</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q15.爪</h3>
								<ul>
									<li><label><input name="q14" type="radio" value="A" /><span>青白く、割れやすい</span></label></li>
									<li><label><input name="q14" type="radio" value="B" /><span>きれいな楕円で、柔らかくピンク</span></label></li>
									<li><label><input name="q14" type="radio" value="C" /><span>四角く大きく分厚い</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q16.食事</h3>
								<ul>
									<li><label><input name="q15" type="radio" value="A" /><span>不規則、抜くこともある</span></label></li>
									<li><label><input name="q15" type="radio" value="B" /><span>食欲旺盛、かなりの量を食べられる</span></label></li>
									<li><label><input name="q15" type="radio" value="C" /><span>ゆっくり食べる</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q17.嗜好</h3>
								<ul>
									<li><label><input name="q16" type="radio" value="A" /><span>甘いもの(砂糖・果物)、スナック菓子</span></label></li>
									<li><label><input name="q16" type="radio" value="B" /><span>辛いもの、油っこいもの、お酒、アイス</span></label></li>
									<li><label><input name="q16" type="radio" value="C" /><span>炭水化物、乳製品</span></label></li>
								</ul>
							</div>


							<div class="shitsumon_inner">
								<h3>Q18.消化力</h3>
								<ul>
									<li><label><input name="q17" type="radio" value="A" /><span>不安定、ガスが溜まりやすい</span></label></li>
									<li><label><input name="q17" type="radio" value="B" /><span>胃腸を壊しやすい</span></label></li>
									<li><label><input name="q17" type="radio" value="C" /><span>安定している</span></label></li>
								</ul>
							</div>

							<div class="question_btn">
								<input type="submit" value="診断する" class="hantei" />
							</div>
						</form>

						<div id="kekka"></div>

						<!----->


						<!--div id="kekka">
							<div id="vata" class="dosha" style="background-color: #102741;">
								<p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p>

								<article>
									<p class="img"><picture><source type="image/webp" srcset="images/diagnose_vata.webp"><img decoding="async" src="images/diagnose_vata.png"></picture></p>

									<h3>ヴァータ体質の特徴</h3>
									<p>とても活動的で、感受性が強く、集中力がありますが、波が激しく落ち着きがないことも。<br>
									繊細で傷つきやすく、悩みや不安を感じやすく、忘れっぽい一面もあります。<br>
									変化や刺激が好きで、機転が利き、アイデアを出すことが得意です。<br>
									人なつっこく気前も良いため、人と話したり接する職業が向いています。<br>
									身体の面では、食事が不規則になりやすく、無理をして体力が落ちてしまい、自分が気づいたときには、動けなくなるほど疲れ果てていることも。</p>

									<h3>ヴァータ体質のケア法</h3>
									<p>身体が冷えて乾燥しやすいため、とにかく保温と保湿が必要なため、アヴィヤンガのマッサージが最適です。<br>
									自分やヴァータ体質のご家族に毎日オイルケアをしましょう。<br>
									頭痛や腰痛、生理痛、関節痛など痛みが出てしまっている方は、ヴァータが高まりすぎているサイン。</p>

									<p>たっぷりのオイルケアと、睡眠・休息、安心できる人と楽しい気分で過ごし、明るい色の服や寝具に変えるなど、自分がリラックスできる環境に整えることが大切です。<br>
									スクールでは、より深いアーユルヴェーダケア法、セルフマッサージ法もお伝えしていきます。</p>
								</article>

								<p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p>
							</div>


							<div id="pitta" class="dosha" style="background-color: #36080c;">
								<p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p>

								<article>
									<p class="img"><picture><source type="image/webp" srcset="images/diagnose_pitta.webp"><img decoding="async" src="images/diagnose_pitta.png"></picture></p>

									<h3>ピッタ体質の特徴</h3>
									<p>決断力があり、情熱的で優れた知性の持ち主。<br>
									説得力がありリーダーシップを発揮する方も多い。<br>
									激しく感情が動き、短気で批判的、イライラしたりぶっきらぼうになり、時には執着を持つ。<br>
									その一方で新しい考えを受け入れ、考え方・話し方も明晰で、人前での演説にも向いている。<br>
									自信に満ちていて勇敢、知識欲も旺盛なためいろいろな事にチャレンジします。<br>
									身体の面では、ピッタが過剰になると、胃腸を壊したり、熱がこもりやすく汗っかき、湿疹などの皮膚トラブル、目の充血など血液系の症状が起きやすくなります。</p>

									<h3>ピッタ体質のケア法</h3>
									<p>すべての刺激を避けることが大切です。<br>
									辛い食べ物やお酒、熱すぎるもの冷たいものにも要注意。<br>
									あらゆる種類の不純物に敏感なので、食べ物、水、空気などにも気をつけましょう。<br>
									自然の中で深いくつろぎを感じやすいので、休みには森林や川などの近くに行くよう心がけましょう。<br>
									人におせっかいを焼きすぎない、人間関係のバランスを保つようにするとストレスが減っていきます。</p>

									<p>アヴィヤンガで緊張を緩めるマッサージを行い、シロダーラで脳をリラックスさせ神経を緩めることで、本来のピッタの良さが戻ってきます。<br>
									熱いのが苦手なので、温めすぎないように短時間のケアがお勧めです。<br>
									アーユルヴェーダでは、ピッタの高まりに対してのケアを一番優先的に行います。<br>
									スクールでは、その理由とケア法なども含めて、より深くお伝えしていきます。</p>
								</article>

								<p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p>
							</div>


							<div id="kappa" class="dosha" style="background-color: #07291b;">
								<p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p>

								<article>
									<p class="img"><picture><source type="image/webp" srcset="images/diagnose_kappa.webp"><img decoding="async" src="images/diagnose_kappa.png"></picture></p>

									<h3>カパ体質の特徴</h3>
									<p>何事にも寛容で穏やかで、落ち着きがあり、愛情深く情緒が安定しています。<br>
									人の面倒をよくみたり、思いやりを持って人と接することができ聞き上手。<br>
									まさに癒し系タイプ。<br>
									記憶力も良く、体力もあり、我慢強いため、自分の気持ち溜め込んであまり表に出せないこともしばしば。<br>
									ゆっくりで慎重派、執着心を持ちやすく、環境の変化を嫌います。<br>
									身体の面では、カパが過剰になると眠気やだるさ、	少し食べてもすぐ太りやすくなり、むくみや鼻水など水分による代謝トラブルが起きます。</p>

									<h3>カパ体質のケア法</h3>
									<p>たくさんの刺激と動きを取り入れましょう。<br>
									朝一でセフルアヴィヤンガのマッサージを行い、熱いシャワーを浴びて身体を起こしましょう。<br>
									カパは冷えに弱いため、常に温かくして過ごすことが大切です。<br>
									部屋が要らないもので散らかってきたらカパが増えているサイン。<br>
									定期的に断捨離をして溜め込まない環境にすることがお勧めです。<br>
									家でゴロゴロしたり昼寝はＮＧです。<br>
									安心できる家族や友人に会い、鮮やかな色の服を着て、外に出かけて刺激を取り入れましょう。<br>
									スクールでは、カパ体質に起こりやすい症状や病気、ケア法を含めてお伝えしていきます。</p>
								</article>

								<p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p>
							</div-->

							<!--------------------

<div id="vata" class="dosha" style="background-color: #102741;"><p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p><article><p class="img"><picture><source type="image/webp" srcset="images/diagnose_vata.webp"><img decoding="async" src="images/diagnose_vata.png"></picture></p><h3>ヴァータ体質の<br class="sp">特徴</h3><p>とても活動的で、感受性が強く、集中力がありますが、波が激しく落ち着きがないことも。<br>繊細で傷つきやすく、悩みや不安を感じやすく、忘れっぽい一面もあります。<br>変化や刺激が好きで、機転が利き、アイデアを出すことが得意です。<br>人なつっこく気前も良いため、人と話したり接する職業が向いています。<br>身体の面では、食事が不規則になりやすく、無理をして体力が落ちてしまい、自分が気づいたときには、動けなくなるほど疲れ果てていることも。</p><h3>ヴァータ体質の<br class="sp">ケア法</h3><p>身体が冷えて乾燥しやすいため、とにかく保温と保湿が必要なため、アヴィヤンガのマッサージが最適です。<br>自分やヴァータ体質のご家族に毎日オイルケアをしましょう。<br>頭痛や腰痛、生理痛、関節痛など痛みが出てしまっている方は、ヴァータが高まりすぎているサイン。</p><p>たっぷりのオイルケアと、睡眠・休息、安心できる人と楽しい気分で過ごし、明るい色の服や寝具に変えるなど、自分がリラックスできる環境に整えることが大切です。<br>スクールでは、より深いアーユルヴェーダケア法、セルフマッサージ法もお伝えしていきます。</p></article><p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p></div><div id="pitta" class="dosha" style="background-color: #36080c;"><p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p><article><p class="img"><picture><source type="image/webp" srcset="images/diagnose_pitta.webp"><img decoding="async" src="images/diagnose_pitta.png"></picture></p><h3>ピッタ体質の<br class="sp">特徴</h3><p>決断力があり、情熱的で優れた知性の持ち主。<br>説得力がありリーダーシップを発揮する方も多い。<br>激しく感情が動き、短気で批判的、イライラしたりぶっきらぼうになり、時には執着を持つ。<br>その一方で新しい考えを受け入れ、考え方・話し方も明晰で、人前での演説にも向いている。<br>自信に満ちていて勇敢、知識欲も旺盛なためいろいろな事にチャレンジします。<br>身体の面では、ピッタが過剰になると、胃腸を壊したり、熱がこもりやすく汗っかき、湿疹などの皮膚トラブル、目の充血など血液系の症状が起きやすくなります。</p><h3>ピッタ体質の<br class="sp">ケア法</h3><p>すべての刺激を避けることが大切です。<br>辛い食べ物やお酒、熱すぎるもの冷たいものにも要注意。<br>あらゆる種類の不純物に敏感なので、食べ物、水、空気などにも気をつけましょう。<br>自然の中で深いくつろぎを感じやすいので、休みには森林や川などの近くに行くよう心がけましょう。<br>人におせっかいを焼きすぎない、人間関係のバランスを保つようにするとストレスが減っていきます。</p><p>アヴィヤンガで緊張を緩めるマッサージを行い、シロダーラで脳をリラックスさせ神経を緩めることで、本来のピッタの良さが戻ってきます。<br>熱いのが苦手なので、温めすぎないように短時間のケアがお勧めです。<br>アーユルヴェーダでは、ピッタの高まりに対してのケアを一番優先的に行います。<br>スクールでは、その理由とケア法なども含めて、より深くお伝えしていきます。</p></article><p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p></div><div id="kappa" class="dosha" style="background-color: #07291b;"><p class="top"><picture><source type="image/webp" srcset="images/diagnose_header.webp"><img decoding="async" src="images/diagnose_header.png"></picture></p><article><p class="img"><picture><source type="image/webp" srcset="images/diagnose_kappa.webp"><img decoding="async" src="images/diagnose_kappa.png"></picture></p><h3>カパ体質の<br class="sp">特徴</h3><p>何事にも寛容で穏やかで、落ち着きがあり、愛情深く情緒が安定しています。<br>人の面倒をよくみたり、思いやりを持って人と接することができ聞き上手。<br>まさに癒し系タイプ。<br>記憶力も良く、体力もあり、我慢強いため、自分の気持ち溜め込んであまり表に出せないこともしばしば。<br>ゆっくりで慎重派、執着心を持ちやすく、環境の変化を嫌います。<br>身体の面では、カパが過剰になると眠気やだるさ、少し食べてもすぐ太りやすくなり、むくみや鼻水など水分による代謝トラブルが起きます。</p><h3>カパ体質の<br class="sp">ケア法</h3><p>たくさんの刺激と動きを取り入れましょう。<br>朝一でセフルアヴィヤンガのマッサージを行い、熱いシャワーを浴びて身体を起こしましょう。<br>カパは冷えに弱いため、常に温かくして過ごすことが大切です。<br>部屋が要らないもので散らかってきたらカパが増えているサイン。<br>定期的に断捨離をして溜め込まない環境にすることがお勧めです。<br>家でゴロゴロしたり昼寝はＮＧです。<br>安心できる家族や友人に会い、鮮やかな色の服を着て、外に出かけて刺激を取り入れましょう。<br>スクールでは、カパ体質に起こりやすい症状や病気、ケア法を含めてお伝えしていきます。</p></article><p class="bottom"><picture><source type="image/webp" srcset="images/diagnose_footer.webp"><img decoding="async" src="images/diagnose_footer.png"></picture></p></div>
							----------------->

						</div>
					</div>
				</div>
			</article>



		</section>




	</main>

</body>
</html>



</body>
</html>
