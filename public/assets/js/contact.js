/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/assets/js/contact.js ***!
  \****************************************/
$(function () {
  'use strict';

  new PerfectScrollbar('#mainContactList', {
    suppressScrollX: true
  });
  new PerfectScrollbar('.main-contact-info-body', {
    suppressScrollX: true
  });
  $('.main-contact-item').on('click touch', function () {
    $(this).addClass('selected');
    $(this).siblings().removeClass('selected');
    $('body').addClass('main-content-body-show');
  });
});
/******/ })()
;