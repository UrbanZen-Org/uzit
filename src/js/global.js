'use strict';

var $ = require('jquery');
var lazysizes = require('lazysizes');
var unveilhooks = require('unveilhooks');
var Cookies = require('js-cookie');


var global = {
  init: function(){
  },

  ready: function(){
    this.scrollTo();
  },
  
  resize:function(){
    
  },  
  scroll: function(){
    
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


