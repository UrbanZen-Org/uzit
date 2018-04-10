window.uzit = {
  modules : [],
  init : function(){
    this.modules.forEach(function(item, i){
      if(item.hasOwnProperty('init')){
        item.init(item);
      }
    });
  },
  ready : function(){
    this.modules.forEach(function(item, i){
      if(item.hasOwnProperty('ready')){
        item.ready(item);
      }
    });
  },
  scroll : function(){
    var self = this;
      self.modules.forEach(function(item, i){
        if(item.hasOwnProperty('scroll')){
          item.scroll(item);
        }
      });
  },
  resize : function(){
    this.modules.forEach(function(item, i){
      if(item.hasOwnProperty('resize')){
        item.resize(item);
      }
    });
  }
}
window.uzit.modules.push(require('./global'));

window.uzit.init(window.uzit);
document.addEventListener('DOMContentLoaded', window.uzit.ready.bind(window.uzit));
document.addEventListener('scroll', window.uzit.scroll.bind(window.uzit));
window.addEventListener('resize', window.uzit.resize.bind(window.uzit));