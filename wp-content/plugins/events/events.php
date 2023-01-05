<?php
/**
 * Plugin Name: Events
 * Description: Wordpress Events
 * Version: 0.1
 */

class EventsPlugin
{
    public function __construct()
    {
        add_action('init', [$this, 'register_event_post_type']);
    }

    public function activate(): void
    {
        $this->register_event_post_type();
        flush_rewrite_rules();
    }

    public function deactivate(): void
    {
        flush_rewrite_rules();
    }

    public function uninstall(): void
    {
        global $wpdb;

        $wpdb->query("DELETE FROM {$wpdb->posts} WHERE post_type = 'event'");
    }

    public function register_event_post_type(): void
    {
        register_post_type('event', [
            'label' => 'Events',
            'labels' => [
                'name' => 'Events',
                'singular_name' => 'Event',
            ],
            'public' => true,
            'rewrite' => ['slug' => 'events'],
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'comments'],
            'menu_icon' => 'dashicons-pets',

        ]);

        register_taxonomy('event_category', ['event'], [
            'hierarchical' => false,
            'labels' => [
                'name' => 'Event Category',
                'singular_name' => 'Event Category',
            ],
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'events_category'],
        ]);

        if (function_exists('acf_add_local_field_group')):

            acf_add_local_field_group(array(
                'key' => 'group_639b6dcdb4ef6',
                'title' => 'Event2',
                'fields' => array(
                    array(
                        'key' => 'field_639b6dcefcb48',
                        'label' => 'Rating',
                        'name' => 'rating',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'min' => 1,
                        'max' => 100,
                        'placeholder' => '',
                        'step' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'event',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 0,
            ));

        endif;
    }
}

$plugin = new EventsPlugin();

register_activation_hook(__FILE__, [$plugin, 'activate']);
register_deactivation_hook(__FILE__, [$plugin, 'deactivate']);
register_uninstall_hook(__FILE__, [$plugin, 'uninstall']);

