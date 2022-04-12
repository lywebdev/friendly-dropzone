/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
$(document).ready(function () {
  $('.btn-add-file').click(function () {
    $('#files').trigger('click');
  });
  $('#files').change(function (e) {
    var input = $(e.target);
  });
});
/******/ })()
;