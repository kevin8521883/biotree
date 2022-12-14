<?php
// $meta_type = '益生菌專區';
// echo $meta_type;
if (isset($_GET['product'])) {
  $meta_type = $_GET['product'];
} else {
  // $meta_type = '錯誤頁面';
}
$meta_list = [
  '超孅XS' => [
    'title' => '超孅XS | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/能量代謝/超孅XS',
    'description' => '全方位守護寶貝健康‧促進腸道蠕動‧維持消化道健康‧建立健康菌叢生態※單盒益生菌45入/盒  + (送)大象口罩*1(不累贈)※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/超孅XS.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '好輕鬆-女神蔬果酵素' => [
    'title' => '好輕鬆-女神蔬果酵素 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/能量代謝/好輕鬆-女神蔬果酵素',
    'description' => "全方位守護寶貝健康‧促進腸道蠕動‧維持消化道健康‧建立健康菌叢生態※2盒95折 + (送) 大象口罩*1 (不累贈)※下單後，7-10個工作天依序安排寄出(不含假日)",
    'image' => 'http://biotree.cfd888.info/assets/images/product/好輕鬆.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '輕卡-可可' => [
    'title' => '樂孅機能輕卡餐 | 濃醇可可 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/能量代謝/輕卡-可可',
    'description' => '嚴選魚膠原蛋白和珍稀燕窩精萃，吃出超強美顏力。180g / 瓶※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/輕卡-可可.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '輕卡-抹茶' => [
    'title' => '樂孅機能輕卡餐 | 御前抹茶 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/能量代謝/輕卡-抹茶',
    'description' => '嚴選魚膠原蛋白和珍稀燕窩精萃，吃出超強美顏力。180g / 瓶※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/輕卡-抹茶.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '輕卡-紅茶拿鐵' => [
    'title' => '樂孅機能輕卡餐 | 醇厚紅茶拿鐵 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/能量代謝/輕卡-紅茶拿鐵',
    'description' => '嚴選魚膠原蛋白和珍稀燕窩精萃，吃出超強美顏力。180g / 瓶※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/輕卡-紅茶拿鐵.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '輕卡-法式濃湯' => [
    'title' => '樂孅機能輕卡餐 | 私廚法式濃湯 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/能量代謝/輕卡-法式濃湯',
    'description' => '嚴選魚膠原蛋白和珍稀燕窩精萃，吃出超強美顏力。180g / 瓶※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/輕卡-法式濃湯.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '輕卡-鐵觀音' => [
    'title' => '樂孅機能輕卡餐 | 炭焙鐵觀音拿鐵 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/能量代謝/輕卡-鐵觀音',
    'description' => '嚴選魚膠原蛋白和珍稀燕窩精萃，吃出超強美顏力。180g / 瓶※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/輕卡-鐵觀音.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '沉醉香氛淬' => [
    'title' => '沉醉香氛淬 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/仕女保養/沉醉香氛淬',
    'description' => '媲美沙龍頂級髮膜，受損髮專用熱銷NO.1※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/沉醉.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '冰晶雪草飲' => [
    'title' => '冰晶雪草飲 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/仕女保養/冰晶雪草飲',
    'description' => '回歸零負擔的健康本質，清爽亮白不乾澀※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/冰晶雪草飲.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '晶晶Plus葉黃素凍' => [
    'title' => '晶晶Plus葉黃素凍 | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/晶明清晰/晶晶Plus葉黃素凍',
    'description' => '加倍舒適 晶瑩透亮60顆/袋※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/晶晶凍.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
  '波波G' => [
    'title' => '波波G | 寶皙萃 Biotree',
    'url' => 'https://biotree.cfd888.info/product_name/仕女保養/波波G',
    'description' => '加倍舒適 晶瑩透亮60顆/袋※下單後，7-10個工作天依序安排寄出(不含假日)',
    'image' => 'http://biotree.cfd888.info/assets/images/product/波波G.png',
    'site_name' => '寶皙萃 Biotreeonline'
  ],
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
  $meta_list = $meta_list['錯誤頁面'];
  // include('../error.php');
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
<script src='/js/theme_helper.js' type='text/javascript'></script>
<script src='/js/main.js' type='text/javascript'></script>
<script src='/js/theme.js' type='text/javascript'></script>
