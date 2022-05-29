<?php
/* ---------------------------------------
管理バー表示オフ設定
--------------------------------------- */
add_filter( 'show_admin_bar', '__return_false' );

/* ---------------------------------------
StyleSheet・JavaScript読み込み設定
--------------------------------------- */
function add_scripts() { 
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_script('script-name', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'add_scripts');

/* ---------------------------------------
アイキャッチ画像の有効化
--------------------------------------- */
add_theme_support( 'post-thumbnails' ); 

