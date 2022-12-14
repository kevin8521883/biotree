<!DOCTYPE html>
<html lang="zh-tw" style="height:100%;">

<head>
  <?php
  $meta_type = '首頁';
  include('./data/meta.php')
  ?>
  <link href='./assets/css/index.css' rel='stylesheet' type='text/css' media='all' />
  <script src="/js/index.js"></script>
</head>

<body style="display: flex; flex-direction: column;">
  <!-- Navigation -->
  <span class="drawer drawer--left">
    <!-- header -->
    <?php include("./components/header.php") ?>
    <!-- Sidebar -->
    <?php include('./components/Sidebar.php') ?>
  </span>
  <!-- template -->
  <div id="template" style="flex:1 0 auto;">
    <div id="index">
      <div id="main_slider">
        <div class="swiper-container main_slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="/product/全部商品">
                <!-- <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/slider_item_1.webp" type="image/webp" width="1920" title="" alt="" class="swiper-lazy hidden-md">
                  <img data-src="/assets/images/index/slider_item_1.png" width="1920" title="" alt="" class="swiper-lazy hidden-md">
                </picture>
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/slider_item_1.webp" type="image/webp" width="992" title="" alt="" class="swiper-lazy visible-md hidden-xs">
                  <img data-src="/assets/images/index/slider_item_1.png" width="992" title="" alt="" class="swiper-lazy visible-md hidden-xs">
                </picture>
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/slider_item_1.webp" type="image/webp" width="576" title="" alt="" class="swiper-lazy visible-xs">
                  <img data-src="/assets/images/index/slider_item_1.png" width="576" title="" alt="" class="swiper-lazy visible-xs">
                </picture> -->
                <img data-src="/assets/images/index/slider_item_1.png" width="1920" title="" alt="" class="swiper-lazy hidden-md">
                <img data-src="/assets/images/index/slider_item_1.png" width="992" title="" alt="" class="swiper-lazy visible-md hidden-xs">
                <img data-src="/assets/images/index/phone/banner.png" width="576" title="" alt="" class="swiper-lazy visible-xs">
              </a>
              <div class="swiper-lazy-preloader"></div>
            </div>
          </div>
          <!-- <div class="swiper-pagination main_slider_pagination"></div>
          <div class="swiper-button-next main_slider_next"></div>
          <div class="swiper-button-prev main_slider_prev"></div> -->
        </div>
      </div>

      <div id="index_block">
        <div class="container">
          <div class="row">
            <div class="col-6 item">
              <a href="/product_name/晶明清晰/晶晶Plus葉黃素凍">
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/banner_block_1.webp" type="image/webp" width="100" h="50">
                  <img class="index_block_img img-lazy" src="/assets/images/img_loading.svg" data-src="/assets/images/index/banner_block_1.png" width="100" h="50">
                </picture>
              </a>
            </div>
            <div class="col-6 item">
              <a href="/product_name/仕女保養/波波G">
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/banner_block_2.webp" type="image/webp" width="100" h="50">
                  <img class="index_block_img img-lazy" src="/assets/images/img_loading.svg" data-src="/assets/images/index/banner_block_2.png" width="100" h="50">
                </picture>
              </a>
            </div>
            <div class="col-6 item">
              <a href="/product_name/仕女保養/冰晶雪草飲">
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/banner_block_3.webp" type="image/webp" width="100" h="50">
                  <img class="index_block_img img-lazy" src="/assets/images/img_loading.svg" data-src="/assets/images/index/banner_block_3.png" width="100" h="50">
                </picture>
              </a>
            </div>
            <div class="col-6 item">
              <a href="/product_name/能量代謝/好輕鬆-女神蔬果酵素">
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/banner_block_4.webp" type="image/webp" width="100" h="50">
                  <img class="index_block_img img-lazy" src="/assets/images/img_loading.svg" data-src="/assets/images/index/banner_block_4.png" width="100" h="50">
                </picture>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="index_banner">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="index_banner">
        <div class="container">
          <div class="row">
            <div class="col-12 item">
              <a href="/product/能量代謝">
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/banner_item_1.webp" type="image/webp" width="100" h="30">
                  <img class="index_block_img img-lazy" src="/assets/images/img_loading.svg" data-src="/assets/images/index/banner_item_1.png" width="100" h="30">
                </picture>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="index_banner">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="index_banner">
        <div class="container">
          <div class="row">
            <div class="col-12 item">
              <a href="#">
                <picture>
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/banner_item_2.webp" type="image/webp" width="100" h="30">
                  <img class="index_block_img img-lazy" src="/assets/images/img_loading.svg" data-src="/assets/images/index/banner_item_2.png" width="100" h="30">
                </picture>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="index_banner">
        <div class="container">
          <div class="row">
            <div class="col-12 item">
              <div class="product_item">
                <div class="product_item_header d-flex justify-content-between align-items-center">
                  <div class="item_title">品牌代言人</div>
                  <div class="item_content">
                    <span></span>
                  </div>
                </div>
                <hr>
              </div>
              <a href="#">
                <picture class="hidden-xs">
                  <source srcset="/assets/images/img_loading.svg" data-srcset="/assets/images/index/banner_item_3.webp" type="image/webp" width="100" h="30">
                  <img class="index_block_img img-lazy" src="/assets/images/img_loading.svg" data-src="/assets/images/index/banner_item_3.png" width="100" h="30">
                </picture>
                <img class="index_block_img img-lazy visible-xs" src="/assets/images/img_loading.svg" data-src="/assets/images/index/phone/營養師.png" width="100" h="30">
                <img class="index_block_img img-lazy visible-xs" src="/assets/images/img_loading.svg" data-src="/assets/images/index/phone/門市資訊.png" width="100" h="30">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="full_banner">
      </div>
      <!-- for _product_item -->
    </div>
  </div>

  <!-- Footer -->
  <?php include './components/footer.php' ?>

  <!-- Fast-Events -->


  <!-- gototop -->
  <div id="gototop">
    <a href="javascript:void(0)">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>
  <!-- ajaxloading -->
</body>

</html>