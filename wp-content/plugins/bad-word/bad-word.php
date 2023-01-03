<?php
/**
 * Plugin Name: Bad Word
 * Description: Wordpress Bad Word
 * Version: 0.1
 */
class BadWordPlugin
{
    public function activate(): void
    {
        $this->filter_words_in_text();
        flush_rewrite_rules();
    }

    public function deactivate(): void
    {
        flush_rewrite_rules();
    }
}
/*функция по замене слов*/
function filter_words_in_text(string $text): string
{
    return str_replace(['bad', 'bad2'], '***', $text);
}

add_filter('comment_text', 'filter_words_in_text');
add_filter('the_title', 'filter_words_in_text');

$plugin = new BadWordPlugin();

register_activation_hook(__FILE__, [$plugin, 'activate']);
register_deactivation_hook(__FILE__, [$plugin, 'deactivate']);



