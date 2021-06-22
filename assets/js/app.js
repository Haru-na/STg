$(function() {
  let wh = $(window).height();
  let toppage = $('.toppage').offset().top;

  $('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    $('.menu').toggleClass('is-active');
  });


  $(window).scroll(function() {
    if (toppage <= $(window).scrollTop() + wh) {
      $('.toppage').fadeIn(10);
    } else {
      $('.toppage').hide();
    }
    $('.toppage').on('click', function(){
      $('html,body').animate({
          scrollTop: 0
      }, '5000');
      return false;
  })
  })
});