<?php

/**
 *
 * Part Blog
 * @package com
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<section id="blog" class="section section-high">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="top">
                        <h2 id="head-blog" class="head head-section lw50mw100">Create your awesome digital product with us</h2>
                        <p class="text-section">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cumque ea enim aliquid, sunt amet eum vitae nostrum. Sequi, doloremque natus quibusdam iusto illo vitae.</p>
                    </div>
                    <div class="mid">
                        <div class="items horizontal">
                            <?php
                            $query = com_query(3);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    get_template_part('parts/part', 'blog-card');
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="bot">
                        <a href="#" class="btn medium transparent borad-7">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>