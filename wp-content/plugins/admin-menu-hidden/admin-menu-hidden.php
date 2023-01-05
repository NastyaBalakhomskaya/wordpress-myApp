<?php
/**
 * Plugin Name: Admin Menu Hidden
 * Description: Wordpress Admin Menu Hidden
 * Version: 0.1
 */

/*функция по сокрытию админ панели, у всех кроме администратора*/
function remove_admin_bar()
{
    if (!current_user_can('administrator')) {
        show_admin_bar(false);
    }
}

add_action('admin_menu', 'remove_admin_bar');



