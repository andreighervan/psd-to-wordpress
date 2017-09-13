jQuery(document).ready(function(){
    jQuery("#services-owl-carousel").owlCarousel({
    items : 5,
    navigation : true,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,5],
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});
    jQuery('.right-carousel').click(function(){
        jQuery('#services-owl-carousel').trigger('owl.next');
    })
    jQuery('.left-carousel').click(function(){
        jQuery('#services-owl-carousel').trigger('owl.prev');
    })
    jQuery("area[rel^='prettyPhoto']").prettyPhoto();

    jQuery(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
    jQuery(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

    jQuery("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function(){ initialize(); }
    });

    jQuery("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function(){ _bsap.exec(); }
    });
    jQuery('.fade-1').hover(
        function () {
            jQuery(this).find('.caption-1').fadeIn(250);
        },
        function () {
            jQuery(this).find('.caption-1').fadeOut(250);
        }
    );
    jQuery('.fade-1').hover(
        function () {
            jQuery(this).find('.caption-2').fadeIn(250);
        },
        function () {
            jQuery(this).find('.caption-2').fadeOut(250);
        }
    );
    //Gallery masonry
    jQuery('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });
    /*===================================================================================*/
    /*  WOW
     /*===================================================================================*/
        new WOW().init();
});