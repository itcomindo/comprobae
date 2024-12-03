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
                <div class="group carousel-item">
                    <?php
                    for ($i = 0; $i < 6; $i++) {
                    ?>
                        <div class="item">
                            <div class="photo"><img src="<?php echo THEME_URL . '/assets/images/person(' . $i . ').jpg'; ?>" alt="Web Developer"></div>
                            <div class="job text smaller">Web Developer</div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
function com_dummy_staff($item = 6)
{
?>
    <div class="group">
        <?php
        for ($i = 0; $i < $item; $i++) {
        ?>
            <div class="item">
                <div class="photo"><img src="<?php echo THEME_URL . '/assets/images/person(' . $i . ').jpg'; ?>" alt="Web Developer"></div>
                <div class="job text smaller">Web Developer</div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
