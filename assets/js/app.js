$(function() {
  $('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    $('.menu').toggleClass('is-active');
  });
});