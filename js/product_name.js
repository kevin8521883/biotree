var gallery_img = undefined;
document.addEventListener("DOMContentLoaded", function () {
  gallery_img = renderGallery("#img", {
    imgSrc: [],
  });
});

// 設定款式資訊/顯示款式資訊
function getURLParameter(name) {
  return (
    decodeURIComponent(
      (new RegExp("[?|&]" + name + "=" + "([^&;]+?)(&|#|;|$)").exec(
        location.search
      ) || [null, ""])[1].replace(/\+/g, "%20")
    ) || null
  );
}
$(document).ready(function () {
  //底部相關產品輪播圖
  var slideCount = $(".swiper_products .swiper-slide").length;
  if (slideCount >= 4) {
    var autoLoop = true;
  } else {
    var autoLoop = false;
  }
  var SwiperProducts = new Swiper(".swiper_products", {
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazy: true,
    loop: autoLoop,
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-products-next",
      prevEl: ".swiper-products-prev",
    },
    pagination: {
      clickable: true,
      el: ".swiper-pagination",
      type: "bullets",
    },
    breakpoints: {
      991: {
        slidesPerView: 3,
      },
      767: {
        slidesPerView: 2,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 50,
      },
    },
  });
  // 商品款式
  var productPriceRange = $(".product_price .price").text();
  var selectedVariant = {};
  themeHelper.variantOptionsBlock(
    setSelectedVariant,
    isAddBuy,
    productPriceRange
  );

  // cart 跳轉到商品頁加購價 start
  var collection_id = getURLParameter("add-buy");
  var price = getURLParameter("price");
  var timeout = getURLParameter("timeout");
  var isAddBuy = false;
  if (collection_id !== null && timeout !== null && price !== null) {
    isAddBuy = true;
  }
  $(function () {
    if (isAddBuy && new Date().getTime() < timeout) {
      price = moneySymbol(price);
      $("#product .product_price span").text("加購價");
      $("#product .price").text(price);
      $("#product .addToCart").data("type", "add-buy");
      $("#product .addToCart").data("collection_id", collection_id);
    }
  });

  // 商品圖輪播
  var productImage = new Swiper(".product_img_swiper", {
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazy: true,
    loop: true,
    navigation: {
      nextEl: ".photo-swiper-next",
      prevEl: ".photo-swiper-prev",
    },
  });

  // 圖片放大
  $(".product_photos .swiper-container .swiper-button").on(
    "click",
    function (e) {
      e.stopPropagation();
    }
  );
  $(".product_photo.img-flex img").on("click", function () {
    if (document.getElementById("photo_with_images_color")) {
      var index = 0;
      var productsSrc = [
        document.getElementById("photo_with_images_color").src,
      ];
    } else if (productImage.$wrapperEl) {
      var index = productImage.realIndex;
      var productImages = $(productImage.$wrapperEl[0]).find("img");
      var productsSrc = [];
      productImages.map(function (index, el) {
        if (index !== 0 && index !== productImages.length - 1) {
          productsSrc.push(el.dataset.src || el.src);
        }
      });
    } else {
      return null;
    }
    gallery_img.updateImgs(productsSrc);
    gallery_img.toggleGallery(true, {
      index: index,
    });
  });

  // 圖片頁碼
  $(".thumb").on("click", "li", function () {
    $(this).addClass("active").siblings().removeClass("active");
    productImage.slideTo($(this).index() + 1, 500);
  });
  // 輪播轉換縮圖
  $(".product_img_swiper .swiper-button").click(function () {
    var swiperIndex = $(".swiper-slide").index($(".swiper-slide-active"));
    var pages = $(".thumb li").length;
    var photoIndex = (swiperIndex + pages - 1) % pages;
    $($(".thumb li")[photoIndex])
      .addClass("active")
      .siblings()
      .removeClass("active");
  });
  //滑動換圖
  productImage.on("touchEnd", function () {
    setTimeout(function () {
      var swiperIndex = $(".swiper-slide").index($(".swiper-slide-active"));
      var pages = $(".thumb li").length;
      var photoIndex = (swiperIndex + pages - 1) % pages;
      $($(".thumb li")[photoIndex])
        .addClass("active")
        .siblings()
        .removeClass("active");
    }, 300);
  });

  // 商品說明介紹標籤
  $(".desc_sections li").on("click", function () {
    $(this).children().addClass("active");
    $(this).siblings().children().removeClass("active");
    productImage.slideTo($(this).index() + 1, 500);
  });
  // 產品說明
  $(window).on("scroll", function () {
    var headerHeight = $("#header").height();
    var desc_sections = $(".desc_sections");
    var desc_section_list = $(".desc_section");
    var descSectionHeight = $(".desc_sections").height();
    var descSectionTop = $(".desc_sections").offset().top - headerHeight;
    var product_window = $(this);
    // 滑動固定產品說明
    if (product_window.scrollTop() > descSectionTop) {
      desc_sections
        .stop()
        .addClass("desc_sections_hold")
        .css({
          "min-height": descSectionHeight,
        })
        .find("ul")
        .css({
          top: headerHeight,
        });
      if ($(window).width() < 768) {
        // 手機版，往下滑時，開啟 product modal
        $(".product_button_mobile").css("display", "none");
        $(".product_button_mobile_default").css("display", "flex");
      }
    } else {
      desc_sections.stop().removeClass("desc_sections_hold");
      if ($(window).width() < 768) {
        $(".product_button_mobile").css("display", "flex");
        $(".product_button_mobile_default").css("display", "none");
      }
    }
    // 點選產品說明滑動
    $(".desc_sections a.scroll").bind("click", function (event) {
      var targetScrollTop =
        $($(this).attr("href")).offset().top -
        headerHeight -
        descSectionHeight +
        1;
      $("html, body").stop().animate(
        {
          scrollTop: targetScrollTop,
        },
        300
      );
    });
    // 顯示當前產品說明
    $.each(desc_section_list, function (index, desc_section) {
      var desc_sectionTop =
        $(desc_section).offset().top - headerHeight - descSectionHeight - 1;
      var desc_sectionHeight = $(desc_section).height();
      var current_desc_section = $(
        "a.scroll[href$='" + $(desc_section).attr("id") + "']"
      );
      if (product_window.scrollTop() > desc_sectionTop || index === 0) {
        current_desc_section
          .stop()
          .addClass("active")
          .parent()
          .siblings()
          .find("a")
          .removeClass("active");
      } else {
        current_desc_section.removeClass("active");
      }
    });
  });

  function setSelectedVariant(variant) {
    selectedVariant = variant;
  }
});
