jQuery(document).ready(function () {
    function mobileMenu() {
        var $screenWidth = jQuery(window).width();
        if ($screenWidth < 992) {
            var $toggleOpen = jQuery('.toggle');
            // Open Mobile Menu.
            jQuery($toggleOpen).on('click', function () {
                var $toggleClose = '<div class="close-menu"><i class="fa fa-times"></i></div>';
                jQuery('nav#header-menu').append($toggleClose);
                jQuery('nav#header-menu').addClass('active');
                // Close Mobile Menu.
                jQuery('.close-menu, nav#header-menu').on('click', function () {
                    jQuery('nav#header-menu').removeClass('active');
                    jQuery('.close-menu').remove();
                });
            });
        }
    }
    mobileMenu();

    // Welcomebox Start.
    function welcomeBox() {
        var $screenWidth = jQuery(window).width();
        if ($screenWidth > 841) {
            setTimeout(function () {
                jQuery('#welcome-box').addClass('active');
                jQuery('#chat').addClass('active');

                // Close Welcome Box.
                jQuery('.wbox-closer').on('click', function () {
                    jQuery('#welcome-box').removeClass('active');
                });



            }, 2000);
        }
    }
    welcomeBox();
    // Welcomebox End.

    // resize function.
    jQuery(window).resize(function () {
        mobileMenu();
        welcomeBox();
    });





});