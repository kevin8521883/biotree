<?php
$type = '嘴饞點心';
$sort_by = 'price-desc';

if (isset($_GET['type'])) {
  $type = $_GET['type'];
}
if (isset($_GET['sort_by'])) {
  $sort_by = $_GET['sort_by'];
}
$type_list = [
  '全部商品' => [
    [
      'img' => '/assets/images/product/超孅XS.png',
      'webp' => '/assets/images/product/超孅XS.webp',
      'name' => '超孅XS',
      'content' => '
    ✔ 雙倍燃油、高效代謝甩肉神器<br>
    ✔ 榮獲3大國際發明獎(日內瓦、美國匹茲堡、德國紐倫堡)<br>
    ✔ 榮獲國家發明創作獎、台灣生技大獎、專利技術金創獎<br>
    ✔ 高達9國功效專利認證(歐美英法義德瑞台日)<br>
    ✔ 最佳代謝因子 專利定序苦瓜胜肽<br>
    ✔ 專利低溫萃取技術 吸收更好<br>
    ✔ 飆速燃油 滿意度高達92.6%<br>',
      'url' => '/product_name/能量代謝/超孅XS',
      'price' => '3180',
      'sale_price' => '3021',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/好輕鬆.png',
      'webp' => '/assets/images/product/好輕鬆.webp',
      'name' => '好輕鬆-女神蔬果酵素',
      'content' => '
    ✔ 台灣之光 舒暢冠軍 8小時有感<br>
    ✔ 含糖量低於2.5% 真正高纖低糖<br>
    ✔ 獨家專利 全醱酵技術 純淨無汙染<br>
    ✔ SGS、CoA全國公正檢驗合格<br>
    ✔ 德日中台專利認證(共六張)<br>
    ✔ 使用日本專利植化生酵素 含101種蔬果專利成分<br>
    ✔ 100萬高濃度SOD-like 喚醒女神肌<br>',
      'url' => '/product_name/能量代謝/好輕鬆-女神蔬果酵素',
      'price' => '1590',
      'sale_price' => '1390',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-可可.png',
      'webp' => '/assets/images/product/輕卡-可可.webp',
      'name' => '樂孅機能輕卡餐｜濃醇可可',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用台灣在地紅薏仁萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加膨發小麥粒，增加口感<br>
    ✔ 每包熱量僅88.2大卡，輕鬆無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-可可',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-抹茶.png',
      'webp' => '/assets/images/product/輕卡-抹茶.webp',
      'name' => '樂孅機能輕卡餐｜御前抹茶',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，增加飽足感<br>
    ✔ 使用專利毛喉鞘蕊花萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加藜麥糙米，口感豐富<br>
    ✔ 每包熱量僅90.5大卡，低糖飲品無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-抹茶',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-法式濃湯.png',
      'webp' => '/assets/images/product/輕卡-法式濃湯.webp',
      'name' => '樂孅機能輕卡餐｜私廚法式濃湯',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加水溶性纖維，增加飽足感<br>
    ✔ 使用專利黑胡椒萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅91.2大卡，好喝順口無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-法式濃湯',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-紅茶拿鐵.png',
      'webp' => '/assets/images/product/輕卡-紅茶拿鐵.webp',
      'name' => '樂孅機能輕卡餐｜醇厚紅茶拿鐵',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用法國瓜拿納萃取等機能元素，促進新陳代謝、養顏美容<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅97.6大卡，輕鬆無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-紅茶拿鐵',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-鐵觀音.png',
      'webp' => '/assets/images/product/輕卡-鐵觀音.webp',
      'name' => '樂孅機能輕卡餐｜炭焙鐵觀音拿鐵',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用專利薑黃萃取等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅99.9大卡，茶香濃郁順口<br>',
      'url' => '/product_name/能量代謝/輕卡-鐵觀音',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/沉醉.png',
      'webp' => '/assets/images/product/沉醉.webp',
      'name' => '沉醉香氛淬',
      'content' => '
      ✔ 消除異味、使口氣芬芳<br>
      ✔ 獨家放鬆舒壓配方<br>
      ✔ 提升女性魅力<br>
      ✔ 調理體質、健康維持<br>
      ✔ 法式格蘭冰茶風味，隨撕即飲<br>
      ✔ 4國專利認證、5支專利原料、23張專利證書<br>
      ✔ SGS檢驗通過<br>',
      'url' => '/product_name/仕女保養/沉醉香氛淬',
      'price' => '1680',
      'sale_price' => '1680',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/冰晶雪草飲.png',
      'webp' => '/assets/images/product/冰晶雪草飲.webp',
      'name' => '冰晶雪草飲',
      'content' => '
    ✔ 高達19項專利授權 並經臨床實驗測試<br>
    ✔ 特選8種專利原料 佐以3支專業複方<br>
    ✔ 獨特植物系配方 榮獲日美歐台多國認可<br>
    ✔ 日本專利山竹果-獨特植化素 山酮素<br>
    ✔ 含專利石榴萃取、歐美專利冰晶番茄<br>
    ✔ 精選豪華原料 滿意度高達94.7%<br>',
      'url' => '/product_name/仕女保養/冰晶雪草飲',
      'price' => '980',
      'sale_price' => '980',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/波波G.png',
      'webp' => '/assets/images/product/波波G.webp',
      'name' => '波波G',
      'content' => '
    ✔ 五大元素幫助豐盈堅挺<br>
    ✔ 魚膠原蛋白與專利蛋白聚醣，幫助Q彈澎潤<br>
    ✔ 最高劑量玻尿酸幫助水潤豐盈<br>
    ✔ 葛根萃取與葫蘆巴萃取增添女性風采<br>
    ✔ 桂圓紅棗風味溫潤順口<br>',
      'url' => '/product_name/仕女保養/波波G',
      'price' => '980',
      'sale_price' => '980',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/晶晶凍.png',
      'webp' => '/assets/images/product/晶晶凍.webp',
      'name' => '晶晶Plus葉黃素凍',
      'content' => '
    ✔ 使用頂級游離型葉黃素-FloraGLO®，吸收率佳<br>
    ✔ 一包即含9毫克葉黃素與1.8毫克玉米黃素，黃金比例護明有感<br>
    ✔ 專利玻尿酸添加，濕潤晶亮每一天<br>
    ✔ 專利黑豆種皮萃取，滿滿花青素幫助抵擋外界刺激<br>
    ✔ 足量蝦紅素使用，幫助放鬆舒壓<br>
    ✔ 原汁含有率99%，不含香精、色素與防腐劑<br>',
      'url' => '/product_name/晶明清晰/晶晶Plus葉黃素凍',
      'price' => '1590',
      'sale_price' => '1590',
      'onsale' => false,
    ],

  ],
  '能量代謝' => [
    [
      'img' => '/assets/images/product/超孅XS.png',
      'webp' => '/assets/images/product/超孅XS.webp',
      'name' => '超孅XS',
      'content' => '
    ✔ 雙倍燃油、高效代謝甩肉神器<br>
    ✔ 榮獲3大國際發明獎(日內瓦、美國匹茲堡、德國紐倫堡)<br>
    ✔ 榮獲國家發明創作獎、台灣生技大獎、專利技術金創獎<br>
    ✔ 高達9國功效專利認證(歐美英法義德瑞台日)<br>
    ✔ 最佳代謝因子 專利定序苦瓜胜肽<br>
    ✔ 專利低溫萃取技術 吸收更好<br>
    ✔ 飆速燃油 滿意度高達92.6%<br>',
      'url' => '/product_name/能量代謝/超孅XS',
      'price' => '3180',
      'sale_price' => '3021',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/好輕鬆.png',
      'webp' => '/assets/images/product/好輕鬆.webp',
      'name' => '好輕鬆-女神蔬果酵素',
      'content' => '
    ✔ 台灣之光 舒暢冠軍 8小時有感<br>
    ✔ 含糖量低於2.5% 真正高纖低糖<br>
    ✔ 獨家專利 全醱酵技術 純淨無汙染<br>
    ✔ SGS、CoA全國公正檢驗合格<br>
    ✔ 德日中台專利認證(共六張)<br>
    ✔ 使用日本專利植化生酵素 含101種蔬果專利成分<br>
    ✔ 100萬高濃度SOD-like 喚醒女神肌<br>',
      'url' => '/product_name/能量代謝/好輕鬆-女神蔬果酵素',
      'price' => '1590',
      'sale_price' => '1390',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-可可.png',
      'webp' => '/assets/images/product/輕卡-可可.webp',
      'name' => '樂孅機能輕卡餐｜濃醇可可',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用台灣在地紅薏仁萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加膨發小麥粒，增加口感<br>
    ✔ 每包熱量僅88.2大卡，輕鬆無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-可可',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-抹茶.png',
      'webp' => '/assets/images/product/輕卡-抹茶.webp',
      'name' => '樂孅機能輕卡餐｜御前抹茶',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，增加飽足感<br>
    ✔ 使用專利毛喉鞘蕊花萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加藜麥糙米，口感豐富<br>
    ✔ 每包熱量僅90.5大卡，低糖飲品無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-抹茶',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-法式濃湯.png',
      'webp' => '/assets/images/product/輕卡-法式濃湯.webp',
      'name' => '樂孅機能輕卡餐｜私廚法式濃湯',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加水溶性纖維，增加飽足感<br>
    ✔ 使用專利黑胡椒萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅91.2大卡，好喝順口無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-法式濃湯',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-紅茶拿鐵.png',
      'webp' => '/assets/images/product/輕卡-紅茶拿鐵.webp',
      'name' => '樂孅機能輕卡餐｜醇厚紅茶拿鐵',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用法國瓜拿納萃取等機能元素，促進新陳代謝、養顏美容<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅97.6大卡，輕鬆無負擔<br>',
      'url' => '/product_name/能量代謝/輕卡-紅茶拿鐵',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-鐵觀音.png',
      'webp' => '/assets/images/product/輕卡-鐵觀音.webp',
      'name' => '樂孅機能輕卡餐｜炭焙鐵觀音拿鐵',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用專利薑黃萃取等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅99.9大卡，茶香濃郁順口<br>',
      'url' => '/product_name/能量代謝/輕卡-鐵觀音',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
  ],
  '嘴饞點心' => [
    [
      'img' => '/assets/images/product/輕卡-可可.png',
      'webp' => '/assets/images/product/輕卡-可可.webp',
      'name' => '樂孅機能輕卡餐｜濃醇可可',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用台灣在地紅薏仁萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加膨發小麥粒，增加口感<br>
    ✔ 每包熱量僅88.2大卡，輕鬆無負擔<br>',
      'url' => '/product_name/嘴饞點心/輕卡-可可',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-抹茶.png',
      'webp' => '/assets/images/product/輕卡-抹茶.webp',
      'name' => '樂孅機能輕卡餐｜御前抹茶',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，增加飽足感<br>
    ✔ 使用專利毛喉鞘蕊花萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 添加藜麥糙米，口感豐富<br>
    ✔ 每包熱量僅90.5大卡，低糖飲品無負擔<br>',
      'url' => '/product_name/嘴饞點心/輕卡-抹茶',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-法式濃湯.png',
      'webp' => '/assets/images/product/輕卡-法式濃湯.webp',
      'name' => '樂孅機能輕卡餐｜私廚法式濃湯',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加水溶性纖維，增加飽足感<br>
    ✔ 使用專利黑胡椒萃取物等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅91.2大卡，好喝順口無負擔<br>',
      'url' => '/product_name/嘴饞點心/輕卡-法式濃湯',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-紅茶拿鐵.png',
      'webp' => '/assets/images/product/輕卡-紅茶拿鐵.webp',
      'name' => '樂孅機能輕卡餐｜醇厚紅茶拿鐵',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用法國瓜拿納萃取等機能元素，促進新陳代謝、養顏美容<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅97.6大卡，輕鬆無負擔<br>',
      'url' => '/product_name/嘴饞點心/輕卡-紅茶拿鐵',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/輕卡-鐵觀音.png',
      'webp' => '/assets/images/product/輕卡-鐵觀音.webp',
      'name' => '樂孅機能輕卡餐｜炭焙鐵觀音拿鐵',
      'content' => '
    ✔ 優質大豆蛋白、乳清蛋白，優質雙蛋白補充<br>
    ✔ 添加奇亞籽、菊苣纖維，高纖飲品使排便順暢<br>
    ✔ 使用專利薑黃萃取等機能元素，促進新陳代謝<br>
    ✔ 每包含有1/3每日綜合維生素需要量<br>
    ✔ 每包熱量僅99.9大卡，茶香濃郁順口<br>',
      'url' => '/product_name/嘴饞點心/輕卡-鐵觀音',
      'price' => '4770',
      'sale_price' => '4198',
      'onsale' => false,
    ],
    // [
    //   'img' => 'https://cdn.cybassets.com/media/W1siZiIsIjE3NDc4L3Byb2R1Y3RzLzM2Nzg1MTkxLzE2NjUwMzk2ODZfOWIwN2FhOTE5OGNmMDE4Yjc1MDcucG5nIl0sWyJwIiwidGh1bWIiLCI2MDB4NjAwIl1d.png?sha=87eab1d352d37c7c',
    //   'name' => '消水腫',
    //   'content' => '嚴選魚膠原蛋白和珍稀燕窩精萃，吃出超強美顏力。180g / 瓶',
    //   'url' => '/product_name/嘴饞點心/消水腫',
    //   'price' => '2280',
    //   'sale_price' => '2280',
    //   'onsale' => false,
    // ],
  ],
  '仕女保養' => [
    [
      'img' => '/assets/images/product/沉醉.png',
      'webp' => '/assets/images/product/沉醉.webp',
      'name' => '沉醉香氛淬',
      'content' => '
    ✔ 消除異味、使口氣芬芳<br>
    ✔ 獨家放鬆舒壓配方<br>
    ✔ 提升女性魅力<br>
    ✔ 調理體質、健康維持<br>
    ✔ 法式格蘭冰茶風味，隨撕即飲<br>
    ✔ 4國專利認證、5支專利原料、23張專利證書<br>
    ✔ SGS檢驗通過<br>',
      'url' => '/product_name/仕女保養/沉醉香氛淬',
      'price' => '1680',
      'sale_price' => '1680',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/冰晶雪草飲.png',
      'webp' => '/assets/images/product/冰晶雪草飲.webp',
      'name' => '冰晶雪草飲',
      'content' => '
    ✔ 高達19項專利授權 並經臨床實驗測試<br>
    ✔ 特選8種專利原料 佐以3支專業複方<br>
    ✔ 獨特植物系配方 榮獲日美歐台多國認可<br>
    ✔ 日本專利山竹果-獨特植化素 山酮素<br>
    ✔ 含專利石榴萃取、歐美專利冰晶番茄<br>
    ✔ 精選豪華原料 滿意度高達94.7%<br>',
      'url' => '/product_name/仕女保養/冰晶雪草飲',
      'price' => '980',
      'sale_price' => '980',
      'onsale' => false,
    ],
    [
      'img' => '/assets/images/product/波波G.png',
      'webp' => '/assets/images/product/波波G.webp',
      'name' => '波波G',
      'content' => '
    ✔ 五大元素幫助豐盈堅挺<br>
    ✔ 魚膠原蛋白與專利蛋白聚醣，幫助Q彈澎潤<br>
    ✔ 最高劑量玻尿酸幫助水潤豐盈<br>
    ✔ 葛根萃取與葫蘆巴萃取增添女性風采<br>
    ✔ 桂圓紅棗風味溫潤順口<br>',
      'url' => '/product_name/仕女保養/波波G',
      'price' => '980',
      'sale_price' => '980',
      'onsale' => false,
    ],
  ],
  '晶明清晰' => [
    [
      'img' => '/assets/images/product/晶晶凍.png',
      'webp' => '/assets/images/product/晶晶凍.webp',
      'name' => '晶晶Plus葉黃素凍',
      'content' => '
    ✔ 使用頂級游離型葉黃素-FloraGLO®，吸收率佳<br>
    ✔ 一包即含9毫克葉黃素與1.8毫克玉米黃素，黃金比例護明有感<br>
    ✔ 專利玻尿酸添加，濕潤晶亮每一天<br>
    ✔ 專利黑豆種皮萃取，滿滿花青素幫助抵擋外界刺激<br>
    ✔ 足量蝦紅素使用，幫助放鬆舒壓<br>
    ✔ 原汁含有率99%，不含香精、色素與防腐劑<br>',
      'url' => '/product_name/晶明清晰/晶晶Plus葉黃素凍',
      'price' => '1590',
      'sale_price' => '1590',
      'onsale' => false,
    ],
  ],
  '好眠舒適' => [
    [
      'img' => '/assets/images/product/沉醉.png',
      'webp' => '/assets/images/product/沉醉.webp',
      'name' => '沉醉香氛淬',
      'content' => '
    ✔ 消除異味、使口氣芬芳<br>
    ✔ 獨家放鬆舒壓配方<br>
    ✔ 提升女性魅力<br>
    ✔ 調理體質、健康維持<br>
    ✔ 法式格蘭冰茶風味，隨撕即飲<br>
    ✔ 4國專利認證、5支專利原料、23張專利證書<br>
    ✔ SGS檢驗通過<br>',
      'url' => '/product_name/好眠舒適/沉醉香氛淬',
      'price' => '1680',
      'sale_price' => '1680',
      'onsale' => false,
    ],
  ],
  // '海外專區' => [],
];

if (isset($type_list[$type])) {
  $type_list = $type_list[$type];
  $price = array();
  foreach ($type_list as $key => $row) {
    $price[$key] = $row['price'];
  }
  switch ($sort_by) {
    case 'sort-by-price-desc':
      array_multisort($price, SORT_DESC, $type_list);
      break;
    case 'sort-by-price-asc':
      array_multisort($price, SORT_ASC, $type_list);
  };
} else {
  include('./error.php');
  exit;
}
