/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/assets/js/form-layouts.js ***!
  \*********************************************/
$(function () {
  'use strict';

  $('.main-form-group .form-control').on('focusin focusout', function () {
    $(this).parent().toggleClass('focus');
  });
  $(document).ready(function () {
    $('.select2').select2({
      placeholder: 'Choose one'
    });
    $('.select2-no-search').select2({
      minimumResultsForSearch: Infinity,
      placeholder: 'Choose one'
    });
  });
});
/******/ })()
;