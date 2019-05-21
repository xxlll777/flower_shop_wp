$(function() {
$('.header__humburger, .header__humburger--close').on('click', function (e) {
        e.preventDefault();
    
        $('.humburger--open').slideToggle();
        $('.header__humburger').toggle();
        $('.header__humburger--close').toggle();
    });
  });



