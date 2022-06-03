
/*-------------------------------------------
🍔メニュー処理
-------------------------------------------*/
const header = document.getElementById('header');
const btn = document.getElementById('hamburger-btn');
const hamburgerArea = document.getElementById('hamburger-btn-area');
const nav = document.getElementById('nav');

/*-------------------------------------------
🍔メニュークリック時の処理
-------------------------------------------*/
btn.addEventListener('click' , function() {
  if(header.classList.contains('open')) {
    header.classList.remove('open');
  } else {
    header.classList.add('open');
  }
});

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
　swiper処理
-------------------------------------------*/
// let getTranslate;
// let slideWidth;
// swiperオブジェクト呼び出し
const mySwiper = new Swiper('.swiper-container', {
  loop: true,
  slidesPerView: 4,  
  initialSlide: 5,
  centeredSlides: true,
  spaceBetween: 5, // スライド間の余白（px）

  autoplay: {
    delay: 5000, // 秒数を設定
  },
  breakpoints: {
    375: {
      slidesPerView: 3,
      initialSlide: 2
    },
    768: {
      slidesPerView: 4,
      initialSlide: 3
    },
    1025: {
      slidesPerView: 5,
      initialSlide: 4
    }

  }

  
})

 
