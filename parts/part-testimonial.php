<?php

/**
 *
 * Part Testimonial File
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<section id="testimonial" class="section section-high">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="items">
                        <div id="testi-left" class="left">
                            <span><i class="fas fa-quote-left"></i></span>
                            <h2 class="head head-section">What our Client Say?</h2>
                            <p class="text text-section">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur sit quas sed quibusdam aspernatur recusandae.</p>
                            <div class="icon"><i class="fa-regular fa-star"></i></div>
                        </div>
                        <div class="right">
                            <div class="groups">

                                <?php
                                echo com_dummy_testimonial(5);
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

function com_dummy_testimonial($count = 5)
{
    $items = '';
    for ($i = 0; $i < $count; $i++) {
        $items .= '<div class="group stk">
            <div class="col left">
                <div class="photo"><img src="' . THEME_URL . '/assets/images/person(' . ($i + 1) . ').jpg" alt="John Doe"></div>
            </div>
            <div class="col right">
                <span class="name text small">John Doe ' . $i . '</span>
                <span class="job text smaller">Director Kampret</span>
                <blockquote class="text small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, voluptatum.</blockquote>
            </div>
        </div>';
    }
    return $items;
}
