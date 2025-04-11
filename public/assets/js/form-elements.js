/******/ (() => { // webpackBootstrap
/*!**********************************************!*\
  !*** ./resources/assets/js/form-elements.js ***!
  \**********************************************/
// Additional code for adding placeholder in search box of select2
(function ($) {
  var Defaults = $.fn.select2.amd.require('select2/defaults');
  $.extend(Defaults.defaults, {
    searchInputPlaceholder: ''
  });
  var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');
  var _renderSearchDropdown = SearchDropdown.prototype.render;
  SearchDropdown.prototype.render = function (decorated) {
    // invoke parent method
    var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));
    this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));
    return $rendered;
  };
})(window.jQuery);
$(function () {
  'use strict';

  // Toggle Switches
  $('.main-toggle').on('click', function () {
    $(this).toggleClass('on');
  });
  // Input Masks
  $('#dateMask').mask('99/99/9999');
  $('#phoneMask').mask('(999) 999-9999');
  $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
  $('#ssnMask').mask('999-99-9999');
  // Color picker
  $('#colorpicker').spectrum({
    color: '#17A2B8'
  });
  $('#showAlpha').spectrum({
    color: 'rgba(23,162,184,0.5)',
    showAlpha: true
  });
  $('#showPaletteOnly').spectrum({
    showPaletteOnly: true,
    showPalette: true,
    color: '#DC3545',
    palette: [['#1D2939', '#fff', '#0866C6', '#23BF08', '#F49917'], ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']]
  });
  // Datepicker
  $('.fc-datepicker').datepicker({
    showOtherMonths: true,
    selectOtherMonths: true
  });
  $('#datepickerNoOfMonths').datepicker({
    showOtherMonths: true,
    selectOtherMonths: true,
    numberOfMonths: 2
  });
  // AmazeUI Datetimepicker
  $('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true
  });
  // jQuery Simple DateTimePicker
  $('#datetimepicker2').appendDtpicker({
    closeOnSelected: true,
    onInit: function onInit(handler) {
      var picker = handler.getPicker();
      $(picker).addClass('main-datetimepicker');
    }
  });

  // Filebrowser

  $(document).on('change', ':file', function () {
    var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready(function () {
    $(':file').on('fileselect', function (event, numFiles, label) {
      var input = $(this).parents('.input-group').find(':text'),
        log = numFiles > 1 ? numFiles + ' files selected' : label;
      if (input.length) {
        input.val(log);
      } else {
        if (log) {}
        ;
      }
    });
  });
  //Date picker
  $('#datepicker-date').bootstrapdatepicker({
    format: "dd-mm-yyyy",
    viewMode: "date",
    multidate: true,
    multidateSeparator: "-"
  });

  //Month picker
  $('#datepicker-month').bootstrapdatepicker({
    format: "MM",
    viewMode: "months",
    minViewMode: "months",
    multidate: true,
    multidateSeparator: "-"
  });

  //Year picker
  $('#datepicker-year').bootstrapdatepicker({
    format: "yyyy",
    viewMode: "year",
    minViewMode: "years",
    multidate: true,
    multidateSeparator: "-"
  });
  $(document).ready(function () {
    $('.select2').select2({
      placeholder: 'Choose one',
      searchInputPlaceholder: 'Search'
    });
    $('.select2-no-search').select2({
      minimumResultsForSearch: Infinity,
      placeholder: 'Choose one'
    });
    $('.select2').on('click', function () {
      var selectField = document.querySelectorAll('.select2-search__field');
      selectField.forEach(function (element, index) {
        element === null || element === void 0 || element.focus();
      });
    });
  });
});
/******/ })()
;