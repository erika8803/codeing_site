<?php get_header(); ?>
<main>
  <section id="main-top" class="top">
    <div  class="top-area">
      <div class="top-text-area">
        <h2 class="top-title">Erika Portfolio</h2>
        <p class="top-text">
            Webサイト制作を承っています。お客さんがホームページを使って達成した事のお手伝いを致します。
            ホームページの作成方法が分からない、リニューアルをしたいなど、ご要望・ご相談お聞かせください！</br>
        </p>
      </div>
      <div class="top-image">
        <img class="card-image" src="<?php bloginfo('template_url'); ?>/images/topimage.png">
      </div>
    </div>
  </section>
  <section>
    <div class="work">
      <div class="wrapper">
        <div class="sec-title">
          <h1 class="title">Works</h1>
          <p class="sub">制作実績</p>
        </div>

        <!-- スライドエリア -->
          <div id="secound-area" class="swiper">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <img src="<?php bloginfo('template_url'); ?>/images/portfolio-sneakers.png" alt="portfolio" />
              </li>
              <li class="swiper-slide">
                <img src="<?php bloginfo('template_url'); ?>/images/portfolio-designoffice.png" alt="portfolio" />
              </li>
              <li class="swiper-slide">
                <img src="<?php bloginfo('template_url'); ?>/images/portfolio.png" alt="portfolio" />
              </li>
            </ul>
          </div>

        <div class="btn-area">
          <button class="btn">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>works">
              <div class="btn-text">もっと見る</div>
            </a>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="services">
      <div class="wrapper">
        <div class="sec-title">
          <h1 class="title">Services</h1>
          <p class="sub">ご提供できる事</p>
        </div>
        <div>
          <ul class="service-card">
            <li class="service-img">
              <img src="<?php bloginfo('template_url'); ?>/images/service-top-direction.png" alt="service-direction" />
            </li>
            <li class="service-text-area">
              <h2 class="service-title">ディレクション</h2>
              <p class="service-sub-title">Direction</p>
              <p class="service-text">ヒアリングした内容に基づき現状抱えている問題点を洗い出し、効果的なプランをご提供致します。</p>
            </li>
          </ul>
          <ul class="service-card">
            <li class="service-img">
              <img src="<?php bloginfo('template_url'); ?>/images/service-top-design.png" alt="service-design" />
            </li>
            <li class="service-text-area">
              <h2 class="service-title">デザイン</h2>
              <p class="service-sub-title">Design</p>
              <p class="service-text">ヒアリングした内容に基づき現状抱えている問題点を洗い出し、効果的なプランをご提供致します。</p>
            </li>
          </ul>
          <ul class="service-card">
            <li class="service-img">
              <img src="<?php bloginfo('template_url'); ?>/images/service-top-coding.png" alt="service-coding" />
            </li>
            <li class="service-text-area">
              <h2 class="service-title">コーディング</h2>
              <p class="service-sub-title">Cording</p>
              <p class="service-text">ヒアリングした内容に基づき現状抱えている問題点を洗い出し、効果的なプランをご提供致します。</p>
            </li>
          </ul>
        </div>
        <div class="btn-area">
          <button class="btn">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>services">
              <div class="btn-text">もっと見る</div>
            </a>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="front-about">
      <div class="wrapper">
        <div class="sec-title">
          <h1 class="title">About</h1>
          <p class="sub">私について</p>
        </div>
        <div class="about-area">
          <p class="about-text">
            はじめまして、エリカと申します！</br>
            Webコーダー兼デザイナーとして東京を拠点に活動
            しています。作りたいイメージを可視化し、ユーザー目線に立って改修・改善をすることで、良いサービスを提供したいと思っております。
            コミュニケーションを密にとり、納品まで責任を持って対応しております。
            ご興味を持っていただけましたら、ぜひお気軽にご連絡ください。
          </p>
          <div class="about-img">
              <img src="<?php bloginfo('template_url'); ?>/images/about.svg" alt  ="about" />
          </div>
        </div>
        <div class="btn-area">
          <button class="btn">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">
              <div class="btn-text">もっと見る</div>
            </a>
          </button>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>