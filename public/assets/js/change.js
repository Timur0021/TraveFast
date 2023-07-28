/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************************!*\
  !*** ./public/assets/src/js/vue/change.js ***!
  \********************************************/
jQuery(function ($) {
  'use strict';

  $(document).on('change', function () {
    var scrollPosition = window.scrollY;
    if (scrollPosition >= 400) {
      $(".travel-header").addClass("animated fadeImDown fixed");
    }
  });
});
/******/ })()
;