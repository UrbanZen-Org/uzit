'use strict';

var $ = require('jquery');
var lazysizes = require('lazysizes');
var unveilhooks = require('unveilhooks');
var Cookies = require('js-cookie');
var imagesLoaded = require('imagesloaded');
var slick = require('slick-carousel');
var openOnScroll = function(){
  if ($(window).scrollTop() > 100){
    global.popup.open();
  }
};

var global = {
  init: function(){
  },

  ready: function(){
    this.scrollTo();
    this.featuredStorySlideshow();
    this.mobileMenu();
    this.popup.init();
  },
  mobileMenu: function() {
        $('.menu-item').each(function() {            
            if ($(this).find("ul li a").length) {
              
                var self = this;
                $(this).find(">a").click(function(e) {
                  if ($(window).width() <= 768){
                    e.preventDefault();
                    $(self).find('ul').toggleClass('open');
                  }
                });
              
                
            }
        });

        // Create the dropdown base


    },

  resize:function(){
    
  },  
  scroll: function(){
    
  },
  featuredStorySlideshow : function(){
    var $featured_stories = $('.featured-stories');
    if($featured_stories){
      var options = {
          infinite: true,
          slide: '.featured-story',
          slidesToShow: 4,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: '60px',
          prevArrow: false,
          nextArrow: false,
          autoplay: 3000,
          responsive: [
          {
              breakpoint: 768,
              settings: {
                centerPadding: '40px',
                slidesToShow: 2
              }
            }
          ]
        };
      imagesLoaded($featured_stories, function(){
        $('.featured-stories-section').addClass('visible');
        $featured_stories.slick(options);
      });
    }
  },
  scrollTo: function(){
    if ($('a[data-target]').length){
      $('a[data-target]').click(function() {
        var target = $(this).data('target');
        if ($(window).width > 1023 ){
          var nextSection = $(target).offset().top - 100;  
        }else{
          var nextSection = $(target).offset().top - 100;  
        }
        
        $("html, body").animate({ scrollTop: nextSection });
      });
    }
  },
   popup: {
    init: function(){
      if($('.find-popup').length){        
        if (!Cookies.get('newsletter')){
          Cookies.set('newsletter', 1, { expires: 7 });
          this.scroll();
        }          
        this.actions();
      }   
 
    },
    scroll: function(){
      var self = this;
      document.addEventListener('scroll', openOnScroll);
    },
    actions: function(){
      var self = this;
      $('.find-popup,.find-popup .close').click(function(e){
        self.close();
      });
      $('.find-popup .popup-body').click(function(e){
        e.stopPropagation();
      });
      $('.newsletter-callout').click(function(e){
        self.open();
      });
    },
    open: function(){
      var self = this;
      $('.find-popup').addClass('open');
      $('body').addClass('lock-scroll');
      document.removeEventListener('scroll', openOnScroll);
    },
    close: function(){
      $('.find-popup').removeClass('open');
      $('body').removeClass('lock-scroll');
    }
  },
};

module.exports = global;


