<!DOCTYPE html>
<html lang="zh-tw" style="height:100%;">

<head>
  <?php
  $meta_type = '健康專欄';
  include('./data/meta.php') ?>
  <link rel="stylesheet" href="./assets/css/blue.css">
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
               active " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <!-- home -->
              <a href="/health-column" itemprop="item">
                <span itemprop="name">健康專欄</span>
              </a>
              <!-- product's collections -->
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div id="page" style="flex-direction:column; min-height:50vh">
      <!-- page content start -->
      <img alt="" src="https://biotree.com.tw/img/article_list/top_l.jpg" class="img-fluid" />
      <div class="container">
        <!-- <div id="ckeditor" class="page_content">
        </div> -->
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="blog__wrapper">
              <div class="blog__item blog__border-bottom mb-40 pb-40">
                <div class="blog__thumb fix">
                  <a href="/article/4" class="w-img"><img src="https://biotree.com.tw/img/html/f1/n4/f.jpg" alt="blog" class="img-fluid"></a>
                </div>
                <div class="blog__content">
                  <h4 class="text-dark">
                    <a href="/article/4">不再被騙！你需要的嫩白保養攻略（上）</a>
                  </h4>
                  <div class="blog__meta">
                    <span>2021-08-27</span>
                  </div>
                  <p>美白容易嗎？如果容易你就不會繳那麼多學費、買這麼多無效的產品，到現在連些微改善都沒有！</p>
                  <a href="/article/4" class="os-btn">閱讀更多</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">2</div>
          <div class="col-xl-4 col-lg-4 col-md-6">3</div>
        </div>
      </div>
      <!-- page content end -->
    </div>
  </div>

  <!-- Footer -->
  <?php include('./components/footer.php') ?>
  <!-- gototop -->
  <div id="gototop">
    <a href="javascript:void(0)">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>
</body>

</html>