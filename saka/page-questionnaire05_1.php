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
  <title>ご回答ありがとうございます！</title>
  <?php wp_head(); ?>
  <meta name="description" content="ご回答ありがとうございます！">
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
        <div>
          <img src="<?php bloginfo('url'); ?>/images/questionnaire/kv05_1.png" alt="エクスパンスセラピストへ"/>
          <p class="thanks_text"><span>ご回答いただきありがとうございます！</span></p>
          <div class="choose choose05">
            <p>
              <a href="https://www.ex-panse.jp/independence_lp/?q4_01" target="_blank">講座を今すぐ確認する</a>
            </p>
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
