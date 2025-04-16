// JavaScript Document

$(document).ready(function () {
  setSize();
  $(window).resize(function () {
    setSize();
  });

  /*************************************
	setSize
	*************************************/

  function setSize() {
    var winW = $(window).width();
    var winH = $(window).height();

    //sp
    if (winW < 972) {
      /*-------------------------------------------
			main_img2
			-------------------------------------------
            $('#main_img2').css({'opacity':0})
            $(function(){
                $('#main_img2').stop().animate({'opacity':1,
                },{duration: 1500, easing: 'easeInOutCirc'});
            });*/
    }

    //pc
    if (winW >= 972) {
      /*-------------------------------------------
			btn
			-------------------------------------------*/
      $(function () {
        $(".btn_fade").hover(
          function () {
            $(this).stop().animate({ opacity: 0.5 }, { duration: 200, easing: "swing" });
          },
          function () {
            $(this).stop().animate({ opacity: 1 }, { duration: 200, easing: "swing" });
          }
        );
      });
    }
  }

  function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById("js-hamburger");
    var blackBg = document.getElementById("js-black-bg");
    var navLinks = document.querySelectorAll(".global-nav__item a");

    hamburger.addEventListener("click", function () {
      body.classList.toggle("nav-open");
    });
    blackBg.addEventListener("click", function () {
      body.classList.remove("nav-open");
    });
    navLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        body.classList.remove("nav-open");
      });
    });
  }
  toggleNav();

  //クリックでTOPへ
  $(function () {
    $("#pageup a").click(function () {
      $("html,body").animate({ scrollTop: 0 }, "fast");
    });
  });

  /*-------------------------------------------
	main_img2
	-------------------------------------------*/
  $("#main_img.index #main_img2 ul li").css({ opacity: 0 });
  $("#main_img.index #main_img2 ul li").stop().animate(
    {
      opacity: 1,
    },
    { duration: 1000, easing: "swing" }
  );

  var $interval = 6000; // 切り替わりの間隔（ミリ秒）
  var $fade_speed = 3000; // フェード処理の早さ（ミリ秒）
  $("#main_img.index #main_img2 ul li").css({ position: "relative", overflow: "hidden" });
  $("#main_img.index #main_img2 ul li").hide().css({ position: "absolute", top: 0, left: 0 });
  $("#main_img.index #main_img2 ul li:first").addClass("active").show();
  setInterval(function () {
    var $active = $("#main_img.index #main_img2 ul li.active");
    var $next = $active.next("li").length ? $active.next("li") : $("#main_img.index #main_img2 ul li:first");
    $active.fadeOut($fade_speed).removeClass("active");
    $next.fadeIn($fade_speed).addClass("active");
  }, $interval);

  /*-------------------------------------------
	fadein
	-------------------------------------------*/
  var fade_f = false;
  if (fade_f == false) {
    $("#main_img .inner").css({ opacity: 0, "padding-top": 50 });

    setTimeout(function () {
      $(function () {
        $("#main_img .inner").stop().animate(
          {
            opacity: 1,
            "padding-top": 0,
          },
          { duration: 2000, easing: "easeInOutCirc" }
        );
      });
    }, 1000);
  } else {
    $("#main_img .inner").css({ opacity: 1 });
  }

  //スクロールで表示
  function showElementAnimation() {
    var element = document.getElementsByClassName("js-animation");
    if (!element) return; // 要素がなかったら処理をキャンセル

    var showTiming = window.innerHeight > 768 ? 200 : 40; // 要素が出てくるタイミングはここで調整
    var scrollY = window.pageYOffset;
    var windowH = window.innerHeight;

    for (var i = 0; i < element.length; i++) {
      var elemClientRect = element[i].getBoundingClientRect();
      var elemY = scrollY + elemClientRect.top;
      if (scrollY + windowH - showTiming > elemY) {
        element[i].classList.add("is-show");
      } else if (scrollY + windowH < elemY) {
        // 上にスクロールして再度非表示にする場合はこちらを記述
        element[i].classList.remove("is-show");
      }
    }
  }
  showElementAnimation();
  window.addEventListener("scroll", showElementAnimation);
});
