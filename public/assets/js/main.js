// Main Slider (Homepage)
$(document).ready(function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.main-slider', {
    // Optional parameters
    loop: true,
    speed: 400,
    autoplay: 5000,
    effect: 'fade',
    pagination: '.swiper-pagination',
    paginationClickable: true
  });
});


// Navigation When Scroll

$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
      $('.header').addClass("header-sticky"),
      $('.white-logo').removeClass("logo-active"),
      $('.blue-logo').addClass("logo-active");
    }
    else {
      $('.header').removeClass("header-sticky");
      $('.white-logo').addClass("logo-active"),
      $('.blue-logo').removeClass("logo-active");
    }
  });




  //login ajax

});
