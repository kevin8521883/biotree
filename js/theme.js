

$.fn.isInViewport = function() {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();
  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();
  return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(document).ready(function(){

  // 初始化 LazyLoad
  var imgLazyLoad = new LazyLoad({
    elements_selector: ".img-lazy",
  });
  var bgLazyLoad = new LazyLoad({
    elements_selector: ".bg-lazy",
  });
//   // add scroll event to .custom-scrollbar
//   $('.customer-scrollbar').addCustomScrollbar()
});
