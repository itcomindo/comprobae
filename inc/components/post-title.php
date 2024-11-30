<?php

/**
 *
 * Post Title
 * @package com
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Trims the post title to a specified length and appends ellipsis if necessary.
 *
 * @param int $trim Optional. The maximum length of the title. Default is 200 characters.
 * @return string The trimmed post title with ellipsis if it exceeds the specified length.
 */
function com_post_title($trim = 200)
{
    $title = get_the_title();
    $title = strlen($title) > $trim ? substr($title, 0, $trim) . '...' : $title;
    return $title;
}
