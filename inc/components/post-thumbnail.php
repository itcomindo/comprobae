<?php

/**
 *
 * Post Thumbnail
 * @package com
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Generates the HTML for a post thumbnail image.
 *
 * @param string $size The size of the thumbnail image. Default is 'full'.
 * @param bool $lazy Whether to add the 'loading="lazy"' attribute to the image. Default is false.
 * @return string The HTML <img> tag for the post thumbnail.
 */
function com_post_thumbnail($size = 'full', $lazy = false)
{
    $post_id = get_the_ID();
    $thumbnail_id = get_post_thumbnail_id($post_id);
    $thumbnail_url = get_the_post_thumbnail_url($post_id, $size);
    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    // Placeholder jika tidak ada featured image.
    if (!$thumbnail_url) {
        $thumbnail_url = THEME_URL . '/assets/images/placeholder.webp';
        $alt = 'Placeholder image';
    }

    // Fallback jika alt kosong.
    if (empty($alt)) {
        $alt = get_the_title($post_id);
    }

    // Ambil srcset.
    $srcset = $thumbnail_url ? wp_get_attachment_image_srcset($thumbnail_id, $size) : '';

    // Buat atribut <img>.
    $loading = $lazy ? 'loading="lazy"' : '';
    $attributes = sprintf(
        '<img src="%1$s" %2$s srcset="%3$s" sizes="100vw" alt="%4$s" title="%5$s">',
        esc_url($thumbnail_url),
        $loading,
        esc_attr($srcset),
        esc_attr($alt),
        esc_attr(get_the_title($post_id))
    );

    return $attributes;
}
