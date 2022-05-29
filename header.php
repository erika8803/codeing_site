<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <!-- ファビコン指定 -->
        <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>
        <header id="header">
            <div class="header-nav">
                <h1 class="top-title">
                    <a href="<?php echo home_url(); ?>">
                        <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/header-logo.png">
                    </a>
                </h1>
                <div id="nav">
                     <?php wp_nav_menu(['menu' => 'main_nav']); ?>
                </div>
            </div>
            <div class=hampurger>
                <div class="hamburger-btn" id="hamburger-btn">
                    <span class="btn-line"></span>
                    <span class="btn-line"></span>
                    <span class="btn-line"></span>
                </div>
                <div id="hamburger-btn-area"></div>
            </div>
        </header>



    <section class="">

    </section>