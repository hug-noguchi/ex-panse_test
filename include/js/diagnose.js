$(document).ready(function(){
	function check() {
		let str = [];

		//ラジオボタンの中身を取得
		const q = [document.shitsumon.q0, document.shitsumon.q1, document.shitsumon.q2, document.shitsumon.q3, document.shitsumon.q4, document.shitsumon.q5, document.shitsumon.q6, document.shitsumon.q7, document.shitsumon.q8, document.shitsumon.q9, document.shitsumon.q10, document.shitsumon.q11, document.shitsumon.q12, document.shitsumon.q13, document.shitsumon.q14];

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

		//コメントの条件分岐
		/*var message = "";
		if (aaa > bbb && aaa > ccc) {
			message = "VATA-ヴァータ-体質";
		} else if (bbb > aaa && bbb > ccc) {
			message = "PITTA-ピッタ-体質";
		} else if (ccc > aaa && ccc > bbb) {
			message = "KAPPA-カパ-体質";
		} else {
			message = '<picture><source type="image/webp" srcset="images/diagnose_box_header.webp"><img decoding="async" src="images/diagnose_box_header.png"></picture>';
		}*/

		//HTMLへ出力
		var html = '<div><h3>診断結果</h3>';
		html += '<table><tr><th>ヴァータ体質度</th><td>' + aaa + '％</td></tr>';
		html += '<tr><th>ピッタ体質度</th><td>' + bbb + '％</td></tr>';
		html += '<tr><th>カパ体質度</th><td>' + ccc + '％</td></tr></table>';
		html += '<p>アーユルヴェーダでは、ドーシャと呼ばれる3つ「ヴァータ」「ピッタ」「カパ」という生命エネルギーの組み合わせによって体質が分かります。<br>健康で美しくある鍵は、、、ドーシャのバランスは、人により異なりまた一定の割合ではなく日々変化しています。<br>そして、バランスの乱れが様々な病気を引き起こす原因または要因になると考えられています。<br>いまの不調をそのままにせず、快適な日々を過ごすために、生活やケア法、自分に合った食事法を取り入れることが大切です。<br>まずは自分のドーシャを知ることからスタートしてみましょう！</p>';
		//html += '' + message + '';
		html += '<div class="row"><div class="col-12 col-md-6"><p><picture><source type="image/webp" srcset="../images/diagnose_vata.webp"><img decoding="async" src="../images/diagnose_vata.png"></picture></p></div><div class="col-12 col-md-6"><p><picture><source type="image/webp" srcset="../images/diagnose_pitta.webp"><img decoding="async" src="../images/diagnose_pitta.png"></picture></p></div><div class="col-12 col-md-6"><p><picture><source type="image/webp" srcset="../images/diagnose_kappa.webp"><img decoding="async" src="../images/diagnose_kappa.png"></picture></p></div><div class="col-12 col-md-6"><p><picture><source type="image/webp" srcset="../images/diagnose_toridosha.webp"><img decoding="async" src="../images/diagnose_toridosha.png"></picture></p></div></div>';
		document.getElementById("kekka").innerHTML = html;
	}
	
});