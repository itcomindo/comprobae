jQuery(document).ready(function () {


    function stickyProcess() {

        // Sticky untuk elemen kiri
        jQuery("#testi-left").stick_in_parent({
            offset_top: 300
        });

        jQuery(".stk").stick_in_parent({
            offset_top: 300
        });

        // var sticky = new Sticky('.stk');
        console.log('Sticky Process');
    }
    stickyProcess();





    // staffCarousel start.

    function staffCarousel() {
        // Clone the group to create the infinite loop effect
        var group = jQuery('.carousel-item');
        var groupsContainer = jQuery('.carousel-wrapper');

        // Clone the .group element and append it to the container
        group.clone().appendTo(groupsContainer);

        // Define the animation function
        function startCarousel() {
            var groupWidth = group.outerWidth(true);

            // Animate the .groups element to scroll continuously to the left
            groupsContainer.animate({ scrollLeft: groupWidth }, 35000, 'linear', function () {
                // Reset scroll position to the beginning and restart the animation
                groupsContainer.scrollLeft(0);
                startCarousel();
            });
        }

        // Start the infinite scrolling animation
        startCarousel();
    }
    staffCarousel();




    // staffCarousel end.


});