$(function() {
  let wh = $(window).height();
  let toppage = $('.toppage')
  $('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    $('.menu').toggleClass('is-active');
  });


  $(window).scroll(function() {
    if ($(window).scrollTop() > 100) {
      $(toppage).fadeIn();
    } else {
      $(toppage).fadeOut();
    }
  })

  $('.toppage').on('click', function(){
    $('html,body').animate({
        scrollTop: 0
    }, '5000');
  })
});