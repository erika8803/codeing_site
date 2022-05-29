
// $(function(){

//     /*-------------------------------------------
//     🍔メニュークリック時の処理
//     -------------------------------------------*/
//     $('.hamburger-btn').on('click', function() {
//       if( $('#header').hasClass('open') ) {
//         $('#header').removeClass('open');
//       } else {
//         $('#header').addClass('open');
//       }
//     });
  
//     /*-------------------------------------------
//     🍔メニューを押下後、クリックエリアでの閉じる処理
//     -------------------------------------------*/
//     $('#hamburger-btn-area').on('click', function() {
//       $('#header').removeClass('open');
//     }) ;
  
//     // リンクをクリックした時にメニューを閉じる
//     $('#hamburger-btn-area a').on('click', function() {
//       $('#header').removeClass('open');
//     });
  
  
// });

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



