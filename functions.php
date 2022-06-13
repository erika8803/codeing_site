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
  wp_enqueue_script('script-swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), false, true);
  wp_enqueue_script('script-main', get_template_directory_uri() . '/js/main.js', array(), false, true);
 
}
add_action('wp_enqueue_scripts', 'add_scripts');

/* ---------------------------------------
アイキャッチ画像の有効化
--------------------------------------- */
add_theme_support( 'post-thumbnails' ); 

/* ---------------------------------------
外観ー＞メニュー追加
--------------------------------------- */
function menu_setting() {
    add_theme_support( 'menus' );
}
add_action( 'after_setup_theme', 'menu_setting' );

/* ---------------------------------------
アーカイブURL生成
--------------------------------------- */
function post_has_archive($args, $post_type) {
  if ('post' == $post_type) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'works'; // ページURL
      $args['label'] = 'Works'; // ページタイトル
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* ---------------------------------------
ページジェネーション
--------------------------------------- */
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() ) /* メインクエリ(表示設定で設定したページ)の時の投稿数 */
      return;
  if ( $query->is_archive('post') ) { 
      $query->set( 'posts_per_page', '6' ); /* アーカイブページの時の投稿数 */
  }
  elseif($query->is_search('post')){
    $query->set( 'posts_per_page', '-1' ); /* 検索ページの時の投稿数 */
  }
  return;
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


