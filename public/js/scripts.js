/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
$(document).ready(function () {
  var burger = $("#burger");
  burger.click(function () {
    $("#menu").fadeToggle(800);
  });
  var boutonRepondre = $("#boutonRepondre");
  var reponses = $("input[name='radio']:checked");
  console.log(reponses);
  $nombreReponsesDonnees = 0;
  boutonRepondre.click(function () {
    $(':radio:checked').each(function () {
      console.log($(this).val());
    });
  });
});
/******/ })()
;