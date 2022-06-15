<?php get_header(); ?>
<div class="page-header">
    <div class="page-header-area">
        <h1 class="title">Works</h1>
        <p class="sub">制作実績</p>
    </div>
</div>
<section class="archive works">
  <div class="wrapper">
    <div class="card-contents">
      <div class="card-list-area">
      <?php if( have_posts()): ?>
      <?php while ( have_posts()): the_post(); ?>
        <div class="card">
            <div class="post-img card-img ">
                <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                  <!-- <img src=<?php the_post_thumbnail( 'thumbnail' ); ?> -->
                  <img class="" src="<?php the_post_thumbnail(array(400, 255), array( 'class' => 'thumbimg')); ?>
                <?php else: ?>
                    <img class="" src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
                <?php endif; ?>
                </a>
            </div>
            <div class="card-title">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
  </div>
  <?php the_posts_pagination(); ?>
</section>
<?php wp_footer(); ?>
<?php get_footer(); ?>   
