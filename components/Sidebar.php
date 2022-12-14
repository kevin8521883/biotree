<nav class="drawer-nav" role="navigation">
  <div class="drawer-menu">
    <ul id="index_sidebar_shelf_top" class="sidebar">
      <li class="logo">
        <a href="/">
          <img src="/assets/images/web_logo.png" height="50" width="auto" alt="logo">
        </a>
        <button class="drawer-toggle"></button>
      </li>
      <li><a href="/">關於我們</a></li>
      <!-- <li><a href="/product/能量代謝">產品分類</a></li> -->
      <li>
        <button class="linklist bt-toggle  collapsed " data-toggle="collapse" data-target=".collapse_index_sidebar_8" aria-expanded=" false ">
          產品分類
        </button>
        <ul id="index_sidebar_shelf_second_8" class="collapse_index_sidebar_8 collapse shelf_second ">
          <li><a href="/product/全部商品">全部商品</a></li>
          <li><a href="/product/能量代謝">能量代謝</a></li>
          <li><a href="/product/嘴饞點心">嘴饞點心</a></li>
          <li><a href="/product/仕女保養">仕女保養</a></li>
          <li><a href="/product/晶明清晰">晶明清晰</a></li>
          <li><a href="/product/好眠舒適">好眠舒適</a></li>
          <!-- <li><a href="/product/海外專區">海外專區</a></li> -->
        </ul>
      </li>
      <li><a href="/discount">優惠專區</a></li>
      <li><a href="/order">訂購相關</a></li>
      <li><a href="/question">常見問題</a></li>
      <li><a href="/article_list">健康專欄</a></li>
      <!-- <li>
        <button class="linklist bt-toggle  collapsed " data-toggle="collapse" data-target=".collapse_index_sidebar_8" aria-expanded=" false ">
          旗下直播台
        </button>
        <ul id="index_sidebar_shelf_second_8" class="collapse_index_sidebar_8 collapse shelf_second ">
          <li><a href="/about-us">嘿 我是tammy</a></li>
          <li><a href="/about-us">海倫愛彩罐</a></li>
        </ul>
      </li> -->
      <li><a href="/bmi">健康計算機</a></li>
      <!-- <li><a href="/about-us">雙11購物節</a></li> -->
      <!-- <li><a href="/about-us">得獎名單</a></li> -->
      <!-- <li>
        <div class="customer-logined-menu" style="display: none">
          <a href="/account/logout" class="btn-logout">
            <span>會員登出</span>
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </div>
        <div class="customer-not-login-menu">
          <a href="/account/login" class="btn-login">
            <span>登入/註冊</span>
            <i class="fas fa-sign-in-alt"></i>
          </a>
        </div>
      </li> -->
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
</nav>