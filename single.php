<?php

/**
 *
 * Single  File
 * @package  com
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();
?>
<section id="sing" class="section section-small">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="top row">
                        <div class="meta">
                            <h1><?php echo esc_html(get_the_title()); ?></h1>
                        </div>
                    </div>
                    <div class="fim">
                        <?php
                        echo com_post_thumbnail();
                        ?>
                    </div>
                    <div class="mid row">
                        <div id="the-content">
                            <?php
                            the_content();
                            ?>
                        </div>
                    </div>
                    <div class="bot row">
                        <span>After Content Will go Here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // use Vanilla Js In the #the-content find <br> within <p> and remove it then wrap string after <br> in p tag.
        const theContent = document.getElementById('the-content');
        const p = theContent.querySelectorAll('p');
        p.forEach((el) => {
            const br = el.querySelector('br');
            if (br) {
                const text = br.nextSibling;
                const newP = document.createElement('p');
                newP.innerHTML = text.nodeValue;
                el.appendChild(newP);
                br.remove();
            }
        });
    </script>
</section>
<?php
get_footer();
