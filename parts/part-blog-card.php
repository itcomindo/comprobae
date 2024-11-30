<?php

/**
 *
 * Part Blog Card
 * @package com
 */

defined('ABSPATH') || die('No script kiddies please!');

?>


<div class="item">
    <div class="cat"><a href="#">Kategory</a></div>
    <div class="top">
        <a href="<?php echo esc_html(get_the_permalink()); ?>" title="<?php echo esc_html(get_the_title()); ?>"><?php echo com_post_thumbnail('full', true); ?></a>
    </div>
    <div class="bot">
        <h3 class="head head-card"><a href="<?php echo esc_html(get_the_permalink()); ?>" title="<?php echo esc_html(get_the_title()); ?>"><?php echo com_post_title(); ?></a></h3>
        <div class="meta">
            <div class="photo"><?php echo com_author_gravatar(false, 32); ?></div>
            <div class="author">Bedul</div>
        </div>
    </div>
</div>