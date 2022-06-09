<?php get_header(); ?>
    <section class="page">
        <div class="page-header">
            <div class="page-header-area">
                <h1 class="title">About</h1>
                <p class="sub">わたしについて</p>
            </div>
        </div>
        <div class="contents">
            <div class="profile">
                <div class="page-sec-title">
                    <h1 class="title">Profile</h1>
                    <p class="sub">プロフィール</p>
                </div>
                <div class="about-area">
                    <div class="about-img">
                        <img src="<?php bloginfo('template_url'); ?>/images/about.png" alt="service-coding" />
                </div>
                    <div class="about-text-area">
                        <h2 class="sub">Erika</h2>
                        <p class="about-text">はじめまして、エリカと申します！</br>
                        Webコーダー兼デザイナーとして東京を拠点に活動
                        しています。作りたいイメージを可視化し、ユーザー目線に立って改修・改善をすることで、良いサービスを提供したいと思っております。
                        コミュニケーションを密にとり、納品まで責任を持って対応しております。
                        ご興味を持っていただけましたら、ぜひお気軽にご連絡ください。</p>
                        <div class="skil-icon">
                            <img src="<?php bloginfo('template_url'); ?>/images/skil-icon01.png" alt="skil-icon.png" />
                            <img src="<?php bloginfo('template_url'); ?>/images/skil-icon02.png" alt="skil-icon.png" />
                        </div>
                        <div class="btn-area">
                            <button class="btn">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">
                                <div class="btn-text">ご提供できることの相談はこちら</div>
                            </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carrers">
                <div class="page-sec-title">
                    <h1 class="title">Carrers</h1>
                    <p class="sub">プロフィール</p>
                </div>
            </div>
            <div class="vision">
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
                        <img src="<?php bloginfo('template_url'); ?>/images/vison-img.png" alt="vison-img" />
                    </div>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="page-sec-title">
                <h1 class="title">Contact</h1>
                <p class="text">ご興味を持っていただけましたら、</br>
                    ぜひお気軽にご連絡ください。</p>
                    <div class="btn-area">
                <button class="btn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>services">
                    <div class="btn-text">お問い合わせ</div>
                </a>
                </button>
            </div>
            </div>

        </div>
    </section>
    
<?php get_footer(); ?>