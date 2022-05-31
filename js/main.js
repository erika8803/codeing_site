/*-------------------------------------------
🍔メニュー処理
-------------------------------------------*/
var header = document.getElementById('header');
var btn = document.getElementById('hamburger-btn');
var hamburgerArea = document.getElementById('hamburger-btn-area');
var nav = document.getElementById('nav');
/*-------------------------------------------
🍔メニュークリック時の処理
-------------------------------------------*/
btn.addEventListener('click' , function() {
  if(header.classList.contains('open')) {
    header.classList.remove('open');
  } else {
    header.classList.add('open');
  }
} );

/*-------------------------------------------
🍔メニューを押下後、クリックエリアでの閉じる処理
-------------------------------------------*/
hamburgerArea.addEventListener('click', function() {
  header.classList.remove("open");
});

// navメニューエリアをクリックした時にメニューを閉じる
nav.addEventListener('click', function() {
  header.classList.remove("open");
});


/*-------------------------------------------
　　スライダー処理
-------------------------------------------*/
var getTranslate;
var slideWidth;
// swiperオブジェクト呼び出し
var mySwiper = new Swiper('.swiper-container', {
  loop: true,
  autoplay: {
    delay: 5000, // デフォルト値を設定
  },
  slidesPerView: 5,
  initialSlide: 5,
  breakpoints: {
    767: {
      slidesPerView: 3,
      spaceBetween: 0
    }
  }
})

