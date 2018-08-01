'use strict';

var $ = require('jquery');
var lazysizes = require('lazysizes');
var unveilhooks = require('unveilhooks');
var Cookies = require('js-cookie');
var imagesLoaded = require('imagesloaded');
var slick = require('slick-carousel');


var hiu = {
  init: function(){
  },

  ready: function(){

  },
  scroll: function(){

  },
  blog: {
    init : function(){

    },
    get_posts: function(){
      var self = this;
      var offset = 12;
      var num = 12;
      var url = '/wp-json/wp/v2/posts/?offset='+ offset +'&per_page='+ num;
      $('.posts').addClass('loading');
      var request = $.ajax({
                      url: url,
                      type: 'GET'
                    }); 
      request.done(function(response){
        $('.how-i-uzit-posts').attr('data-posts-remaining', Math.floor($('.how-i-uzit-posts').attr('data-posts-remaining') - num));
        $('.how-i-uzit-posts').attr('data-post-offset', Math.floor(parseInt($('.how-i-uzit-posts').attr('data-post-offset')) + num));
        self.addToBlogList(response);
      });
    },
    addToBlogList : function(posts){
      var self = this;
      var posts = "";
      $.each(posts, function(i,post){
        posts += self.markupPost(post);

      });
      self.loader.set('100');
      $('.how-i-uzit-posts').append(posts);
      
      $('.load-more').removeClass('loading');
    },
    loader : {
      init : function(){
          $('.endless-loader').addClass('loading');
          $('.endless-loader span').css('transform', 'scaleX(1)');
      },
      set : function(num){
        if($('.endless-loader').hasClass('loading')){
          $('.endless-loader span').attr('data-percent', num);
        }
      },
    },
    markupPost : function(post){
      self = this;
      // console.log(post);
      var url = '/wp-json/wp/v2/media/?id='+ post.featured_media;
      var title = post.title.rendered;
      var link =  post.link;
      var image = post.featured_image_src;
      var category = post.category;
      var markup = '';
      markup = `
        <a class="hiu-post" href="`+ link +`">         
            <img src="`+ image +`">
            <div class="post-titles">
              <div>
              <h2>` + title + `</h2>
              <p><?php echo get_field("location"); ?></p>
              </div>
            </div>
          </a>
          <div class="col"> 
            <a href="`+ link +`" class="transition-link thumb journal-thumb">
              <div class="lazy-wrap lazyload">
                <img src="`+ image +`" alt="{{ item.thumbnail | alt }}">
              </div>
              <div>
                <div>
                  <div class="article-info">
                    <h6 class="category light-text-color">`+ category.name +`</h6>
                    <h3 class="article-title">` + title + `</h3>
                  </div>
                </div>
                <div>
                  `+ post.excerpt.rendered +`
                </div>
              </div>
            </a>
          </div>`; 

      return markup;
    }
  }
};
module.exports = hiu;