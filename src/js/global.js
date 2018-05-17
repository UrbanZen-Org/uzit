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
    this.mobileMenu();
  },
  mobileMenu: function() {

        $('.menu-item').each(function() {
            console.log('1');
            if ($(this).find("ul li a").length) {
              
                var self = this;
                $("<select />").appendTo($(this));
                $(this).find("select").hide();

                // Create default option "Go to..."
                $("<option />", {
                    "selected": "selected",
                    "value": "",
                    "text": "Go"
                }).appendTo($(this).find("select"));
                $(this).find("a").click(function(e) {
                    e.preventDefault();
                    $(this).find('select').trigger('click');
                });
                // Populate dropdown with menu items
                $(this).find("ul li a").each(function() {
                    var el = $(this);
                    $("<option />", {
                        "value": el.attr("href"),
                        "text": el.text()
                    }).appendTo($(self).find("select"));
                });

                $(this).find("select").change(function() {
                    window.location = $(this).find("option:selected").val();
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
  }
};

module.exports = global;


