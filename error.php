<!DOCTYPE html>
<html lang="zh-tw" style="height:100%;">

<head>
  <?php
  $meta_type = '錯誤頁面';
  include('./data/meta.php');
  ?>
</head>

<body style="display: flex; flex-direction: column;">
  <!-- Navigation -->
  <span class="drawer drawer--left" style="display: flex; flex-direction: column; min-height:100vh">
    <!-- header -->
    <?php include('./components/header.php') ?>
    <!-- Sidebar -->
    <div class="main-error">
      <div id="404page">
        <div class="container">
          <div class="error_img">
            <a href="javascript:void(0)" class="img-flex">
              <img src="//cdn.cybassets.com/s/files/17478/theme/57267/assets/img/1630561497_16c5a6ca_404_img.png?1630561497" alt="" style="height: auto; width: auto; opacity: 1;">
            </a>
          </div>
          <div class="error_msg text-center">
            <h1>抱歉，此頁面不存在或者已經被移除。</h1>
            <a href="/" class="btn">返回店鋪首頁</a>
          </div>
        </div>
      </div>
    </div>
    <?php include('./components/Sidebar.php') ?>
    <?php include './components/footer.php' ?>
  </span>
  <!-- template -->
  <!-- gototop -->
  <div id="gototop">
    <a href="javascript:void(0)">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>
</body>

</html>
<style>
  .body-padding-none {
    padding: 0 !important;
  }

  .main-error {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    flex: 1;
  }

  .main-error a {
    font-weight: bold;
  }
</style>