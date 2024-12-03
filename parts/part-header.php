<?php

/**
 *
 * Part Header File
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<header id="header" class="section">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <!-- left -->
                    <div class="left">
                        <h2><a href="/">ComproBae</a></h2>
                    </div>
                    <!-- mid -->
                    <div class="mid">
                        <?php
                        echo com_display_menu('header-menu', 'header-menu', 'list-no-style menu-list horizontal');
                        ?>
                        <?php
                        get_template_part('inc/components/bars');
                        ?>
                    </div>

                    <!-- right -->
                    <div class="right">
                        <a href="#" class="btn small bg-white borad-5">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>