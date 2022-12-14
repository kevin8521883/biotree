<!DOCTYPE html>
<html lang="zh-tw" style="height:100%;">

<head>
  <?php include('./data/meta.php') ?>
  <link href='/assets/css/collection.css' rel='stylesheet' type='text/css' media='all' />
  <script src="/js/product.js"></script>
</head>

<body style="display: flex; flex-direction: column;">
  <?php include('./data/product_list_data.php');
  // include('./data/meta.php') 
  ?>
  <span class="drawer drawer--left">
    <!-- header -->
    <?php include './components/header.php' ?>
    <!-- Sidebar -->
    <?php include './components/Sidebar.php' ?>
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
               active " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <!-- home -->
              <a href="/product/<?php echo $type ?>" itemprop="item">
                <span itemprop="name">
                  <?php echo $type ?></span>
              </a>
              <!-- bundle discount -->
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div id="collection">
      <div class="container">
        <div class="row">
          <!-- 群組簡述 start -->
          <div class="col-md-12">
            <div id="ckeditor" class="collection_description">
              <span class="ckeditor">
                <p>
                  <picture>
                    <!-- <source srcset="<?php echo $meta_list['webp'] ?>" type="image/webp"> -->
                    <img alt="" src="<?php echo $meta_list['image'] ?>" />
                  </picture>
                </p>
              </span>
            </div>
          </div>
          <!-- 群組簡述 end -->

          <!-- 一般群組頁 -->
          <!-- 側邊列表 start -->
          <?php include './components/product_Sidebar.php' ?>

          <!-- 側邊列表 end -->
          <!-- 群組商品 start -->
          <div class="col-lg-9 col-sm-12 collection_products square_prods">

            <!-- 色票不展開 -->
            <div class="collection_title clear-fix">
              <!-- <h1 class="section-heading">益生菌專區</h1> -->
              <h1 class="section-heading font-weight-bold"><?php echo $type ?></h1>
              <div class="products_setting">
                <select class="product-sort-by" name="" id="" v-model="sortBy" @change="onSort($event)">
                  <option value="">預設排序</option>
                  <option value="sort-by-price-desc">價格由高到低</option>
                  <option value="sort-by-price-asc">價格由低到高</option>
                  <option value="sort-by-sell-from-asc">上市日期舊到新</option>
                  <option value="sort-by-sell-from-desc">上市日期新到舊</option>
                  <option value="sort-by-recent-days-sold-desc">本週熱賣</option>
                </select>
                <script>
                  $(document).ready(function() {
                    $.urlParam = function(name) {
                      var results = new RegExp(name + '(-[^&#]*)').exec(window.location.href);
                      if (results == null) {
                        return null;
                      }
                      return decodeURI(results[0]) || '';
                    }
                    // $.newUrl = function(url, paramName, paramValue) {
                    //   if (paramValue == null) {
                    //     paramValue = '';
                    //   }
                    //   var pattern = new RegExp('\\b(' + paramName + '=).*?(&|#|$)');
                    //   if (url.search(pattern) >= 0) {
                    //     return url.replace(pattern, '$1' + paramValue + '$2');
                    //   }
                    //   url = url.replace(/[?#]$/, '');
                    //   return url + (url.indexOf('?') > 0 ? '&' : '?') + paramName + '=' + paramValue;
                    // }
                    $('.product-sort-by').val($.urlParam('sort-by'));
                    $('.product-sort-by').change(function(e) {
                      window.location.replace(e.target.value ? '/product/<?php echo $type ?>/' + e.target.value : '/product/<?php echo $type ?>');
                    })
                  })
                </script>
                <div class="products_info">
                  <p>共 <?php echo count($type_list) ?>件商品</p>
                  <div class="btn-group product_layout" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary square_prods" value="square_prods"><i class="fas fa-th-large"></i></button>
                    <button type="button" class="btn btn-secondary line_prods" value="line_prods"><i class="fas fa-list"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- <a href="<?= $val['url'] ?>" target="_blank">
                <img src="<?= $val['img'] ?>">
                <div><?= $val['name'] ?></div>
                <div><?= $val['price'] ?></div>
              </a> -->
            <div class="products_content">
              <?php if (!count($type_list)) : ?>
                <h2>暫無商品</h2>
              <?php endif; ?>
              <?php foreach ($type_list as $key => $val) : ?>
                <div class="product product_tag">
                  <?php if ($val['onsale']) : ?>
                    <div class="onsale" style="background-image: url('//cdn.cybassets.com/s/files/17478/theme/57267/assets/img/1630561496_e5d780d4_onsale_icon.png?1630561496');"></div>
                  <?php endif; ?>
                  <div class="product_image">
                    <a class="productClick img-flex" href="<?= $val['url'] ?>">
                      <picture>
                        <source srcset="<?= $val['webp'] ?>" type="image/webp" width="250" height="250">
                        <img class="img-lazy" src="//cdn.cybassets.com/s/files/17478/theme/57267/assets/img/1630561498_6d53e927_img_loading.svg?1630561498" data-src="<?= $val['img'] ?>" alt="product_image" width="250" height="250">
                      </picture>
                    </a>
                  </div>
                  <div class="product_title font-weight-bold mb-2">
                    <a class="productClick" href="<?= $val['url'] ?>">
                      <?= $val['name'] ?>
                    </a>
                  </div>
                  <div class="product_brief">
                    <?= $val['content'] ?>
                  </div>
                  <div class="product_price d-none" >
                    <?php if ($val['onsale']) : ?>
                      <span class="price"><span class="money_tag" data-currency-from="TWD">NT$<?= $val['sale_price'] ?></span></span>
                      <del class="compare_at_price"><span class="money_tag" data-currency-from="TWD">NT$<?= $val['price'] ?></span></del>
                    <?php else : ?>
                      <span class="price"><span class="money_tag" data-currency-from="TWD">NT$<?= $val['price'] ?></span></span>
                    <?php endif; ?>
                  </div>
                  <div class="product_btn">
                    <div class="product_link">
                      <a class="btn productClick" href="<?= $val['url'] ?>">
                        <i class="fas fa-search"></i>
                        <span class="text">查看商品</span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="pagination-container">
              <nav aria-label="Page navigation example">
              </nav>
            </div>
          </div>
          <!-- 群組商品 end -->
        </div>
      </div>
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