<?php

/**
 *
 * Part: Team
 * @package com
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<section id="teams" class="section section-high">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="top">
                        <h2 class="head head-section">The dedicated teams around the globe <br><span class="highlight">Ready for you.</span></h2>
                        <p class="text text-section lw50mw100">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo a, numquam quasi atque aliquam dignissimos?</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="bot">
            <div class="groups carousel-wrapper">
                <?php
                com_dummy_staff();
                ?>
            </div>
        </div>
    </div>
    <div class="skills-wrapper">
        <div class="skills-group">
            <div class="skills">
                <ul class="skill-items list-no-style">
                    <!-- Wordpress -->
                    <li class="wp"><span><i class="fa-brands fa-wordpress"></i></span><span>WordPress</span></li>
                    <!-- Elementor -->
                    <li class="el"><span><i class="fa-brands fa-elementor"></i></span><span>Elementor</span></li>
                    <!-- Bricks Builder -->
                    <li class="br"><span><i class="fa-solid fa-b"></i></span><span>Bricks</span></li>
                    <!-- Oxygen Builder -->
                    <li class="ox"><span><i class="fa-solid fa-o"></i></span><span>Oxygen Builder</span></li>
                    <!-- DIVI Builder -->
                    <li class="dv"><span><i class="fa-solid fa-d"></i></span><span>Divi</span></li>
                    <!-- Beaver Builder -->
                    <li class="bv"><span><i class="fa-solid fa-b"></i></span><span>Beaver Builder</span></li>
                    <!-- Zion Builder -->
                    <li class="zn"><span><i class="fa-solid fa-z"></i></span><span>Zion Builder</span></li>
                    <!-- WPBakery -->
                    <li class="vc"><span><i class="fa-solid fa-v"></i></span><span>WPBakery</span></li>
                    <!-- Woocomerce -->
                    <li class="wc"><span><i class="fa-solid fa-cart-shopping"></i></span><span>Woocomerce</span></li>
                    <!-- WP Theme Developmen -->
                    <li class="td"><span><i class="fa-solid fa-pen-to-square"></i></span><span>Theme Development</span></li>
                    <!-- WP Plugin Development -->
                    <li class="pd"><span><i class="fa-solid fa-code"></i></span><span>Plugin Development</span></li>



                </ul>
            </div>
        </div>
    </div>
</section>
<?php


/**
 * Dummy Staff
 * @param int $item
 */
function com_dummy_staff($item = 6)
{
?>
    <div class="group carousel-item">
        <?php
        for ($i = 0; $i < 6; $i++) {
        ?>
            <div class="item">
                <div class="photo"><img src="<?php echo THEME_URL . '/assets/images/person(' . $i . ').jpg'; ?>" alt="Web Developer"></div>
                <div class="name text smaller">John Doe</div>
                <div class="job text smaller">Web Developer</div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
