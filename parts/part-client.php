<?php

/**
 *
 * Part Services File
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<section id="clients" class="section section-high card-section">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="top">
                        <h2 class="head head-section lw50mw100">Some of our clients who have collaborated with us</h2>
                        <p class="text-section lw50mw100">In oculis quidem exercitus quid ex ea voluptate et impetus quo pertineant non numquam.</p>
                    </div>
                    <div class="mid">
                        <div class="items">
                            <div class="item">
                                <div class="row">
                                    <img src="<?php echo THEME_URL . '/assets/images/client(1).jpg' ?>" alt="" title="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <img src="<?php echo THEME_URL . '/assets/images/client(2).jpg' ?>" alt="" title="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <img src="<?php echo THEME_URL . '/assets/images/client(3).jpg' ?>" alt="" title="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <img src="<?php echo THEME_URL . '/assets/images/client(1).png' ?>" alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                get_template_part('parts/part', 'subscription-form');
                ?>
            </div>
        </div>
    </div>
</section>