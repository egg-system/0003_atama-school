<?php
// 親テーマと子テーマのCSSを読み込み
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style')
    );
}

// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'news', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'ニュース', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'news',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
    ]);
}
?>
