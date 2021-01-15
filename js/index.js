//Slick carousel plugin - https://kenwheeler.github.io/slick/
$(document).ready(function(){
    $('.carousel').slick({
      adaptiveHeight: true,
      autoplay: true,
      //autoplaySpeed: 5000,
      dots: true,
      arrows: false,
      fade: true,
      speed: 1500,
      mobileFirst: true
      //pauseOnHover: false
      // setting-name: setting-value
    });
  });