<?php

/**
 *
 * Menus File
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Registers custom navigation menus for the theme.
 *
 * This function registers two navigation menus: 'header-menu' and 'footer-menu'.
 * The 'header-menu' is intended for use in the header section of the theme,
 * and the 'footer-menu' is intended for use in the footer section of the theme.
 *
 * @return void
 */
function com_register_menus()
{
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu'
    ));
}
add_action('init', 'com_register_menus');



/**
 * Displays a custom WordPress menu.
 *
 * This function uses `wp_nav_menu` with a custom walker to adjust the output.
 *
 * @param string $menu_name   The theme location of the menu.
 * @param string $menu_id     Optional. The ID attribute for the container element. Default is an empty string.
 * @param string $menu_class  Optional. The class attribute for the <ul> element. Default is an empty string.
 *
 * @return string The HTML output of the menu.
 */
function com_display_menu($menu_name, $menu_id = '', $menu_class = '')
{
    // Menggunakan wp_nav_menu dengan custom walker untuk menyesuaikan output.
    $menu = wp_nav_menu(
        array(
            'theme_location'  => $menu_name,
            'container'       => 'nav', // Container menjadi nav.
            'container_id'    => $menu_id, // ID container diambil dari parameter.
            'container_class' => '', // Tidak menggunakan class tambahan di <nav>.
            'menu_class'      => $menu_class, // Class <ul> diambil dari parameter.
            'echo'            => false, // Output ditangkap sebagai string, bukan langsung dicetak.
            'fallback_cb'     => false, // Tidak ada fallback.
        )
    );

    return $menu;
}
