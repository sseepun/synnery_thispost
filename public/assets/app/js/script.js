$(function(){ 'use strict';

   // Topnav
   var topnav = $('nav.topnav');
   var sidenav = $('nav.sidenav'),
       sidenavMenus = sidenav.find('.menu-container'),
       sidenavToggle = $('nav .sidenav-toggle');

   if(topnav.length){
       // Generate Sidenav
       sidenavMenus.html( topnav.find('#topnav-menu').html() );
       sidenavMenus.find('em').remove();
       sidenavMenus.find('.num, .title, .submenu-title').remove();
       sidenavMenus.find('.has-children').each(function(){
           $(this).append('<div class="dropdown-toggle"><em class="fas fa-chevron-right"></em></div>');
       });
       sidenavMenus.find('.dropdown-toggle').click(function(e){
           e.preventDefault();
           var self = $(this);
           self.toggleClass('active');
           self.prev().slideToggle();
       });
   }

   // Sidenav Toggle
   sidenavToggle.click(function(e){
       e.preventDefault();
       if($('body').hasClass('sidenav-opened')){
           $('html, body').removeClass('sidenav-opened');
           sidenavToggle.find('> *').removeClass('active');
           sidenav.removeClass('active');
       }else{
           $('html, body').addClass('sidenav-opened');
           sidenavToggle.find('> *').addClass('active');
           sidenav.addClass('active');
       }
   });
   $('.sidenav-filter').click(function(e){
       e.preventDefault();
       $('html, body').removeClass('sidenav-opened');
       sidenavToggle.find('> *').removeClass('active');
       sidenav.removeClass('active');
   });


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


  // Font Sizes
  var bodySize = 16,
  fontsizeBtns = $('.font-size-btn');
  fontsizeBtns.click(function(e){
   e.preventDefault();
   var self = $(this);
   var s = Number(self.data('size'));
   if(s==0) bodySize = 16;
   else if(s==1 || s==-1) bodySize += s;
   else bodySize = s;
   $('html, body').css('font-size', bodySize+'px');

   if(self.hasClass('option')){
       fontsizeBtns.removeClass('active');
       self.addClass('active');
   }
  });


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

  // Themes
  var themeBtns = $('.theme-btn');
  themeBtns.click(function(e){
    e.preventDefault();
    var self = $(this);
    $('#css-theme').attr('href', 'public/assets/app/css/color-'+$(this).data('theme')+'.css');
    $('body').removeClass('theme-0 theme-1 theme-2');
    $('body').addClass('theme-'+self.data('theme'));
       
    themeBtns.removeClass('active');
    themeBtns.filter('[data-theme="'+self.data('theme')+'"]').addClass('active');
   });


  // Page Loader
  const pageLoader = $('.page-loader');
  if(pageLoader.length){
    
  }else{
    $('body').removeClass('loading');
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
  }

});