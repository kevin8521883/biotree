<?php
$product = '超孅XS';
if (isset($_GET['product'])) {
  $product = $_GET['product'];
}
$product_list = [
  '超孅XS' => [
    'classification' => '能量代謝',
    'img' => [
      '/assets/images/product/超孅XS.png',
      '/assets/images/product/超孅XS側.png',
    ],
    'product_img' => [
      '/assets/images/product_name/超孅銷售頁/01.png',
      '/assets/images/product_name/超孅銷售頁/02.gif',
      '/assets/images/product_name/超孅銷售頁/03.png',
      '/assets/images/product_name/超孅銷售頁/04.png',
      '/assets/images/product_name/超孅銷售頁/05.png',
      '/assets/images/product_name/超孅銷售頁/06.png',
      '/assets/images/product_name/超孅銷售頁/07.png',
      '/assets/images/product_name/超孅銷售頁/08.png',
    ],
    'name' => '超孅XS',
    'content' => '
    ✔ 雙倍燃油、高效代謝甩肉神器<br>
    ✔ 榮獲3大國際發明獎(日內瓦、美國匹茲堡、德國紐倫堡)<br>
    ✔ 榮獲國家發明創作獎、台灣生技大獎、專利技術金創獎<br>
    ✔ 高達9國功效專利認證(歐美英法義德瑞台日)<br>
    ✔ 最佳代謝因子 專利定序苦瓜胜肽<br>
    ✔ 專利低溫萃取技術 吸收更好<br>
    ✔ 飆速燃油 滿意度高達92.6%<br>',
    'url' => '超孅XS',
    'price' => '1590',
    'sale_price' => '',
    'onsale' => false,
    'format' => '※每盒60顆｜每顆430毫克',
  ],
  '好輕鬆-女神蔬果酵素' => [
    'classification' => '能量代謝',
    'img' => [
      '/assets/images/product/好輕鬆.png',
      '/assets/images/product/好輕鬆側.png'
    ],
    'product_img' => [
      '/assets/images/product_name/好輕鬆酵素銷售頁/01.png',
      '/assets/images/product_name/好輕鬆酵素銷售頁/02.png',
      '/assets/images/product_name/好輕鬆酵素銷售頁/03.png',
      '/assets/images/product_name/好輕鬆酵素銷售頁/04.png',
      '/assets/images/product_name/好輕鬆酵素銷售頁/05.png',
    ],
    'name' => '好輕鬆-女神蔬果酵素',
    'content' => '
    ✔ 台灣之光 舒暢冠軍 8小時有感<br>
    ✔ 含糖量低於2.5% 真正高纖低糖<br>
    ✔ 獨家專利 全醱酵技術 純淨無汙染<br>
    ✔ SGS、CoA全國公正檢驗合格<br>
    ✔ 德日中台專利認證(共六張)<br>
    ✔ 使用日本專利植化生酵素 含101種蔬果專利成分<br>
    ✔ 100萬高濃度SOD-like 喚醒女神肌<br>',
    'url' => '好輕鬆-女神蔬果酵素',
    'price' => '3180',
    'sale_price' => '3021',
    'onsale' => true,
    'format' => '※15包入｜每包20毫升'
  ],
  '輕卡-可可' => [
    'classification' => '嘴饞點心',
    'img' => [
      '/assets/images/product/輕卡-可可.png',
      '/assets/images/product/輕卡側-可可.png'
    ],
    'product_img' => [
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁1.jpg',
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁2.jpg',
    ],
    'name' => '樂孅機能輕卡餐 | 濃醇可可',
    'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用台灣在地紅薏仁萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加膨發小麥粒，增加口感<br>
    ✔ 每包熱量僅88.2大卡，輕鬆無負擔<br>',
    'url' => '輕卡-可可',
    'price' => '4770',
    'sale_price' => '4198',
    'onsale' => true,
    'format' => '※10包入｜每包25公克'
  ],
  '輕卡-抹茶' => [
    'classification' => '嘴饞點心',
    'img' => [
      '/assets/images/product/輕卡-抹茶.png',
      '/assets/images/product/輕卡側-抹茶.png'
    ],
    'product_img' => [
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁1.jpg',
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁2.jpg',
    ],
    'name' => '樂孅機能輕卡餐 | 御前抹茶',
    'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，增加飽足感<br>
    ✔ 使用專利毛喉鞘蕊花萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加藜麥糙米，口感豐富<br>
    ✔ 每包熱量僅90.5大卡，低糖飲品無負擔<br>',
    'url' => '輕卡-抹茶',
    'price' => '4770',
    'sale_price' => '4198',
    'onsale' => true,
    'format' => '※10包入｜每包25公克'
  ],
  '輕卡-法式濃湯' => [
    'classification' => '嘴饞點心',
    'img' => [
      '/assets/images/product/輕卡-法式濃湯.png',
      '/assets/images/product/輕卡側-濃湯.png'
    ],
    'product_img' => [
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁1.jpg',
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁2.jpg',
    ],
    'name' => '樂孅機能輕卡餐 | 私廚法式濃湯',
    'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加水溶性纖維，增加飽足感<br>
    ✔ 使用專利黑胡椒萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅91.2大卡，好喝順口無負擔<br>',
    'url' => '輕卡-法式濃湯',
    'price' => '4770',
    'sale_price' => '4198',
    'onsale' => true,
    'format' => '※10包入｜每包25公克'
  ],
  '輕卡-紅茶拿鐵' => [
    'classification' => '嘴饞點心',
    'img' => [
      '/assets/images/product/輕卡-紅茶拿鐵.png',
      '/assets/images/product/輕卡側-紅茶拿鐵.png'
    ],
    'product_img' => [
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁1.jpg',
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁2.jpg',
    ],
    'name' => '樂孅機能輕卡餐 | 醇厚紅茶拿鐵',
    'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用法國瓜拿納萃取等機能元素，促進新陳代謝、養顏美容<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅97.6大卡，輕鬆無負擔<br>',
    'url' => '輕卡-紅茶拿鐵',
    'price' => '4770',
    'sale_price' => '4198',
    'onsale' => true,
    'format' => '※10包入｜每包25公克'
  ],
  '輕卡-鐵觀音' => [
    'classification' => '嘴饞點心',
    'img' => [
      '/assets/images/product/輕卡-鐵觀音.png',
      '/assets/images/product/輕卡側-鐵觀音.png'
    ],
    'product_img' => [
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁1.jpg',
      '/assets/images/product_name/輕卡餐銷售頁/輕卡餐銷售頁2.jpg',
    ],
    'name' => '樂孅機能輕卡餐 | 炭焙鐵觀音拿鐵',
    'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用專利薑黃萃取等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅99.9大卡，茶香濃郁順口<br>',
    'url' => '輕卡-鐵觀音',
    'price' => '4770',
    'sale_price' => '4198',
    'onsale' => true,
    'format' => '※10包入｜每包25公克'
  ],
  '沉醉香氛淬' => [
    'classification' => '仕女保養',
    'img' => [
      '/assets/images/product/沉醉.png',
      '/assets/images/product/沉醉側.png'
    ],
    'product_img' => [
      '/assets/images/product_name/沉醉銷售頁/B無代言人1-1.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人1-2.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人1-3.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人1-4.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人1-5.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人2-1.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人2-2.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人2-3.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人2-4.jpg',
      '/assets/images/product_name/沉醉銷售頁/B無代言人2-5.jpg',
    ],
    'name' => '沉醉香氛淬',
    'content' => '
    ✔ 消除異味、使口氣芬芳<br>
    ✔ 獨家放鬆舒壓配方<br>
    ✔ 提升女性魅力<br>
    ✔ 調理體質、健康維持<br>
    ✔ 法式格蘭冰茶風味，隨撕即飲<br>
    ✔ 4國專利認證、5支專利原料、23張專利證書<br>
    ✔ SGS檢驗通過<br>',
    'url' => '沉醉香氛淬',
    'price' => '2280',
    'sale_price' => '',
    'onsale' => false,
    'format' => '10包入｜每包25毫升'
  ],
  '冰晶雪草飲' => [
    'classification' => '仕女保養',
    'img' => [
      '/assets/images/product/冰晶雪草飲.png',
      '/assets/images/product/冰晶雪草飲側.png',
    ],
    'product_img' => [
      '/assets/images/product_name/冰晶雪草飲銷售頁/20221025冰晶1.png',
      '/assets/images/product_name/冰晶雪草飲銷售頁/20221025冰晶2.png',
      '/assets/images/product_name/冰晶雪草飲銷售頁/20221025冰晶3.png',
      '/assets/images/product_name/冰晶雪草飲銷售頁/20221025冰晶4.png',
      '/assets/images/product_name/冰晶雪草飲銷售頁/20221025冰晶5.png',
      '/assets/images/product_name/冰晶雪草飲銷售頁/20221025冰晶6.png',
    ],
    'name' => '冰晶雪草飲',
    'content' => '
    ✔ 高達19項專利授權 並經臨床實驗測試<br>
    ✔ 特選8種專利原料 佐以3支專業複方<br>
    ✔ 獨特植物系配方 榮獲日美歐台多國認可<br>
    ✔ 日本專利山竹果-獨特植化素 山酮素<br>
    ✔ 含專利石榴萃取、歐美專利冰晶番茄<br>
    ✔ 精選豪華原料 滿意度高達94.7%<br>',
    'url' => '冰晶雪草飲',
    'price' => '2280',
    'sale_price' => '',
    'onsale' => false,
    'format' => '10包入｜每包25毫升'
  ],
  '波波G' => [
    'classification' => '仕女保養',
    'img' => [
      '/assets/images/product/波波G.png',
      '/assets/images/product/波波G側.png',
    ],
    'product_img' => [
      '/assets/images/product_name/波波G+銷售頁/01.png',
      '/assets/images/product_name/波波G+銷售頁/02.png',
      '/assets/images/product_name/波波G+銷售頁/03.png',
      '/assets/images/product_name/波波G+銷售頁/04.png',
    ],
    'name' => '波波G',
    'content' => '
    ✔ 五大元素幫助豐盈堅挺<br>
    ✔ 魚膠原蛋白與專利蛋白聚醣，幫助Q彈澎潤<br>
    ✔ 最高劑量玻尿酸幫助水潤豐盈<br>
    ✔ 葛根萃取與葫蘆巴萃取增添女性風采<br>
    ✔ 桂圓紅棗風味溫潤順口<br>',
    'url' => '波波G',
    'price' => '1580',
    'sale_price' => '',
    'onsale' => false,
    'format' => '10包入｜每包25毫升'
  ],
  '晶晶Plus葉黃素凍' => [
    'classification' => '晶明清晰',
    'img' => [
      '/assets/images/product/晶晶凍.png',
      '/assets/images/product/晶晶凍側.png',
    ],
    'product_img' => [
      '/assets/images/product_name/晶晶葉黃素銷售頁/葉黃素銷售頁1-1.jpg',
      '/assets/images/product_name/晶晶葉黃素銷售頁/葉黃素銷售頁1-2.jpg',
      '/assets/images/product_name/晶晶葉黃素銷售頁/葉黃素銷售頁1-3.jpg',
      '/assets/images/product_name/晶晶葉黃素銷售頁/葉黃素銷售頁1-4.png',
    ],
    'name' => '晶晶Plus葉黃素凍',
    'content' => '
    ✔ 使用頂級游離型葉黃素-FloraGLO®，吸收率佳<br>
    ✔ 一包即含9毫克葉黃素與1.8毫克玉米黃素，黃金比例護明有感<br>
    ✔ 專利玻尿酸添加，濕潤晶亮每一天<br>
    ✔ 專利黑豆種皮萃取，滿滿花青素幫助抵擋外界刺激<br>
    ✔ 足量蝦紅素使用，幫助放鬆舒壓<br>
    ✔ 原汁含有率99%，不含香精、色素與防腐劑<br>',
    'url' => '晶晶Plus葉黃素凍',
    'price' => '1580',
    'sale_price' => '',
    'onsale' => false,
    'format' => '15包入｜每包25公克'
  ],
];

if (isset($product_list[$product])) {
  // echo $type;
  // print_r($product_list);

  // $tmp_arr = array_filter($product_list, function ($v) {
  //   return $v['classification'] ==$_GET['type'];
  // });
  // print_r($tmp_arr);
  $product_list = $product_list[$product];
} else {
  include('./error.php');
  exit;
}
