$(function () {
  $('.toggle-label').on('click',function() {
    if($('.normal').hasClass("normal")){ 
      $('.normal').addClass("blackback");
      $('.normal').removeClass("normal");
    } else if ($('.blackback').hasClass("blackback")) { 
      $('.blackback').addClass("normal");
      $('.blackback').removeClass("blackback");
    }
  })
  $('.toggle-label').on('click',function() {
    if($('.btnoff').hasClass("btnoff")){ 
      $('.btnoff').addClass("btnon");
      $('.btnoff').removeClass("btnoff");
    } else if ($('.btnon').hasClass("btnon")) { 
      $('.btnon').addClass("btnoff");
      $('.btnon').removeClass("btnon");
    }
  })
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
});