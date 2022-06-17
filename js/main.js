
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
ヘッダーメニュー固定
-------------------------------------------*/
// IntersectionObserver オブジェクトを作成
// 交差時に実行するコールバック関数を渡す
const observer = new IntersectionObserver((entries) => {
  // entriesは監視対象すべてが入っているリスト  
  for(const e of entries) {
    // isIntersecting プロパティは交差しているかどうかの真偽値
    // viewport に交差し、入ったときに isIntersecting === true、出たときに false になる
    if(e.isIntersecting) {
      // header.style.position = 'static';
      header.classList.add("header-static");
    } else {
      // header.style.position = 'fixed';
      header.classList.add('header-fixed');
    }
  }
});


 // observe メソッドに監視対象要素を引数として渡すことで監視されるようになります
 observer.observe(document.getElementById('main-top'))  



/*-------------------------------------------
Swiper処理
-------------------------------------------*/
// swiperオブジェクト呼び出し
var mySwiper = new Swiper('.swiper', {
  loop: true,
  autoplay: {
    delay: 5000, // デフォルト値を設定
  },
  slidesPerView: 2.2,
  // initialSlide: 3,
  spaceBetween: 0,
  centeredSlides: true,
  // ページネーション
  // 前後の矢印
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",

  },


  breakpoints: {
    // Swiper のコンテナ幅が 1000px 以上の場合
    0: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    550: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    770: {
      slidesPerView: 2.2,
      spaceBetween: 50,
    },
    950: {
      slidesPerView: 2.2,
      spaceBetween: 50,
    },




  }
})


