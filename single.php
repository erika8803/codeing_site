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
                <!-- <?php if (has_post_thumbnail()): ?>
                    <div class="post-thumbnail-image" 
                        style="background-image: url(
                <?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>)">
                </div>
                <?php else: ?>
                <img src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
                <?php endif; ?> -->
                <!-- <h1 class="post-title"><?php the_title(); ?></h1> -->
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
        
    <?php wp_footer(); ?>
<?php get_footer(); ?>   
