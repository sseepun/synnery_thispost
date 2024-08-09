$(function(){ 'use strict';


  // Banner 01
  if($('.banner-01 .swiper').length){
    new Swiper('.banner-01 .swiper', {
      spaceBetween:0, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
    });
  }
  

  // Section 02
  if($('.section-02 .swiper').length){
    new Swiper('.section-02 .swiper', {
      spaceBetween: 16, slidesPerView: 1.8, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      pagination: { 
        el: '.swiper-pagination', clickable: true,},
      breakpoints: {
        1200: { slidesPerView: 3.8 },
        768: { slidesPerView: 3.2 },
        576: { slidesPerView: 2.5 },
      },
    });
  }


  // Section 03
  if($('.section-03 .swiper').length){
    new Swiper('.section-03 .swiper', {
      spaceBetween: 19, slidesPerView: 2, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      breakpoints: {
        1200: { slidesPerView: 4 },
        992: { slidesPerView: 4 },
        768: { slidesPerView: 3 },
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


  // Tab Container
  var tabContainers = $('.tab-container');
  if(tabContainers.length){
    tabContainers.each(function(){
        var self = $(this),
            tabs = self.find('.tabs .tab'),
            tabContents = self.find('.tab-contents .tab-content');
        tabs.click(function(e){
            var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                oldTargets = tabContents.filter('.active');
            if($(this).hasClass('active')) e.preventDefault();
            if(target.length && !$(this).hasClass('active')){
                e.preventDefault();
                tabs.removeClass('active');
                $(this).addClass('active');

                tabContents.removeClass('fade-in');
                oldTargets.addClass('fade-out');
                target.addClass('fade-in');
                setTimeout(function(){
                    tabContents.removeClass('fade-in fade-out active');
                    target.addClass('active');
                }, 600);
              //  AOS.refresh();
            }
        });
    });
   }


  // Page Loader
  const pageLoader = $('.page-loader');
  if(pageLoader.length){
    
  }else{
    $('body').removeClass('loading');
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
  }

});