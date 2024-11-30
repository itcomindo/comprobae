<?php

/**
 *
 * Front Page File
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();

get_template_part('parts/part', 'home-hero');
get_template_part('parts/part', 'services');
get_template_part('parts/part', 'about');
get_template_part('parts/part', 'works');
get_template_part('parts/part', 'blog');
get_template_part('parts/part', 'client');
// get_template_part('parts/part', 'dummy');

get_footer();
