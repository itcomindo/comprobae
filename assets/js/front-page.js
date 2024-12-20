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
        var group = jQuery('.carousel-item');
        var groupsContainer = jQuery('.carousel-wrapper');
        group.clone().appendTo(groupsContainer);
        function startCarousel() {
            var groupWidth = group.outerWidth(true);
            groupsContainer.animate({ scrollLeft: groupWidth }, 35000, 'linear', function () {
                groupsContainer.scrollLeft(0);
                startCarousel();
            });
        }
        startCarousel();
    }
    staffCarousel();
    // staffCarousel end.


    // GSAP Service Start.
    function gsapServices() {

        //regsiter scrolltrigger plugin.
        gsap.registerPlugin(ScrollTrigger);


        gsap.from('#services .mid .items .item:first-child', {
            rotate: -25,
            yoyo: true,
            duration: 1,
            scrollTrigger: {
                trigger: '#head-service',
                start: 'bottom-=5rem center',
                end: 'bttom+=5rem center',
                toggleActions: 'play none reverse none',
            },
        });

        gsap.from('#services .mid .items .item:nth-child(2)', {
            y: 25,
            yoyo: true,
            duration: 1,
            scrollTrigger: {
                trigger: '#head-service',
                start: 'bottom-=5rem center',
                end: 'bttom+=5rem center',
                toggleActions: 'play none reverse none',
            },
        });

        gsap.from('#services .mid .items .item:last-child', {
            rotate: 25,
            yoyo: true,
            duration: 1,
            scrollTrigger: {
                trigger: '#head-service',
                start: 'bottom-=5rem center',
                end: 'bttom+=5rem center',
                toggleActions: 'play none reverse none',
            },
        });

        gsap.from('#btn-service', {
            scale: 1.3,
            yoyo: true,
            duration: 1,
            scrollTrigger: {
                trigger: '#head-service',
                start: 'bottom-=5rem center',
                end: 'bttom+=5rem center',
                toggleActions: 'play none reverse none',
            },
        });

        gsap.from('#about .left', {
            rotate: -15,
            x: -25,
            yoyo: true,
            duration: 1,

            scrollTrigger: {
                trigger: '#about',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })


        gsap.from('#about .right .inner-right img', {
            scale: 0.8,
            yoyo: true,
            duration: 1,
            scrollTrigger: {
                trigger: '#about',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })


        // Works Section First Item Animation.
        gsap.from('#works .mid .items .item:first-child', {
            scale: 1.5,
            yoyo: true,
            duration: 1,

            scrollTrigger: {
                trigger: '#works',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })

        // Works Section Second Item Animation.
        gsap.from('#works .mid .items .item:nth-child(2)', {
            rotate: 15,
            yoyo: true,
            duration: 1,

            scrollTrigger: {
                trigger: '#works',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })

        // Works Section Third Item Animation.
        gsap.from('#works .mid .items .item:last-child', {
            scale: 1.5,
            yoyo: true,
            duration: 1,

            scrollTrigger: {
                trigger: '#works',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })


        gsap.to('#testimonial', {
            'background': "black",
            'color': "white",
            duration: 1,
            scrollTrigger: {
                trigger: '#testimonial',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })

        gsap.to('#testimonial .icon i', {
            'color': "greenyellow",
            'opacity': 0.5,
            'scale': 0.5,
            'rotate': 180,
            duration: 1,
            scrollTrigger: {
                trigger: '#testimonial',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })


        gsap.to('#testimonial .groups .group', {
            'background': "black",
            'color': "white",
            'boxShadow': "0 0 5px rgba(255, 255, 255, 0.2)",
            duration: 1,
            scrollTrigger: {
                trigger: '#testimonial',
                start: 'top center',
                end: 'bottom center',
                toggleActions: 'play none reverse none',
            },
        })





    }
    gsapServices();
    // GSAP Service End.






});