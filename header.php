<!DOCTYPE HTML>
<html>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
      <!-- ファビコン指定 -->
      <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Damion&family=Kosugi+Maru&family=Roboto&display=swap" rel="stylesheet">

<?php wp_head(); ?>
    </head>
    <body>
      <header>
        <div id="header" class="header-static">
          <div class="header-nav">
            <h1 class="header-title">
              <a href="<?php echo home_url(); ?>">
              <?php bloginfo('name'); ?>
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
        </div>
      </header>
