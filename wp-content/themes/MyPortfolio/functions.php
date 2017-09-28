<?php

show_admin_bar( false );

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'start_post_rel_link', 10 );
remove_action( 'wp_head', 'parent_post_rel_link', 10 );

add_action('get_header', 'my_filter_head');

function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

register_sidebar(
    array(
        'id' => 'logo',
        'name' => 'Логотип',
        'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
        'before_widget' => '<div class="logo_container">',
        'after_widget' => '</div>',
        'before_title' => '<h3">',
        'after_title' => '</h3>'
    )
);

require_once (get_stylesheet_directory() . '/theme-options.php');

add_theme_support('post-thumbnails');

function no_more_jumping($post) {
    return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Читать далее &raquo;'.'</a>';
}
add_filter('the_content_more_link', 'no_more_jumping');