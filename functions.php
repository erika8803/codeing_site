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
      $args['has_archive'] = $post_type; // ページURL
      $args['label'] = 'Works'; // ページタイトル
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* ---------------------------------------
ポスト追加
--------------------------------------- */
function create_service() {
  register_post_type('service', [
    'labels' => [
        'name' => 'サービス',
        'singular_name' =>  'services',
    ],
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, // 管理するデフォルトUIを生成するかどうか。
    'query_var' => true, // query_varキーの名前
    'rewrite' => true, // 投稿タイプのパーマリンクのリライト方法を変更。
    'capability_type' => 'post', // 権限の指定。
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 10,
    'supports' => [ // 投稿できる項目。
      'title',
      'editor',
      'thumbnail',
      'custom-fields',
      'excerpt',
      'author',
      'trackbacks',
      'comments',
      'revisions',
      'page-attributes'
    ]
  ]);
}
add_action('init', 'create_service');
