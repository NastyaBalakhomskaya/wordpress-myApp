<?php
/**
 * Plugin Name: Admin Menu Hidden
 * Description: Wordpress Admin Menu Hidden
 * Version: 0.1
 */

class AdminMenuHiddenPlugin
{
    public function activate(): void
    {
        flush_rewrite_rules();
    }

    public function deactivate(): void
    {
        flush_rewrite_rules();
    }
}
/*функция по сокрытию админ панели, у всех кроме администратора*/
function remove_admin_bar() {
    if (!current_user_can('administrator')):
        show_admin_bar(false);
    endif;
    }

add_action('admin_menu', 'remove_admin_bar');

$plugin = new AdminMenuHiddenPlugin();

register_activation_hook(__FILE__, [$plugin, 'activate']);
register_deactivation_hook(__FILE__, [$plugin, 'deactivate']);


