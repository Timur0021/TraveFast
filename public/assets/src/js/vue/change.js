jQuery(function ($) {
    'use strict';
    $(document).on('change', function () {
        var scrollPosition = window.scrollY;
        if (scrollPosition >= 400){
            $(".travel-header").addClass("animated fadeImDown fixed");
        }
    });
});