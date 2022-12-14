<div class="col-md-3 hidden-md">
  <ul id="collection_menu_shelf_top" class="sidebar">
    <li><a href="/product/全部商品">全部商品</a></li>
    <li><a href="/product/能量代謝">能量代謝</a></li>
    <li><a href="/product/嘴饞點心">嘴饞點心</a></li>
    <li><a href="/product/仕女保養">仕女保養</a></li>
    <li><a href="/product/晶明清晰">晶明清晰</a></li>
    <li><a href="/product/好眠舒適">好眠舒適</a></li>
    <!-- <li><a href="/product/海外專區">海外專區</a></li> -->
    <!-- <li>
      <button class="linklist bt-toggle  collapsed " data-toggle="collapse" data-target=".collapse_collection_menu_8" aria-expanded=" false ">
        旗下直播台
      </button>
      <ul id="collection_menu_shelf_second_8" class="collapse_collection_menu_8 collapse shelf_second ">
        <li><a href="/about-us">嘿 我是tammy</a></li>
        <li><a href="/about-us">海倫愛彩罐</a></li>
      </ul>
    </li> -->
    <!-- <li><a href="/bmi">健康計算機</a></li> -->
    <!-- <li><a href="/about-us">雙11購物節</a></li> -->
    <!-- <li><a href="/about-us">得獎名單</a></li> -->
  </ul>
  <script>
    $(document).ready(function() {
      // 側邊選單
      if ($('.drawer').length) {
        $('.drawer').drawer();
        $('.bt-toggle').click(function() {
          setTimeout(function() {
            $('.drawer').drawer('refresh')
          }, 500)
        })
      }
    });
  </script>
</div>