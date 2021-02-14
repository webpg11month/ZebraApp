'use strict';

$(function(){
    $(function() {
      $(".switch-btn").on('click', function() {
      $(".header-fadeImg").fadeToggle(500,alertFunc);
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
  //とりあえずは削除
  $(function() {
    $("#dayselect").on("change", function(e) {
      console.log(e.currentTarget.value);
      //押せなくする処理
    $(".hidden").prop("disabled", true);
      //消す処理
      //$(".hidden").remove();
    });
  })
