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


});