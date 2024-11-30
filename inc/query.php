<?php

/**
 *
 * Query File
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');


/**
 * Custom query function to fetch posts based on different conditions.
 *
 * @param string $query_for The context for the query. Default is 'headline'.
 * @param int $posts_perpage Number of posts to fetch per page. Default is 3.
 * @return WP_Query The custom query object.
 */
function com_query($posts_perpage = 3)
{
    $args = array(
        'posts_per_page' => $posts_perpage,
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'ignore_sticky_posts' => 1,
    );

    if (is_category()) {
        $cat_id = get_queried_object_id();
        $args['cat'] = $cat_id;
    } elseif (is_tag()) {
        $tag_id = get_queried_object_id();
        $args['tag_id'] = $tag_id;
    } elseif (is_author()) {
        $author_id = get_queried_object_id();
        $args['author'] = $author_id;
    }

    $query = new WP_Query($args);
    return $query;
}
