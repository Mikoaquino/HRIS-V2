/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/assets/js/timline.js ***!
  \****************************************/
timeline(document.querySelectorAll('.timeline'), {
  mode: 'horizontal',
  verticalStartPosition: 'left',
  visibleItems: 4
});
$('.timeline1').timelify({
  animLeft: "fadeInLeft",
  animCenter: "fadeInUp",
  animRight: "fadeInRight",
  animSpeed: 600,
  offset: 150
});
/******/ })()
;