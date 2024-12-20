<?php

/**
 *
 * Assets
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');



/**
 * Enqueue scripts and styles.
 */
function nbt_load_assets()
{
    //Font Awesome.
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '6.6.0', 'all');


    // Styles.
    wp_enqueue_style('nbt-style', THEME_ASSETS . '/css/global.min.css', array(), THEME_VERSION, 'all');

    // Scripts.

    //Deregister jQuery.
    wp_deregister_script('jquery');

    //Register jQuery new version.
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);

    //Enqueue jQuery.
    wp_enqueue_script('jquery');


    //Enqueue scripts.
    wp_enqueue_script('nbt-script', THEME_ASSETS . '/js/global.min.js', array(), THEME_VERSION, true);

    if (is_front_page()) {

        // Load Sticky Kit.
        wp_enqueue_script('sticky-kit-js', 'https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js', array(), '3.7.11', true);

        // Load GSAP.
        wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '3.12.5', true);

        // Load ScrollTrigger.
        wp_enqueue_script('scroll-trigger-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), '3.12.5', true);

        // Load front-page.min.js.
        wp_enqueue_script('nbt-front-page', THEME_ASSETS . '/js/front-page.min.js', array(), THEME_VERSION, true);

        // Load skills-carousel.min.js.
        wp_enqueue_script('nbt-skills-carousel', THEME_ASSETS . '/js/skills-carousel.min.js', array(), THEME_VERSION, true);
    }


    // this is will be loaded only in the home page.
    if (is_home()) {
        //Load Flickity.
        wp_enqueue_script('flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js', array(), '2.2.2', true);

        //Load home.min.js.
        wp_enqueue_script('nbt-home', THEME_ASSETS . '/js/home.min.js', array(), THEME_VERSION, true);
    }

    // this is will be loaded only in the single post page.
    if (is_single()) {
        // First we check the post type.
        $nbt_post = carbon_get_the_post_meta('nbt_post');

        // If the post type is video or gallery.
        if ('video' === $nbt_post || 'gallery' === $nbt_post) {
            //Load Flickity.
            wp_enqueue_script('flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js', array(), '2.2.2', true);
        }

        // Load single.min.js.
        wp_enqueue_script('nbt-single', THEME_ASSETS . '/js/single.min.js', array(), THEME_VERSION, true);
    }
}
add_action('wp_enqueue_scripts', 'nbt_load_assets');
