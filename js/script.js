// alert('js connected');

$(document).ready(function(){
    $('.menu-toggle').on('click', function(){
        $('.nav').toggleClass('showing');
        $('.nav ul').toggleClass('showing');
    });

    //slick script to autooplay carousel
    $('.post-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
      });




});

