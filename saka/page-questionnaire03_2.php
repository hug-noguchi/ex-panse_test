<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MKPKBNDK');</script>
  <!-- End Google Tag Manager -->
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PVCHLR86');</script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート回答</title>
  <?php wp_head(); ?>
  <meta name="description" content="アンケート回答03">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/include/css/questionnaire.css">
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKPKBNDK"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVCHLR86"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="main">
    <div>
      <div id="question_area">
        <div id="q3">
          <img src="<?php bloginfo('url'); ?>/images/questionnaire/kv03_v2.png" alt="アーユルヴェーダ"/>
          <div class="question_box">
            <div class="question_text">
              <img src="<?php bloginfo('url'); ?>/images/questionnaire/text03_v3.png" alt="アーユルヴェーダ"/>
            </div>
            <img src="<?php bloginfo('url'); ?>/images/questionnaire/image03.png" alt="アーユルヴェーダ"/>
            <div class="choose choose_list">
              <p>
                <a href="<?php bloginfo('url'); ?>/questionnaire04/?q3_no_01">未経験でも大丈夫！</a>
              </p>
              <p>
                <a href="<?php bloginfo('url'); ?>/questionnaire04/?q3_no_02">スケジュール自由</a>
              </p>
              <p>
                <a href="<?php bloginfo('url'); ?>/questionnaire04/?q3_no_03">短期間で学べる</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <img src="<?php bloginfo('url'); ?>/images/questionnaire/footer.png" alt="アーユルヴェーダ"/>
    </footer>

  </div>

  <script>
    function showQuestion(id) {
      // 全ての質問ページにtxt_hideクラスを追加する
      var questionPages = document.querySelectorAll('.txt_display');
      questionPages.forEach(function(page) {
        page.classList.add('txt_hide');
      });

      // クリックされたリンクに対応するセクションのidを取得
      var targetId = id;
      // 対応するセクションを表示
      document.getElementById(targetId).classList.remove('txt_hide');
    }
  </script>

<?php wp_footer(); ?>
</body>
</html>
