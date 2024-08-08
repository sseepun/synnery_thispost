$(function(){ 'use strict';

  // Section 02
  if($('.section-02 .swiper').length){
    new Swiper('.section-02 .swiper', {
      spaceBetween: 16, slidesPerView: 1.8, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      breakpoints: {
        1200: { slidesPerView: 3.8 },
        768: { slidesPerView: 3.2 },
        576: { slidesPerView: 2.5 },
      },
    });
  }

  // Footer
  if($('nav.footer .swiper').length){
    new Swiper('nav.footer .swiper', {
      spaceBetween: 0, slidesPerView: 2, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      breakpoints: {
        1200: { slidesPerView: 5 },
        992: { slidesPerView: 4 },
        768: { slidesPerView: 3 },
      },
    });
  }


  // Page Loader
  const pageLoader = $('.page-loader');
  if(pageLoader.length){
    
  }else{
    $('body').removeClass('loading');
    // AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
  }

});