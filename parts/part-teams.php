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
        <div class="skills-inner">
            <div class="skills-groups">
                <div class="skills-group">

                    <!-- WordPress -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-wordpress"></i></div>
                        <div class="name">WordPress</div>
                    </div>

                    <!-- PHP -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-php"></i></div>
                        <div class="name">PHP</div>
                    </div>

                    <!-- Elementor -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-elementor"></i></div>
                        <div class="name">Elementor</div>
                    </div>

                    <!-- Google Analytics -->
                    <div class="item">
                        <div class="icon"><i class="fa-brands fa-google"></i></div>
                        <div class="name">Google Analytics</div>
                    </div>

                    <!-- Javascripts -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-js"></i></div>
                        <div class="name">Javascript</div>
                    </div>

                    <!-- HTML -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-html5"></i></div>
                        <div class="name">HTML</div>
                    </div>

                    <!-- Google Ads -->
                    <div class="item">
                        <div class="icon"><i class="fa-brands fa-google"></i></div>
                        <div class="name">Google Ads</div>
                    </div>

                    <!-- CSS -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-css3-alt"></i></div>
                        <div class="name">CSS</div>
                    </div>

                    <!-- Laravel -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-laravel"></i></div>
                        <div class="name">Laravel</div>
                    </div>

                    <!-- Bootstrap -->
                    <div class="item">
                        <div class="icon"><i class="fab fa-bootstrap"></i></div>
                        <div class="name">Bootstrap</div>
                    </div>

                    <!-- Tailwind -->
                    <div class="item">
                        <div class="icon"><img src="<?php echo THEME_URL . '/assets/images/icons/tailwind.svg'; ?>" alt="tailwind"></div>
                        <div class="name">Tailwind</div>
                    </div>

                    <!-- jQuery -->
                    <div class="item">
                        <div class="icon"><i class="fa-solid fa-j"></i></div>
                        <div class="name">jQuery</div>
                    </div>

                    <!-- Bricks Builder -->
                    <div class="item">
                        <div class="icon"><i class="fa-solid fa-b"></i></div>
                        <div class="name">Bricks Builder</div>
                    </div>

                    <!-- Oxygen Builder -->
                    <div class="item">
                        <div class="icon"><i class="fa-solid fa-o"></i></div>
                        <div class="name">Oxygen Builder</div>
                    </div>


                </div>
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
