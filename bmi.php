<!DOCTYPE html>
<html lang="zh-tw" style="height:100%;">

<head>
  <?php
  $meta_type = '健康計算機';
  include('./data/meta.php')
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link href='/assets/css/bmr-style.css' rel='stylesheet' type='text/css' media='all' />
  <script src="/js/bmi.js"></script>
</head>

<body style="display: flex; flex-direction: column;">
  <!-- Google Tag Manager (noscript) -->
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navigation -->
  <span class="drawer drawer--left">
    <!-- header -->
    <?php include("./components/header.php") ?>
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
              <a href="/bmi" itemprop="item">
                <span itemprop="name">健康計算機</span>
              </a>
              <!-- product's collections -->
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div id="index">
      <div class="container mt-4">
        <h1>BMI計算</h1>
        <div class="row">
          <form class="col-md-5 col-12">
            <p style="background-color:#e9dfd9" class="p-3 rounded font-weight-bold">說明：<br>
              世界衛生組織建議以身體質量指數（Body Mass Index, BMI）來衡量肥胖程度，其計算公式是以體重（公斤）除以身高（公尺）的平方。 國民健康署建議我國成人BMI應維持在18.5（kg/㎡）及24（kg/㎡）之間，太瘦、過重或太胖皆有礙健康。 研究顯示，體重過重或是肥胖（BMI≧24）為糖尿病、心血管疾病、惡性腫瘤等慢性疾病的主要風險因素；而過瘦的健康問題，則會有營養不良、骨質疏鬆、猝死等健康問題。</p>
            <div class="row">
              <div class="col-12">
                <label for="height">身高：</label>
                <input class="form-control" type="number" step="0.1" min="1" id="height" name="height">
              </div>
              <div class="col-12">
                <label for="weight">體重：</label>
                <input class="form-control" type="number" step="0.1" min="1" id="weight" name="weight">
              </div>
            </div>
            <div class="form-control mt-4 btn btn-outline-info" style="cursor:pointer" id="onclick" value="計算">
              計算
            </div>
            <p class='font-weight-bold text-danger my-1 d-none' id='err_msg'>請輸入有效的身高或體重</p>
          </form>
          <section class="mt-5 mt-md-0 col-md-7 col-12">
            <div class="table-responsive">
              <table style="width:100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" id="t1">成人肥胖定義</th>
                    <th class="text-center" id="t2">身體質量指數(BMI)(kg/㎡) </th>
                    <th class="text-center" id="t3">腰圍(cm) </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table_gray text_main">
                      <div align="center">體重過輕 </div>
                    </td>
                    <td class="table_gray text-center">BMI&lt;18.5 </td>
                    <td class="table_gray">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="table_light text_main">
                      <div align="center">健康體位 </div>
                    </td>
                    <td class="table_light text-center  text_main">18.5&lt;=BMI&lt;24 </td>
                    <td class="table_light">&nbsp;</td>
                  </tr>
                  <tr class=" text-center  text_main">
                    <td class="table_gray">
                      <div align="center">體位異常 </div>
                    </td>
                    <td class="table_gray">過重：24&lt;=BMI&lt;27<br>
                      輕度肥胖：27 &lt;= BMI &lt; 30<br>
                      中度肥胖：30 &lt;= BMI &lt; 35<br>
                      重度肥胖：BMI &gt;= 35</td>
                    <td class="table_gray">男性：&gt;= 90 公分<br>
                      女性：&gt;= 80 公分</td>
                  </tr>
                </tbody>
              </table>
              <div class="text-center">
                <img class="" style="width: 30%;" src="/assets/images/bmi/bmi_form.png" alt="">
              </div>
            </div>
          </section>
        </div>
        <section class="my-4 d-none" id="score_section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <img class="img-fluid" src="/assets/images/bmi/bmi.png" alt="BMI測試" aria-hidden="true">
              </div>
              <div class="col-sm-6 mt-3 mt-sm-0">
                <h3 class="text-center">您的BMI為 <span id="score"></span></h3>
                <h4 class="text-center" id="bmi_content"></h4>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="container">
        <hr>
      </div>
      <div class="container my-4">
        <div class="row">
          <form class="col-md-5 col-12">
            <h1>基礎代謝率 (BMR) 計算機</h1>
            <p style="background-color:#e9dfd9" class="p-3 rounded font-weight-bold">說明：<br>
              BMR 指人體在休息狀態下，維持新陳代謝所需的熱量，例如：呼吸、器官運作、體溫維持等，即使整天躺著不動也會消耗的最低熱量。BMR 會隨著年紀增加或體重減輕而降低，會隨著肌肉量增加而上升。
            </p>
            <div>
              <p>生理性別： </p>
              <div class="d-flex">
                <div class="">
                  <input type="radio" name="tdee_sex" id="male" value="1" checked="checked">
                  <label for="male">
                    男性
                  </label>
                </div>
                <div class="ml-2">
                  <input type="radio" name="tdee_sex" id="female" value="0">
                  <label for="female">
                    女性
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class=" col-12">
                <label for="age">年齡：</label>
                <input class="form-control" type="number" step="1" min="1" id="age" name="age">
              </div>
              <div class=" col-12">
                <label for="bmr_height">身高：</label>
                <input class="form-control" type="number" step="0.1" min="1" id="bmr_height" name="bmr_height">
              </div>
              <div class=" col-12">
                <label for="bmr_weight">體重：</label>
                <input class="form-control" type="number" step="0.1" min="1" id="bmr_weight" name="bmr_weight">
              </div>
            </div>
            <div class="form-control mt-4 btn btn-outline-info" style="cursor:pointer" id="onclick_bmr" value="計算">
              計算
            </div>
            <section class="d-none" id="bmr_section">
              <p class="font-weight-bold mt-2">計算公式 (Mifflin-St Jeor formula) 9.99 × 體重 + 6.25 × 身高 - 4.92 × 年齡 +(166 × 性別 (男 1、女 0) - 161) = 基礎代謝率 (BMR)</p>
              <p class="font-weight-bold mt-2">基礎代謝率 (BMR) 計算結果：<span id="bmr_score"></span></p>
            </section>
            <p class='font-weight-bold text-danger my-1 d-none' id='bmr_err_msg'>請輸入有效的資訊</p>
          </form>
          <div class="mt-5 mt-md-0 col-md-7 col-12">
            <h4>每日總熱量消耗 (TDEE)</h4>
            <p class="fs-6">TDEE 是身體一整天下來，包括基礎代謝、活動量、吃東西所消耗的熱量。不同的生活型態需要的熱量也不一樣，當每天攝取的熱量和 TDEE 相等，便達到「熱量平衡」。</p>
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" style="color: black;" href="#generally" role="tab" data-toggle="tab" aria-selected="true">一般</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" style="color: black;" href="#lose-fat" role="tab" data-toggle="tab" aria-selected="false">我想減重</a>
              </li>
            </ul>
            <!-- Begin Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active container " id="generally">
                <div class="row bmr-grade mt-2">
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_1.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動趨於靜態 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="坐式生活型態，如：靜臥、久坐、看電視">說明</span>
                        </span><br>
                        <span class="bmr-point"> (幾乎不運動)</span><br>
                        <span class="tdee-formula">BMR x 1.2 =</span> <strong class="lv-result" id="lv1"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_2.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度較低 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="不太費力的基本活動，如：開車、烹飪、散步">說明</span></span><br><span class="bmr-point"> (每週運動 1-3 天)</span><br>
                        <span class="tdee-formula">BMR x 1.375 = </span><strong class="lv-result" id="lv2"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_3.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度正常 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="呼吸及心跳些微加快，如：掃地、拖地、逛街、健走">說明</span></span><br><span class="bmr-point"> (每週運動 3-5 天)</span><br>
                        <span class="tdee-formula">BMR x 1.55 = </span><strong class="lv-result" id="lv3"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_4.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度較高 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="呼吸及心跳快速且大量流汗，如：打球、騎腳踏車、有氧運動、游泳、登山">說明</span></span><br><span class="bmr-point"> (每週運動 6-7 天)</span><br>
                        <span class="tdee-formula">BMR x 1.72 = </span><strong class="lv-result" id="lv4"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_5.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度激烈 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="長時間耗費體力，如：長跑、運動訓練、競賽型運動">說明</span></span><br><span class="bmr-point"> (長時間運動或體力勞動工作)</span><br>
                        <span class="tdee-formula">BMR x 1.9 = </span><strong class="lv-result" id="lv5"></strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade container " id="lose-fat">
                <div class="row bmr-grade">
                  <p class="mt-3">減重以均衡飲食為原則，應循序漸進才不易復胖。每週減去約 0.3~0.5 公斤，為適當的減重速度。可從 TDEE -300 大卡開始，視情況調整成 -500 大卡。<br><span style="color:#777;font-size:15px;">※ 避免過度節食造成肌肉流失，減重期間熱量不得低於基礎代謝率，下方建議攝取為 TDEE -300 大卡。</span></p>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_1.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動趨於靜態 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="坐式生活型態，如：靜臥、久坐、看電視">說明</span></span><br><span class="bmr-point"> (幾乎不運動)</span><br> 建議攝取
                        <strong class="lv-result" id="lose-lv1"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_2.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度較低 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="不太費力的基本活動，如：開車、烹飪、散步">說明</span></span><br><span class="bmr-point"> (每週運動 1-3 天)</span><br> 建議攝取 <strong class="lv-result" id="lose-lv2"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_3.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度正常 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="呼吸及心跳些微加快，如：掃地、拖地、逛街、健走">說明</span></span><br><span class="bmr-point"> (每週運動 3-5 天)</span><br> 建議攝取 <strong class="lv-result" id="lose-lv3"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_4.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度較高 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="呼吸及心跳快速且大量流汗，如：打球、騎腳踏車、有氧運動、游泳、登山">說明</span></span><br><span class="bmr-point"> (每週運動 6-7 天)</span><br> 建議攝取 <strong class="lv-result" id="lose-lv4"></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="row">
                      <div class="col-12 mb-2">
                        <img src="/assets/images/bmi/tdee_5.png" width="100%">
                      </div>
                      <div class="col-12">
                        <span class="font-weight-bold">身體活動程度激烈 <span class="infoicon" data-bs-toggle="tooltip" data-bs-title="長時間耗費體力，如：長跑、運動訓練、競賽型運動">說明</span></span><br><span class="bmr-point">(長時間運動或體力勞動工作)</span><br> 建議攝取 <strong class="lv-result" id="lose-lv5"></strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div id="3"></div> -->
            </div>
            <!-- End Tab panes -->
          </div>
        </div>
      </div>

      <div class="container my-5">
        <div class="food-content">
          <div class="p-0">
            <div class="food-title font-weight-bold ">💡 我想知道一天的飲食攝取該如何分配！</div>
            <label for="tdee">請輸入你的 TDEE ：</label>
            <div class="d-flex">
              <input class="form-control" style="width:55%" placeholder="根據上方運動頻率填入對應數值" type="number" min="1" id="tdee" name="tdee">
              <div class="btn btn-outline-info ml-2" style="cursor:pointer" id="onclick_tdee">計算</div>
            </div>
            <p id="tdee-guide" class="tdee-guide"></p>
            <p id="food-guide">
            <div class="food-guide d-none" id="tdee_msg">➤ 熱量基準：<span id="tdee_base"></span> 大卡，下方六大類建議份數參考 <a href="https://www.hpa.gov.tw/File/Attach/6712/File_6253.pdf" target="blank">國健署《每日飲食指南》</a>，依最為接近的熱量需求計算（熱量區間以 ±100-150 大卡作進位捨去）</div>
            <div class="text-danger font-weight-bold d-none" style="font-size:14px" id="tdee_err_msg"></div>
            </p>
          </div>
          <div class="food-result-box">
            <div class="row food-result-content">
              <div class="col-12 col-lg-3 text-left food-item pl-3 mobile-bottom">
                <div class="font-weight-bold"><img src="/assets/images/bmi/rice.svg"> 全榖雜糧類 <span class="food-number" id="nutrition1"></span> (份)</div>
                <div class="food-subtitle">➤ 未精緻 <span class="food-number-1" id="nutrition1_1"></span> (份)</div>
                <div class="food-subtitle">➤ 其他 <span class="food-number-1" id="nutrition1_2"></span> (份)</div>
              </div>
              <div class="col-12 col-lg-3 text-left food-item food-border-left">
                <div class="row">
                  <div class="col-12 food-border-bottom pb-11 pl-3 food-border-top">
                    <div class="text-left food-item font-weight-bold"><img src="/assets/images/bmi/fish.svg"> 豆魚蛋肉類 <span class="food-number" id="nutrition2"></span> (份)</div>
                  </div>
                  <div class="col-12 pb-11 pl-3">
                    <div class="text-left food-item font-weight-bold"><img src="/assets/images/bmi/milk.svg"> 乳品類 <span class="food-number" id="nutrition3"></span> (份)</div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-3 text-left food-item food-border-left">
                <div class="row">
                  <div class="col-12 food-border-bottom pb-11 pl-3 food-border-top">
                    <div class="text-left food-item font-weight-bold"><img src="/assets/images/bmi/vegetables.svg"> 蔬菜類 <span class="food-number" id="nutrition4"></span> (份)</div>
                  </div>
                  <div class="col-12 pb-11 pl-3">
                    <div class="text-left food-item font-weight-bold"><img src="/assets/images/bmi/banana.svg"> 水果類 <span class="food-number" id="nutrition5"></span> (份)</div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-3 text-left food-item food-border-left pl-3 food-border-top mobile-bottom">
                <div class="font-weight-bold"><img src="/assets/images/bmi/nut.svg"> 油脂與堅果種子類 <span class="food-number" id="nutrition6"></span> (份)</div>
                <div class="food-subtitle">➤ 油脂類 <span class="food-number-1" id="nutrition6_1"></span> (份)</div>
                <div class="food-subtitle">➤ 堅果種子 <span class="food-number-1" id="nutrition6_2"></span> (份)</div>
              </div>
            </div>
          </div>
          <!-- <div class="text-right mt-3" style="width: 100%;">想知道六大類怎麼吃？ <a href="https://npower.heho.com.tw/learn-healthy-eating" class="btn btn-success " style="background-color:#28a745; ">▸▸ 認識六大類 🍚</a></div> -->
          <p class="mt-4 small">* 計算結果僅適用於一般成人，糖尿病、腎臟病等特殊狀況者請諮詢營養師、專業醫事人員。</p>
        </div>
      </div>
      <!-- for _product_item -->
    </div>
  </div>
  <!-- Footer -->
  <?php include './components/footer.php' ?>
  <!-- gototop -->
  <div id="gototop">
    <a href="javascript:void(0)">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>
  <!-- ajaxloading -->
</body>

</html>