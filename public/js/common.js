'use strict';

$(function(){
    $(function() {
      $(".switch-btn").on('click', function() {
      $(".header-fadeImg").fadeToggle("fast",alertFunc);
    });
    function alertFunc(){
        if ($(this).css('display') === 'block') {
          $(".switch-btn").html("<img id='fadeInOutImg' src='img/batsu.png' alt='検索'>");
        }else{
          $(".switch-btn").html("<i class='fa fa-search size' id='fadeInOutImg' aria-hidden='true'></i>");
        }
      };
    });
  });
