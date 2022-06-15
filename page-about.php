
<?php get_header(); ?>
  <section class="page">
    <div class="page-header">
      <div class="page-header-area">
        <h1 class="title">About</h1>
        <p class="sub">わたしについて</p>
      </div>
    </div>

    <div class="profile">
      <div class="wrapper">
        <div class="page-sec-title">
          <h1 class="title">Profile</h1>
          <p class="sub">プロフィール</p>
        </div>
        <div class="about-area">
          <div class="about-img">
            <img src="<?php bloginfo('template_url'); ?>/images/about.svg" alt="about" />
          </div>
          <div class="about-text-area">
            <h2 class="sub">Erika</h2>
            <p class="about-text">はじめまして、エリカと申します！</br>
            Webコーダー兼デザイナーとして東京を拠点に活動
            しています。作りたいイメージを可視化し、ユーザー目線に立って改修・改善をすることで、良いサービスを提供したいと思っております。
            コミュニケーションを密にとり、納品まで責任を持って対応しております。
            ご興味を持っていただけましたら、ぜひお気軽にご連絡ください。</p>
            <div class="skil-icon">
              <img src="<?php bloginfo('template_url'); ?>/images/skil-icon01.svg" alt="skil-icon01" />
              <img src="<?php bloginfo('template_url'); ?>/images/skil-icon02.svg" alt="skil-icon02" />
            </div>
            <div class="btn-area">
              <button class="btn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>services">
                  <div class="btn-text">ご提供できることの相談はこちら</div>
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="carrers">
        <div class="wrapper">
          <div class="page-sec-title">
              <h1 class="title">Carrers</h1>
              <p class="sub">プロフィール</p>
          </div>
          <ul class="timeline">
            <li>
              <p class="timeline-date">2004年</p>
              <div class="timeline-content">
                <h3>経理系の専門学校卒業</h3>
                <p>東京に上京し、専門学校で取得した資格を活かし経理事務員として働いていました。</p>
              </div>
            </li>
            <li>
              <p class="timeline-date">2019年</p>
              <div class="timeline-content">
                <h3>経理システム入れ替え</h3>
                <p>会社で経理システムを入れ替えを担当し、日常業務の洗い出し、仕事の重要順位を決め、
                    業務軽減をすることができました。
                    その時に、便利な物を作りたいと思うようになり、HTML/CSS/PHPの勉強を始めました。
                </p>
              </div>
            </li>
              <li>
                  <p class="timeline-date">2020年</p>
                  <div class="timeline-content">
                    <h3>IT会社へ転職</h3>
                    <p>アプリ開発に携わり、アプリを利用する側の目線に立ち、
                        なるべくクリックする回数を減らしたり、わかりやすい使いやすいアプリを作成するように
                        心がけていました。他に運営補佐としてアルバイトスタッフやユーザー対応と幅広く
                        携わらせてもらいました。
                    </p>
                  </div>
              </li>
              <li>
                <p class="timeline-date">NOW</p>
                <div class="timeline-content">
                  <h3>フリーでWebデザイナーとして始動。</h3>
                </div>
              </li>
          </ul>
        </div>
      </div>

      <div class="vision">
        <div class="wrapper">
          <div class="page-sec-title">
            <h1 class="title">Vision</h1>
            <p class="sub">これからのこと</p>
          </div>
          <div class="vision-area">
            <div class="vision-text">
              <h2 class="sub">これからについて</h2>
              <p>私がWebサイトを作る際に1番大事にしている事は、わかりやすく、シンプルに伝えることです。
              ユーザーに使いやすい改善ができないか、新しい技術を取り入れながら、よりよいサービスを作成していこうと思っています！
              </p>
            </div>
            <div class="vision-img">
              <img src="<?php bloginfo('template_url'); ?>/images/vision-img.png" alt="vison-img" />
            </div>
          </div>
        </div>
      </div>

      <div class="contact">
        <div class="wrapper">
          <div class="page-sec-title">
            <h1 class="title">Contact</h1>
            <p class="text">ご興味を持っていただけましたら、</br>
                ぜひお気軽にご連絡ください。</p>
            <div class="btn-area">
              <button class="btn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">
                  <div class="btn-text">お問い合わせ</div>
                </a>
            </button>
          </div>
        </div>
      </div>
    </section>
    <?php wp_footer(); ?>
<?php get_footer(); ?>