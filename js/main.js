
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
　swiper処理
-------------------------------------------*/
// swiperオブジェクト呼び出し
const mySwiper = new Swiper('.swiper', {
  loop: true,
  slidesPerView: 3,  
  // initialSlide: 4,
  centeredSlides: true,
  spaceBetween: 15, // スライド間の余白（px）

  autoplay: {
    delay: 5000, // 秒数を設定
  },
  breakpoints: {

    200: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
  }
  
})
