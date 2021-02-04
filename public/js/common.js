'use strict';

$(function(){
    $(function() {
      $(".switch-btn").on('click', function() {
      $(".header-fadeImg").fadeToggle("fast",alertFunc);
    });
    function alertFunc(){
        if ($(this).css('display') === 'block') {
          $(".switch-btn").html("<i class='fa fa-times size' id='fadeInOutImg' aria-hidden='false'></i>");
        }else{
          $(".switch-btn").html("<i class='fa fa-search size' id='fadeInOutImg' aria-hidden='true'></i>");
        }
      };
    });
  });
  $('.hamburger-open').click(function() {
    //属性の削除
    $("#fadeInOutImg").remove();
  })
  $('.hamburger-close').click(function() {
    //属性の削除
    $(".switch-btn").html("<i class='fa fa-search size' id='fadeInOutImg' aria-hidden='true'></i>");
  })
