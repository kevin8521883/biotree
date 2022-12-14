<?php
// $meta_type = '能量代謝';
// echo $meta_type;
if (isset($_GET['type'])) {
  $meta_type = $_GET['type'];
} else {
  // $meta_type = '錯誤頁面';
}
$meta_list = [
  '首頁' => [
    'title' => '歡迎光臨 寶皙萃 Biotree',
    'url' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'description' => '寶皙萃 Biotree 超孅XS、好輕鬆酵素、輕卡餐、沉醉香氛淬、冰晶雪草飲、波波G、晶晶Plus葉黃素凍',
    'image' => 'http://biotree.cfd888.info/assets/images/web_logo.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '健康計算機' => [
    'title' => '健康計算機 寶皙萃 Biotree',
    'url' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'description' => '寶皙萃 Biotree 健康計算機 BMI計算、基礎代謝率 (BMR) 計算機、飲食分配',
    'image' => 'http://biotree.cfd888.info/assets/images/web_logo.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '關於我們' => [
    'title' => '關於我們 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/',
    'description' => '關於我們',
    'image' => 'http://biotree.cfd888.info/assets/images/web_logo.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '優惠專區' => [
    'title' => '優惠專區 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/discount',
    'description' => '優惠專區',
    'image' => 'http://biotree.cfd888.info/assets/images/web_logo.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '訂購相關' => [
    'title' => '訂購相關 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/order',
    'description' => '訂購相關',
    'image' => 'http://biotree.cfd888.info/assets/images/web_logo.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '常見問題' => [
    'title' => '常見問題 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/question',
    'description' => '常見問題',
    'image' => 'http://biotree.cfd888.info/assets/images/web_logo.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '健康專欄' => [
    'title' => '健康專欄 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/article_list',
    'description' => '健康專欄',
    'image' => 'https://biotree.com.tw/img/article_list/top_l.jpg',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '專欄內容' => [
    'title' => '專欄內容 寶皙萃 Biotree',
    'url' => $ogurl,
    'description' => $article['title'],
    'image' => $article['fb_img'],
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '全部商品' => [
    'title' => '全部商品 | 寶皙萃 Biotree',
    'url' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'description' => '寶皙萃 Biotree 超孅XS、好輕鬆酵素、輕卡餐、沉醉香氛淬、冰晶雪草飲、波波G、晶晶Plus葉黃素凍',
    'image' => 'https://biotree.cfd888.info/assets/images/index/banner_item_1.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '能量代謝' => [
    'title' => '能量代謝 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product/能量代謝',
    'description' => '寶皙萃 Biotree 超孅XS、好輕鬆酵素、輕卡餐',
    'image' => 'https://biotree.cfd888.info/assets/images/index/banner_item_1.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '嘴饞點心' => [
    'title' => '嘴饞點心 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product/嘴饞點心',
    'description' => '寶皙萃 Biotree 輕卡餐',
    'image' => 'https://biotree.cfd888.info/assets/images/index/banner_item_1.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '仕女保養' => [
    'title' => '仕女保養 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product/仕女保養',
    'description' => '寶皙萃 Biotree 沉醉香氛淬、冰晶雪草飲、波波G',
    'image' => 'https://biotree.cfd888.info/assets/images/index/banner_item_1.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '晶明清晰' => [
    'title' => '晶明清晰 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product/晶明清晰',
    'description' => '寶皙萃 Biotree 晶晶Plus葉黃素凍',
    'image' => 'https://biotree.cfd888.info/assets/images/index/banner_item_1.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '好眠舒適' => [
    'title' => '好眠舒適 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product/好眠舒適',
    'description' => '寶皙萃 Biotree 沉醉香氛淬',
    'image' => 'https://biotree.cfd888.info/assets/images/index/banner_item_1.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  // '海外專區' => [
  //   'title' => '海外專區 | 寶皙萃 Biotree',
  //   'url' => 'https://biotree.cfd888.info/product/海外專區',
  //   'description' => '海外專區',
  //   'image' => 'https://cdn.cybassets.com/s/files/17478/ckeditor/pictures/content_9bc25dea-46ce-4367-88f8-010c8b7db826.png',
  //   'site_name' => '寶皙萃 Biotreeonline'
  // ],
  '錯誤頁面' => [
    'title' => '404 頁面不存在 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/error',
    'description' => '404 頁面不存在 寶皙萃 Biotree',
    'image' => 'http://biotree.cfd888.info/assets/images/web_logo.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
];

if (isset($meta_list[$meta_type])) {
  $meta_list = $meta_list[$meta_type];
} else {
  // echo '2123';
  $meta_list = $meta_list['錯誤頁面'];
  // include('./error.php');
  // exit;
}
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="<?php echo $meta_list['title'] ?>">
<meta name="description" content="<?php echo $meta_list['description'] ?>">

<!-- og tag -->

<meta property="og:title" content="<?php echo $meta_list['title'] ?>" />
<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
<meta property="og:type" content="product.group" />
<meta property="og:description" content="<?php echo $meta_list['description'] ?>" />
<meta property="og:site_name" content="<?php echo $meta_list['site_name'] ?>" />

<!-- og image -->

<meta property="og:image" content="<?php echo $meta_list['image'] ?>" />


<title>
  <?php echo $meta_list['title'] ?>
</title>
<link rel="shortcut icon" href="/assets/images/web_logo.png" type="image/x-icon" />
<link href='/assets/css/all.css' rel='stylesheet' type='text/css' media='all' />

<script src='/js/vendor.js' type='text/javascript'></script>
<script src='/js/sub_vendor.js' type='text/javascript'></script>
<script src='/js/main.js' type='text/javascript'></script>
<script src='/js/theme.js' type='text/javascript'></script>