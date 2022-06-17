<?php get_header(); ?>
    <div class="page-header">
        <div class="page-header-area">
            <h1 class="title">Work Design</h1>
            <p class="sub">制作物</p>
        </div>
    </div>
    <section class="single">
        <div class="wrapper">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <div class="post-contents">
                <div class="post-text">
                    <p><?php the_content('Read more'); ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
                <div class="pagination">
                    <p class="pre"><?php previous_post_link('%link', '前へ'); ?></p>
                    <p class="next"><?php next_post_link('%link', '次へ'); ?></p>
                </div>
            </div>
        </div>
    </section>
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
        
    <?php wp_footer(); ?>
<?php get_footer(); ?>   
