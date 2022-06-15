<?php get_header(); ?>
<section>
  <div class="page-header">
    <div class="page-header-area">
      <h1 class="title">Contact</h1>
      <p class="sub">お問い合わせ</p>
    </div>
  </div>

  <div class="wrapper">
    <div class="contact-form-area">
      <div class="contact-img">
        <img src="<?php bloginfo('template_url'); ?>/images/contact.png" alt="contact" />
      </div>
      <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="540" title="Contact"]'); ?>
        <!-- <?php echo do_shortcode('[contact-form-7 id="62" title="ContactForm"]'); ?> -->
      </div>
    </div>
  </div>

  </section>




<?php get_footer(); ?>
<?php wp_footer(); ?>