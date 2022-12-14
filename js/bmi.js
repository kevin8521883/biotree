$(document).ready(function () {
  //bmi計算
  $("#onclick").click(function () {
    let h = document.getElementById("height").value;
    let w = document.getElementById("weight").value;
    let bmi;
    let err_msg;
    let text;
    if (h > 0 && w > 0) {
      document.getElementById("score_section").classList.remove("d-none");
      document.getElementById("err_msg").classList.add("d-none");
      bmi = ((w / (h * h)) * 10000).toFixed(2);
      if (bmi < 18.5) {
        text = "體重過輕！您需要再吃營養些，讓自己重一些！";
      } else if (bmi >= 18.5 && bmi < 24) {
        text = "體重標準！很不錯喔，請您繼續保持！";
      } else if (bmi >= 24 && bmi < 27) {
        text = "體重過重！您得控制一下飲食了，請加油！";
      } else {
        text = "體重過重！肥胖容易引起疾病，您得要多多注意自己的健康囉！";
      }
      document.getElementById("score").innerHTML = bmi;
      document.getElementById("bmi_content").innerHTML = text;
    } else {
      document.getElementById("err_msg").classList.remove("d-none");
      document.getElementById("score_section").classList.add("d-none");
    }
  });

  //bmr計算
  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  );
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
  );
  $("#onclick_bmr").click(function () {
    let sex = $("input[type='radio'][name='tdee_sex']:checked").val();
    let age = document.getElementById("age").value;
    let h = document.getElementById("bmr_height").value;
    let w = document.getElementById("bmr_weight").value;
    let BMR;
    let err_msg;
    let text;
    if (age > 0 && h > 0 && w > 0) {
      document.getElementById("bmr_section").classList.remove("d-none");
      document.getElementById("bmr_err_msg").classList.add("d-none");
      BMR = (9.99 * w + 6.25 * h - 4.92 * age + (166 * sex - 161)).toFixed(0);
      document.getElementById("bmr_score").innerHTML = BMR;
      document.getElementById("lv1").innerHTML = (BMR * 1.2).toFixed(0);
      document.getElementById("lv2").innerHTML = (BMR * 1.375).toFixed(0);
      document.getElementById("lv3").innerHTML = (BMR * 1.55).toFixed(0);
      document.getElementById("lv4").innerHTML = (BMR * 1.72).toFixed(0);
      document.getElementById("lv5").innerHTML = (BMR * 1.9).toFixed(0);
      document.getElementById("lose-lv1").innerHTML = (BMR * 1.2 - 300).toFixed(
        0
      );
      document.getElementById("lose-lv2").innerHTML = (
        BMR * 1.375 -
        300
      ).toFixed(0);
      document.getElementById("lose-lv3").innerHTML = (
        BMR * 1.55 -
        300
      ).toFixed(0);
      document.getElementById("lose-lv4").innerHTML = (
        BMR * 1.72 -
        300
      ).toFixed(0);
      document.getElementById("lose-lv5").innerHTML = (BMR * 1.9 - 300).toFixed(
        0
      );
    } else {
      document.getElementById("bmr_err_msg").classList.remove("d-none");
      document.getElementById("bmr_section").classList.add("d-none");
    }
  });

  //每日tdee營養成分計算
  let nutrition_arr = [
    {
      base: 1200,
      nutrition1: 1.5,
      nutrition1_1: 1,
      nutrition1_2: 0.5,
      nutrition2: 3,
      nutrition3: 1.5,
      nutrition4: 3,
      nutrition5: 2,
      nutrition6: 4,
      nutrition6_1: 3,
      nutrition6_2: 1,
    },
    {
      base: 1500,
      nutrition1: 2.5,
      nutrition1_1: 1,
      nutrition1_2: 1.5,
      nutrition2: 4,
      nutrition3: 1.5,
      nutrition4: 3,
      nutrition5: 2,
      nutrition6: 4,
      nutrition6_1: 3,
      nutrition6_2: 1,
    },
    {
      base: 1800,
      nutrition1: 3,
      nutrition1_1: 1,
      nutrition1_2: 2,
      nutrition2: 5,
      nutrition3: 1.5,
      nutrition4: 3,
      nutrition5: 2,
      nutrition6: 5,
      nutrition6_1: 4,
      nutrition6_2: 1,
    },
    {
      base: 2000,
      nutrition1: 3,
      nutrition1_1: 1,
      nutrition1_2: 2,
      nutrition2: 6,
      nutrition3: 1.5,
      nutrition4: 4,
      nutrition5: 3,
      nutrition6: 6,
      nutrition6_1: 5,
      nutrition6_2: 1,
    },
    {
      base: 2200,
      nutrition1: 3.5,
      nutrition1_1: 1.5,
      nutrition1_2: 2,
      nutrition2: 6,
      nutrition3: 1.5,
      nutrition4: 4,
      nutrition5: 3.5,
      nutrition6: 6,
      nutrition6_1: 5,
      nutrition6_2: 1,
    },
    {
      base: 2500,
      nutrition1: 4,
      nutrition1_1: 1.5,
      nutrition1_2: 2.5,
      nutrition2: 7,
      nutrition3: 1.5,
      nutrition4: 5,
      nutrition5: 4,
      nutrition6: 7,
      nutrition6_1: 6,
      nutrition6_2: 1,
    },
    {
      base: 2700,
      nutrition1: 4,
      nutrition1_1: 1.5,
      nutrition1_2: 2.5,
      nutrition2: 8,
      nutrition3: 2,
      nutrition4: 5,
      nutrition5: 4,
      nutrition6: 8,
      nutrition6_1: 7,
      nutrition6_2: 1,
    },
    {
      base: "",
      nutrition1: "",
      nutrition1_1: "",
      nutrition1_2: "",
      nutrition2: "",
      nutrition3: "",
      nutrition4: "",
      nutrition5: "",
      nutrition6: "",
      nutrition6_1: "",
      nutrition6_2: "",
    },
  ];
  let food;
  let err_msg;
  let err_status;
  $("#onclick_tdee").click(function () {
    let tdee = document.getElementById("tdee").value;
    if (tdee < 1100 || tdee > 2800) {
      err_status = true;
    } else {
      err_status = false;
    }
    if (err_status) {
      if (tdee < 1100) {
        err_msg =
          "⚠️ 提醒：此數值小於每日所需熱量參考攝取(DRIs)，建議您尋求營養師或專業醫事人員，進行更適切的飲食規劃。";
      } else {
        err_msg =
          "⚠️ 提醒：此數值大於每日所需熱量參考攝取(DRIs)，建議您尋求營養師或專業醫事人員，進行更適切的飲食規劃。";
      }
      document.getElementById("tdee_err_msg").innerHTML = err_msg;
      document.getElementById("tdee_err_msg").classList.remove("d-none");
      document.getElementById("tdee_msg").classList.add("d-none");
      food = nutrition_arr[7];
    } else {
      document.getElementById("tdee_err_msg").classList.add("d-none");
      document.getElementById("tdee_msg").classList.remove("d-none");
      if (tdee >= 1100 && tdee <= 1350) {
        food = nutrition_arr[0];
      } else if (tdee > 1350 && tdee <= 1650) {
        food = nutrition_arr[1];
      } else if (tdee > 1650 && tdee < 1900) {
        food = nutrition_arr[2];
      } else if (tdee >= 1900 && tdee < 2100) {
        food = nutrition_arr[3];
      } else if (tdee >= 2100 && tdee <= 2350) {
        food = nutrition_arr[4];
      } else if (tdee > 2350 && tdee <= 2600) {
        food = nutrition_arr[5];
      } else if (tdee > 2600 && tdee <= 2800) {
        food = nutrition_arr[6];
      }
    }
    document.getElementById("tdee_base").innerHTML = food.base;
    document.getElementById("nutrition1").innerHTML = food.nutrition1;
    document.getElementById("nutrition1_1").innerHTML = food.nutrition1_1;
    document.getElementById("nutrition1_2").innerHTML = food.nutrition1_2;
    document.getElementById("nutrition2").innerHTML = food.nutrition2;
    document.getElementById("nutrition3").innerHTML = food.nutrition3;
    document.getElementById("nutrition4").innerHTML = food.nutrition4;
    document.getElementById("nutrition5").innerHTML = food.nutrition5;
    document.getElementById("nutrition6").innerHTML = food.nutrition6;
    document.getElementById("nutrition6_1").innerHTML = food.nutrition6_1;
    document.getElementById("nutrition6_2").innerHTML = food.nutrition6_2;
  });
});
