<?php

/**
 *
 * Author Gravatar
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Generates the author's gravatar image with an optional link to their posts.
 *
 * @param bool $link Optional. Whether to wrap the gravatar in a link to the author's posts. Default true.
 * @param int $size Optional. Size of the gravatar image in pixels. Default 32.
 * @return string HTML markup for the author's gravatar image, optionally wrapped in a link.
 */
function com_author_gravatar($link = true, $size = 32)
{
    $author_id = get_the_author_meta('ID');
    $author_name = get_the_author_meta('display_name');
    $author_email = get_the_author_meta('user_email');
    $author_avatar = get_avatar_url($author_email, array('size' => $size));
    $author_gravatar = '<img src="' . $author_avatar . '" alt="' . $author_name . '" class="gravatar" />';
    if ($link) {
        $author_gravatar = '<a href="' . get_author_posts_url($author_id) . '">' . $author_gravatar . '</a>';
    }
    return $author_gravatar;
}
