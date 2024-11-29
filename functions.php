<?php

/**
 *
 * Functions and definitions
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');


//Define Constants.
define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('THEME_ASSETS', THEME_URL . '/assets');
define('THEME_VERSION', wp_get_theme()->get('Version'));


// Add Theme Supports.
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

//Disabled gutenberg.
add_filter('use_block_editor_for_post', '__return_false', 10);


// Calling necessary files.
require THEME_PATH . '/assets/assets.php';
require THEME_PATH . '/inc/inc.php';




function mm_disable_default_wp_css()
{
    if (!is_admin()) {
        wp_dequeue_style('wp-block-library');
        wp_deregister_style('wp-block-library');

        wp_dequeue_style('wp-block-library-theme');
        wp_deregister_style('wp-block-library-theme');

        wp_dequeue_style('wc-block-style');
        wp_deregister_style('wc-block-style');

        wp_dequeue_style('global-styles');
        wp_deregister_style('global-styles');

        wp_dequeue_style('classic-theme-styles');
        wp_deregister_style('classic-theme-styles');
    }
}
add_action('wp_enqueue_scripts', 'mm_disable_default_wp_css', 100);

function mm_remove_inline_wp_css($html, $handle)
{
    $handles_to_remove = ['global-styles', 'classic-theme-styles'];
    if (in_array($handle, $handles_to_remove)) {
        return '';
    }
    return $html;
}
add_filter('style_loader_tag', 'mm_remove_inline_wp_css', 10, 2);

function mm_remove_meta_generator()
{
    remove_action('wp_head', 'wp_generator');
}
add_action('init', 'mm_remove_meta_generator');

function mm_cleanup_wp_head()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'mm_cleanup_wp_head');
