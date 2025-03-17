/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/assets/js/handleCounter.js ***!
  \**********************************************/
// ______________Quantity Cart Increase & Descrease
$(function () {
  $('.counter-plus').on('click', function () {
    var $qty = $(this).closest('div').find('.qty');
    var currentVal = parseInt($qty.val());

    if (!isNaN(currentVal)) {
      $qty.val(currentVal + 1);
    }
  });
  $('.counter-minus').on('click', function () {
    var $qty = $(this).closest('div').find('.qty');
    var currentVal = parseInt($qty.val());

    if (!isNaN(currentVal) && currentVal > 0) {
      $qty.val(currentVal - 1);
    }
  });
});
/******/ })()
;