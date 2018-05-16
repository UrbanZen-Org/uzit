'use strict';

var $ = require('jquery');
var lazysizes = require('lazysizes');
var unveilhooks = require('unveilhooks');
var Cookies = require('js-cookie');
var imagesLoaded = require('imagesloaded');
var slick = require('slick-carousel');

var global = {
  init: function(){
  },

  ready: function(){
    this.scrollTo();
    this.featuredStorySlideshow();
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
          autoplay: 3000
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
  }
};

module.exports = global;


