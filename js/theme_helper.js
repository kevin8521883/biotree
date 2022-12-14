window.themeHelper = {
  variantOptionsBlock: function(setSelectedVariant, isAddBuy, productPriceRange) {
    new Vue({
     el: '#variant_options',
     delimiters: ['${', '}'],
     data: {
       productApiUrl: '',
     },
     methods: {
       getSelectedDatas: function(variant) {
         setSelectedVariant(variant);
         setVariantDisplay(variant, isAddBuy, productPriceRange);
         // 判斷是否有商品加價購
         if (liquidHelper.hasAddBuyProduct) {
           renderAddToCartBtn();
         }
       },
       getCurrentImage: function(url) {
         $('.product_photo img').attr('src', url);
       },
     },
   });
  },
}


themeHelper.EventBus = new Vue()
