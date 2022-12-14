<!DOCTYPE html>
<html lang="zh-tw" style="height:100%;">

<head>
  <?php
  $meta_type = '訂購相關';
  include('./data/meta.php') ?>
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
              <a href="/order" itemprop="item">
                <span itemprop="name">訂購相關</span>
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
      <div class="container" style="display:none ;">
        <div id="ckeditor" class="page_content">
          <span class="ckeditor">
            <p style="text-align: center;"><img alt="" src="//cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_0ebc85cc-2c14-4689-9c28-58523dccd69a.png" /></p>
          </span>
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