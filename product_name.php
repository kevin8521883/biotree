<?php
include('./data/product_list_data.php');
include('./data/product_data.php')
?>
<!DOCTYPE html>
<html lang="zh-tw" style="height:100%;">

<head>
  <?php include('./data/product_meta.php') ?>
  <script src="/js/gallery.js"></script>
  <script src="/js/product_name.js"></script>
  <link href='/assets/css/swiper_product.css' rel='stylesheet' type='text/css' media='all' />
  <link href='/assets/css/product.css' rel='stylesheet' type='text/css' media='all' />
</head>

<body style="display: flex; flex-direction: column;">
  <span class="drawer drawer--left">
    <!-- header -->
    <?php include('./components/header.php') ?>
    <!-- Sidebar -->
    <?php include('./components/Sidebar.php') ?>

  </span>
  <!-- template -->
  <div id="template" style="flex:1 0 auto;">
    <div id="site_path">
      <div class="container">
        <!-- 主題版型麵包屑 -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb-item
              " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <!-- home -->
              <a href="/" itemprop="item">
                <i class="fas fa-home"></i>
                <span style="display: none;" itemprop="name">首頁</span>
              </a>
              <!-- account -->
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item
              
              " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <!-- home -->
              <a href="/product/<?= $type ?>" itemprop='item'>
                <span itemprop='name'> <?php echo $type ?></span>
              </a>
              <!-- product -->
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumb-item
               active " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <!-- home -->
              <a href="/product_name/<?= $type ?>/<?= $product_list['url'] ?>" itemprop="item">
                <span itemprop="name"> <?= $product_list['name'] ?></span>
              </a>
              <!-- search -->
              <meta itemprop="position" content="3" />
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div id="product" class="product" data-cart_quantity_limit="1000">
      <div class="container">
        <!-- product info start -->
        <div class="product_info">
          <!-- product image start -->
          <div class="product_photos">

            <!-- 沒色票 -->
            <div class="swiper-container product_img_swiper">
              <ul class="swiper-wrapper">
                <?php foreach ($product_list['img'] as $key => $val) : ?>
                  <li class="swiper-slide product_photo img-flex">
                    <img data-src="<?= $val ?>" width="450" height="450" class="swiper-lazy">
                    <div class="swiper-lazy-preloader"></div>
                  </li>
                <?php endforeach; ?>
              </ul>
              <!-- Add Arrows -->
              <div class="swiper-button-next photo-swiper-next swiper-button"></div>
              <div class="swiper-button-prev photo-swiper-prev swiper-button"></div>
            </div>
            <!-- 圖片頁碼 -->
            <div class="thumb">
              <ul class="thumb-container">
                <?php foreach ($product_list['img'] as $key => $val) : ?>
                  <li class="img-flex ">
                    <img class="img-lazy" src="//cdn.cybassets.com/s/files/17478/theme/57267/assets/img/1630561498_6d53e927_img_loading.svg?1630561498" data-src="<?= $val ?>" width="50" hwight="50">
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div id="product_content" class="product_content">
            <!-- 標題 -->
            <div class="product_title">
              <!-- <h1>益生菌3盒</h1> -->
              <h1 class="font-weight-bold"><?php echo $product_list['name'] ?></h1>
            </div>
            <!-- 簡述 -->

            <div class="product_brief">
              <?php echo $product_list['content'] ?>
              <!-- 全方位守護寶貝健康<br>‧促進腸道蠕動<br>‧維持消化道健康<br>‧建立健康菌叢生態<br><br>※3盒88折 + (送) 大象口罩*1 (不累贈)<br><br> -->
            </div>

            <!-- 廠商,標語 -->
            <div class="product_vendor_slogan">


            </div>
            <!-- 商品售價 -->
            <div class="d-none">
              <?php if ($product_list['onsale']) : ?>
                <div class="product_price" id="price_title" data-discount-price-name="優惠售價" data-discount-price-suggestion-name="建議售價">
                  <!-- 價格title -->
                  <span class="title">優惠售價</span>
                  <!-- 商品價格 -->
                  <!--假如商品價格只有一種-->
                  <div class="price"><span class="money_tag">NT$ <?php echo $product_list['sale_price'] ?></span></div>
                  <del><span class="money_tag">NT$ <?php echo $product_list['price'] ?></span></del>
                </div>
              <?php else : ?>
                <div class="product_price" id="price_title">
                  <!-- 價格title -->
                  <span class="title">建議售價</span>
                  <!-- 商品價格 -->
                  <!--假如商品價格只有一種-->
                  <div class="price"><span class="money_tag">NT$ <?php echo $product_list['price'] ?></span></div>

                </div>
              <?php endif; ?>
            </div>
            <!-- 商品sku -->

            <!-- 供貨狀況 -->


            <!-- 商品款式 -->

            <!-- product discounts_list end -->

            <!-- 規格,數量 --

            <!-- 購買按鈕 -->
            <div class="product">
              <div class="product_btn buy_btn border ">
                <a type="button" class="btn btn-cart" href="https://biotree.com.tw/product/%E5%85%A8%E7%90%83%E7%8D%A8%E5%89%B5%E9%A6%99%E6%B0%9B%E9%A3%B2%E5%93%81" target="_blank">
                  <i class="fas fa-shopping-cart text-white"></i>
                  <span class="text text-white">點我立即購買</span>
                </a>
              </div>
            </div>
          </div>
          <!-- product content end -->
        </div>
        <!-- product info end -->

        <!-- product add buy -->




        <!-- product add buy end -->

        <!-- product description start -->
        <div class="product_description">
          <div class="desc_sections">
            <ul>
              <!-- 商品介紹 -->
              <li><a href="#desc_section_1" class="scroll active">
                  <div>商品介紹</div>
                </a></li>
              <!-- 規格說明 -->

              <li><a href="#desc_section_2" class="scroll">
                  <div>規格說明</div>
                </a></li>

              <!-- 運送方式 -->

              <li><a href="#desc_section_3" class="scroll">
                  <div>運送方式</div>
                </a></li>

              <!-- 票券注意事項 -->

              <!-- 加入購物車modal -->

              <li>
                <!-- <a id="add_to_cart" class="open_product_modal" data-id="37992717" data-handle="益生菌45入盒-3盒組" data-collection="205448">
                  <div>加入購物車</div>
                </a> -->
                <!-- <a id="message_to_buy" class="open_messagebuy_modal" data-toggle="modal" data-target="#messagebuy-Modal">
                  <div>聯絡店家</div>
                </a> -->
              </li>

            </ul>
          </div>
          <div class="desc_body">
            <div id="ckeditor">
              <div id="desc_section_1" class="desc_section">
                <h5 class="section-heading">商品介紹</h5>
                <div class="ckeditor">
                  <p> </p>
                  <!-- <div class="embed-responsive embed-responsive-16by9" style="text-align: center;"><iframe allowfullscreen="" class="embed-responsive-item" frameborder="0" src="//www.youtube.com/embed/kQerCIrdTE8?rel=0"></iframe></div> -->
                  <p> </p>
                  <!-- <div class="embed-responsive embed-responsive-16by9" style="text-align: center;"><iframe allowfullscreen="" class="embed-responsive-item" frameborder="0" src="//www.youtube.com/embed/HIwE8NiLcDM?rel=0"></iframe></div> -->
                  <p style="text-align: center;"> </p>
                  <!-- <p style="text-align:center"><img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_d3537e97-615c-4bcf-8a73-46ea0fe6e12b.png" width="800"></p>
                  <p style="text-align: center;">
                    <a href="https://www.bessielady.com.tw/products/%E5%96%AE%E7%9B%92%E7%9B%8A%E7%94%9F%E8%8F%8C45%E5%85%A5%E7%9B%92">
                      <img alt="" height="270" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_eee30a5c-cb4d-41a9-96af-52e6c537b24f.png" width="270">
                    </a>
                    <a href="https://www.bessielady.com.tw/products/%E7%9B%8A%E7%94%9F%E8%8F%8C45%E5%85%A5%E7%9B%92-2%E7%9B%92%E7%B5%84">
                      <img alt="" height="270" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_a8e06bc3-3ca1-4c4e-b42c-9686babca53c.png" width="270">
                    </a>
                    <a href="https://www.bessielady.com.tw/products/%E7%9B%8A%E7%94%9F%E8%8F%8C45%E5%85%A5%E7%9B%92-6%E7%9B%92%E7%B5%84">
                      <img alt="" height="270" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_7a41d913-9a24-47cd-bad5-60b3c1ba3fe3.png" width="270">
                    </a>
                  </p> -->
                  <p style="text-align: center;">
                    <?php foreach ($product_list['product_img'] as $key => $val) : ?>
                      <!-- <li class="swiper-slide product_photo img-flex"> -->
                      <!-- <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_fe0ca69a-b370-4459-a3a2-12daba1e1f82.png"> -->
                      <picture>
                        <source srcset="<?= $val ?>" type="image/webp">
                        <img src="<?= $val ?>" width="800">
                      </picture>
                      <!-- <div class="swiper-lazy-preloader"></div> -->
                      <!-- </li> -->
                    <?php endforeach; ?>
                    <!-- <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_fde22a06-850f-4301-bee6-400ccb5ab373.png">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_fe0ca69a-b370-4459-a3a2-12daba1e1f82.png">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_069824da-bc82-4e6e-a15c-8b700c534672.png">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_c8d9bdcb-d28b-4513-9f7d-d7528b6560a2.png">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_8cf08913-1aa0-4af7-9288-567acc11210b.png" width="800">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_0ee821fe-aee3-4b62-8f03-bf1039150c54.png" width="800">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_e26090b1-8767-4670-a74b-0c4b81c99d30.png">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_6b886292-ca87-44ce-bbf7-063688f5a374.png" width="800">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_20618a31-971a-49d7-aa06-668cfc84dcb0.png" width="800">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_22595279-83b2-40e9-b661-97b141d5d59c.png" width="800">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_68dbb8ac-c7c6-4d0e-a214-99e35a3ff4ba.png">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_bf0c0b52-1e49-40ad-8f50-19f79f56f987.png">
                    <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_cb6b4dc1-545a-4487-9cce-5b0da00dc25c.png" width="800">
                    <a href="http://www.facebook.com/niusbaby">
                      <img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_55a4a0bb-b5f0-4d16-8c11-bfcfd904ee09.png">
                    </a> -->
                  </p>
                </div>
              </div>
              <div id="desc_section_2" class="desc_section">
                <h5 class="section-heading font-weight-bold">規格說明</h5>
                <div class="ckeditor">
                  <p><span style="font-size:18px"><strong><?php echo $product_list['format'] ?></strong></span></p>
                </div>
              </div>
              <div id="desc_section_3" class="desc_section">
                <h5 class="section-heading font-weight-bold">運送方式</h5>
                <div class="ckeditor">
                  <p>
                    <span class="font-weight-bold" style="font-size:18px">
                      <strong>
                        台灣本島宅配 - 貨到付款︱信用卡︱ATM繳費<br>
                        離島宅配－貨到付款︱信用卡︱ATM繳費<br>
                        海外宅配－信用卡︱ATM繳費<br>
                        全家超商－信用卡︱超商取貨付款︱ATM繳費
                      </strong>
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- product description end -->
      </div>
    </div>
    <?php if (count($type_list) > 1) : ?>
      <!-- related products start -->
      <div id="related-products">
        <div class="container">
          <h5 class="section-heading font-weight-bold">相關商品</h5>
          <div id="swiper_products" class="relative">
            <div class="swiper-container swiper_products GTM-area">
              <div class="swiper-wrapper">
                <?php foreach ($type_list as $key => $val) : ?>
                  <div class="swiper-slide product">
                    <div class="product_image">
                      <a class="productClick img-flex GTM-info" href="<?= $val['url'] ?>" itemprop="item">
                        <img data-src="<?= $val['img'] ?>" alt="product_image" width="250" height="250" class="swiper-lazy">
                        <div class="swiper-lazy-preloader-white"></div>
                      </a>
                    </div>
                    <div class="product_title font-weight-bold">
                      <a href="<?= $val['url'] ?>" itemprop="item"><?= $val['name'] ?></a>
                    </div>
                    <div class="product_price d-none"><span class="money_tag">NT$<?= $val['price'] ?></span></div>
                    <div class="product_btn mt-2">
                      <a type="button" class="btn btn-cart" href="https://biotree.com.tw/product/%E5%85%A8%E7%90%83%E7%8D%A8%E5%89%B5%E9%A6%99%E6%B0%9B%E9%A3%B2%E5%93%81" target="_blank">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="text">點我立即購買</span>
                      </a>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-next swiper-products-next"></div>
            <div class="swiper-button-prev swiper-products-prev"></div>
          </div>
        </div>
      </div>
      <!-- related products end -->
    <?php endif; ?>

    <script id="photo-swiper" type="text/x-template">
      <swiper ref="photoSwiper" class="photos" :options="swiperOption">
    <swiper-slide v-if="hasImage" class="photo" v-for="(photo, index) in photos" :key="index">
      <img key="index" :src="photo.large" alt="image"/>
    </swiper-slide>
    <swiper-slide v-if="!hasImage" class="photo">
      <img src="/assets/no-image-large.png" alt="image">
    </swiper-slide>
    <div v-if="hasImage" class="photo-button photo-prev" slot="button-prev"></div>
    <div v-if="hasImage" class="photo-button photo-next" slot="button-next"></div>
      </swiper>
    </script>
    <div id="img"></div>
  </div>

  <!-- Footer -->
  <?php include './components/footer.php' ?>
  <!-- gototop -->
  <div id="gototop">
    <a href="javascript:void(0)">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>
</body>

</html>
<style>
  .buy_btn {
    display: flex;
    justify-content: center;
    padding: 5px;
    background-color: #624D4A;
    cursor: pointer;
    transition: all 0.3s;
    border-radius: 3px;
  }

  .buy_btn:hover {
    background-color: #482F2C
  }
</style>