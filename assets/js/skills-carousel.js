jQuery(document).ready(function () {


    // Create infinite carousel for skills. where the last item is the same as the first item. loop carousel from left to right.

    var $skillGroupContainer = jQuery('.skills-groups'); // this is the container of the carousel.
    var $skillGroup = jQuery('.skills-group'); // this is the carousel group that contains the items with class .item that will be cloned.

    // clone the carousel group and append it to the container.
    $skillGroup.clone().appendTo($skillGroupContainer);

    gsap.to($skillGroupContainer, {
        duration: 40,
        x: '100%',
        ease: "linear",
        repeat: -1
    });





});