// 捲動消失
function scrollFade(element, scrollTop) {
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > scrollTop) {
      element.stop().fadeIn(300);
    } else {
      element.stop().fadeOut(300);
    }
  });
}
$(document).ready(function () {
  // 移除resize.drawer 防止手機版閃退
  $(window).off("resize.drawer");
  // 重置購物車
  // refreshNavCart()
  // 關閉搜尋下拉選單
  $(".close-dropdown").click(function (e) {
    $(".dropdown.open .dropdown-toggle").dropdown("toggle");
  });
  // template padding
  var headerHeight = $("#header").outerHeight();
  var windowHeight = $(window).height();
  $("body").css({
    "padding-top": headerHeight + "px",
  });
  // 有在圖片attr上寫height,width，所以要改回來
  $(".img-flex img").css({ height: "auto", width: "auto", opacity: "1" });
  // gototop
  scrollFade($("#gototop"), $(window).height());
  $("#gototop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 300);
  });

  var headerHeight;
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 0 && $(window).width() > 991) {
      $("#header .logo").stop().addClass("scrolled");
    } else {
      $("#header .logo").stop().removeClass("scrolled");
      headerHeight = $("#header").outerHeight();
    }
  });
  $(window).resize(function () {
    $("body").css({
      "padding-top": $("#header").outerHeight() + "px",
    });
  });
  // $("body").css({
  //   "padding-top": headerHeight + "px",
  // });
});
