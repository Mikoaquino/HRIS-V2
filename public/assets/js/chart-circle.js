/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/assets/js/chart-circle.js ***!
  \*********************************************/
if ($('.dark-side-body .chart-circle').length) {
  $('.dark-side-body .chart-circle').each(function () {
    var $this = $(this);
    $this.circleProgress({
      fill: {
        color: $this.attr('data-color')
      },
      size: $this.height(),
      startAngle: -Math.PI / 4 * 2,
      emptyFill: '#25273e',
      lineCap: 'round'
    });
  });
}
/******/ })()
;