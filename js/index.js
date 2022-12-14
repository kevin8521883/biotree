$(document).ready(function () {
  var myswiper = new Swiper(".swiper-container", {
    preloadImages: false,
    // Enable lazy loading
    lazy: {
      elementClass: "hidden-md",
    },
    loop: true,
    // autoplay: {
    //   delay: 3000,
    // },
    breakpoints: {
      991: {
        lazy: {
          elementClass: "visible-md",
        },
      },
      575: {
        lazy: {
          elementClass: "visible-xs",
        },
      },
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
