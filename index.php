<?php get_header(); ?>
<main>
  <section class="top">
    <div  class="top-area">
      <div class="top-text-area">
        <h2 class="top-title">Erika Portfolio</h2>
        <p class="top-text">
            Webサイト制作を承っています。お客さんがホームページを使って達成した事のお手伝いを致します。</br>
            ホームページの作成方法が分からない、</br>
            リニューアルをしたい、デザインを変えたいなど、ご要望・ご相談お聞かせください！</br>
        </p>
      </div>
      <div class="top-image">
        <img class="card-image" src="<?php bloginfo('template_url'); ?>/images/topimage.png">
      </div>
    </div>
  </section>
  <section>
    <div class="work">
      <div class="sec-title">
        <h1 class="title">Works</h1>
        <p class="sub">制作実績</p>
      </div>


      <!-- スライドエリア -->
      <div id="secound-area" class="swiper-container">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio.png" alt="portfolio" />
          </li>
          <li class="swiper-slide">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio.png" alt="portfolio" />
          </li>
          <li class="swiper-slide">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio.png" alt="portfolio" />
          </li>
          <li class="swiper-slide">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio.png" alt="portfolio" />
          </li>
          <li class="swiper-slide">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio.png" alt="portfolio" />
          </li>
          <li class="swiper-slide">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio.png" alt="portfolio" />
          </li>
        </ul>
      </div>

      <button class="btn">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">
          <div class="line-btn">もっと見る</div>
        </a>
      </button>
    </div>
  </section>
</main>
<?php get_footer(); ?>