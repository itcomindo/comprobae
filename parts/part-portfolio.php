<?php

/**
 *
 * Part: Portfolio
 * @package com
 */

defined('ABSPATH') || die('No script kiddies please!');

function com_get_dummy_portfolio()
{
    $extensions = 'webp';
    $directory = get_template_directory() . '/assets/images/portfolio/';
    $files = glob(trailingslashit($directory) . '*.' . $extensions);
    $output = '';

    if (!empty($files)) {
        foreach ($files as $file) {
            // Mengubah path file ke URL
            $relative_file_path = str_replace(get_template_directory(), '', $file);
            $image_url = esc_url(get_template_directory_uri() . $relative_file_path);
            $output .= '<div class="item"><img src="' . $image_url . '" alt="Portfolio"><div class="desc text smaller">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nostrum.</div></div>';
        }
    } else {
        $output .= '<p>No portfolio items found.</p>';
    }

    return $output;
}




?>

<section id="portfolio" class="section section-high">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="top">
                        <h2 class="head head-section">Proud to Customer Trust us</h2>
                        <p class="text text-section">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non sint quibusdam, sunt eveniet ab delectus.</p>
                    </div>
                    <div class="bot">
                        <div class="items">
                            <?php
                            echo com_get_dummy_portfolio();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>