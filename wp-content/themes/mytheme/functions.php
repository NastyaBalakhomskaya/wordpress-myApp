<?php

function add_stylesheet(): void
{
    wp_enqueue_style(
        'mytheme',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri()
    );

    wp_enqueue_script(
        'mytheme',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'
    );
}

register_nav_menus(array(
    'top'  => 'Верхнее меню', // идентификатор меню и название
));

function  register_widget_right (){
    register_sidebar([
        'name' => 'Сайдбар',
        'id' => 'sidebar_right',
        'before_widget' => null,
        'after_widget' => null,
    ]);
}

add_action('wp_enqueue_scripts', 'add_stylesheet');
add_action('widgets_init', 'register_widget_right');


add_action('pre_get_posts', 'add_post_types_to_query');

function add_post_types_to_query(WP_Query $query) : void
{
    if (is_home() && $query->is_main_query()) {
        $query->set('post_type', ['post', 'event']);

    }
}