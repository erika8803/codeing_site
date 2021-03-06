
/*-------------------------------------------
ðã¡ãã¥ã¼å¦ç
-------------------------------------------*/
const header = document.getElementById('header');
const btn = document.getElementById('hamburger-btn');
const hamburgerArea = document.getElementById('hamburger-btn-area');
const nav = document.getElementById('nav');

/*-------------------------------------------
ðã¡ãã¥ã¼ã¯ãªãã¯æã®å¦ç
-------------------------------------------*/
btn.addEventListener('click' , function() {
  if(header.classList.contains('open')) {
    header.classList.remove('open');
  } else {
    header.classList.add('open');
  }
});

/*-------------------------------------------
ðã¡ãã¥ã¼ãæ¼ä¸å¾ãã¯ãªãã¯ã¨ãªã¢ã§ã®éããå¦ç
-------------------------------------------*/
hamburgerArea.addEventListener('click', function() {
  header.classList.remove("open");
});

// navã¡ãã¥ã¼ã¨ãªã¢ãã¯ãªãã¯ããæã«ã¡ãã¥ã¼ãéãã
nav.addEventListener('click', function() {
  header.classList.remove("open");
});


/*-------------------------------------------
ãããã¼ã¡ãã¥ã¼åºå®
-------------------------------------------*/
// IntersectionObserver ãªãã¸ã§ã¯ããä½æ
// äº¤å·®æã«å®è¡ããã³ã¼ã«ããã¯é¢æ°ãæ¸¡ã
const observer = new IntersectionObserver((entries) => {
  // entriesã¯ç£è¦å¯¾è±¡ãã¹ã¦ãå¥ã£ã¦ãããªã¹ã  
  for(const e of entries) {
    // isIntersecting ãã­ããã£ã¯äº¤å·®ãã¦ãããã©ããã®çå½å¤
    // viewport ã«äº¤å·®ããå¥ã£ãã¨ãã« isIntersecting === trueãåºãã¨ãã« false ã«ãªã
    if(e.isIntersecting) {
      // header.style.position = 'static';
      header.classList.add("header-static");
    } else {
      // header.style.position = 'fixed';
      header.classList.add('header-fixed');
    }
  }
});


 // observe ã¡ã½ããã«ç£è¦å¯¾è±¡è¦ç´ ãå¼æ°ã¨ãã¦æ¸¡ããã¨ã§ç£è¦ãããããã«ãªãã¾ã
 observer.observe(document.getElementById('main-top'))  



/*-------------------------------------------
Swiperå¦ç
-------------------------------------------*/
// swiperãªãã¸ã§ã¯ãå¼ã³åºã
var mySwiper = new Swiper('.swiper', {
  loop: true,
  autoplay: {
    delay: 5000, // ããã©ã«ãå¤ãè¨­å®
  },
  slidesPerView: 2.2,
  // initialSlide: 3,
  spaceBetween: 0,
  centeredSlides: true,
  // ãã¼ã¸ãã¼ã·ã§ã³
  // åå¾ã®ç¢å°
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",

  },


  breakpoints: {
    // Swiper ã®ã³ã³ããå¹ã 1000px ä»¥ä¸ã®å ´å
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


