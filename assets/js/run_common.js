
//スマホメニュー
function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function() {
    body.classList.toggle('nav-open');
  });
  blackBg.addEventListener('click', function() {
    body.classList.remove('nav-open');
  });
}
toggleNav();


//スライダー
const swiper = new Swiper(".swiper", {
/* 
  loop: true,
  autoplay: {     //追記
     delay: 10000,   //追記
  }, 
*/
 navigation: {
    nextEl: ".swiper-button-next",　//必須
    prevEl: ".swiper-button-prev",　//必須
  },
});



//ページトップ
jQuery(function() {
  var pagetop = $('#page_top');   
  pagetop.hide();
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });
  pagetop.click(function () {
      $('body,html').animate({
          scrollTop: 0
      }, 500); //0.5秒かけてトップへ移動
      return false;
  });
});


//ループスライダー
$(document).ready(function(){
  $("#tag_box").endlessRiver({
      speed: 50,//スクロールのスピード
  });
});