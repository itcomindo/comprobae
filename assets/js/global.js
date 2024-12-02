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
                jQuery('#chat-trigger').addClass('active');
                // Close Welcome Box.
                jQuery('.wbox-closer').on('click', function () {
                    jQuery('#welcome-box').removeClass('active');
                });
                // Launch ChatBox.
                jQuery('#chat-trigger').on('click', function () {
                    jQuery(this).addClass('inactive').removeClass('active');
                    jQuery('#chat-box').addClass('active');
                    jQuery('#welcome-box').removeClass('active');


                    setTimeout(function () {
                        // Move Cursor to textarea#input-box.
                        jQuery('#input-box').focus();
                    }, 500);
                    // Close ChatBox.
                    jQuery('.close-chat-box').on('click', function () {
                        jQuery('#chat-box').removeClass('active');
                        jQuery('#chat-trigger').addClass('active').removeClass('inactive');
                        jQuery('#welcome-box').addClass('active');
                    });
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