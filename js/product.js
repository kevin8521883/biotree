$(document).ready(function () {
  // 變更商品樣式
  $("#collection .product_layout button").click(function (e) {
    $(".collection_products")
      .removeClass("line_prods")
      .removeClass("square_prods")
      .addClass($(this).val());
    Cookies.set("product_layout", $(this).val(), {
      expires: 1,
    });
  });
  // 依照cookie顯示商品樣式
  if (Cookies.get("product_layout") == "line_prods") {
    $(".collection_products")
      .removeClass("square_prods")
      .addClass("line_prods");
  } else if (Cookies.get("product_layout") == "square_prods") {
    $(".collection_products")
      .removeClass("line_prods")
      .addClass("square_prods");
  }
});
