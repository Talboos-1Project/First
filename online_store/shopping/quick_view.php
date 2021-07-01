<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.minus').click(function () {
      var $input = $(this).parent().find('input');
      var count = parseInt($input.val()) - 1;
      count = count < 1 ? 1 : count;
      $input.val(count);
      $input.change();
      return false;
    });
    $('.plus').click(function () {
      var $input = $(this).parent().find('input');
      $input.val(parseInt($input.val()) + 1);
      $input.change();
      return false;
    });
  });
</script>

<link rel="stylesheet" href="../../css/css_Store/quick_view.css">

<div class="super_container">
    <header class="header" style="display: none;">
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="https://cdn.allbirds.com/image/fetch/q_auto,f_auto/w_1200,f_auto,q_auto,b_rgb:f5f5f5/https://cdn.shopify.com/s/files/1/0204/0483/0283/products/Allbirds_TR_RN_SF_PDP_Kauri_Marine_MED_32c08594-8505-48e6-b49a-401cc69980b8.png?v=1618605575"><img src="https://cdn.allbirds.com/image/fetch/q_auto,f_auto/w_1200,f_auto,q_auto,b_rgb:f5f5f5/https://cdn.shopify.com/s/files/1/0204/0483/0283/products/Allbirds_TR_RN_SF_PDP_Kauri_Marine_MED_32c08594-8505-48e6-b49a-401cc69980b8.png?v=1618605575" alt=""></li>
                        <li data-image="https://cdn.allbirds.com/image/fetch/q_auto,f_auto/w_1200,f_auto,q_auto,b_rgb:f5f5f5/https://cdn.shopify.com/s/files/1/0204/0483/0283/products/Allbirds_TR_RN_SF_PDP_Kauri_Marine_LAT_69becb42-84da-409b-afcf-45280041856a.png?v=1618605575"><img src="https://cdn.allbirds.com/image/fetch/q_auto,f_auto/w_1200,f_auto,q_auto,b_rgb:f5f5f5/https://cdn.shopify.com/s/files/1/0204/0483/0283/products/Allbirds_TR_RN_SF_PDP_Kauri_Marine_LAT_69becb42-84da-409b-afcf-45280041856a.png?v=1618605575" alt=""></li>
                        <li data-image="https://cdn.allbirds.com/image/fetch/q_auto,f_auto/w_1200,f_auto,q_auto,b_rgb:f5f5f5/https://cdn.shopify.com/s/files/1/0204/0483/0283/products/Allbirds_TR_RN_SF_PDP_Kauri_Marine_TOP_2345d6b4-90b2-46ac-ac41-6852c8ade63a.png?v=1618605575"><img src="https://cdn.allbirds.com/image/fetch/q_auto,f_auto/w_1200,f_auto,q_auto,b_rgb:f5f5f5/https://cdn.shopify.com/s/files/1/0204/0483/0283/products/Allbirds_TR_RN_SF_PDP_Kauri_Marine_TOP_2345d6b4-90b2-46ac-ac41-6852c8ade63a.png?v=1618605575" alt=""></li>
                    </ul>
                </div>
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="image_selected"><img src="https://cdn.allbirds.com/image/fetch/q_auto,f_auto/w_1200,f_auto,q_auto,b_rgb:f5f5f5/https://cdn.shopify.com/s/files/1/0204/0483/0283/products/Allbirds_TR_RN_SF_PDP_Kauri_Marine_BTY_3e26dbcc-1a29-4f1c-9954-4ee034dfe515.png?v=1618605575" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../store.php" style="color: #864000;">Home</a></li>
                                <li class="breadcrumb-item"><a href="shopping.php" style="color: #864000">Products</a></li>
                                <li class="breadcrumb-item active">Product CLASSIC</li>
                            </ol>
                        </nav>
                        <div class="product_name">Product description with some details</div>
                        <div class="product-rating"><span class="badge badge-warning"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                        <div> <span class="product_price">75 €</span> <strike class="product_discount"> <span style='color:black'>90 €<span> </strike> </div>
                        <div> <span class="product_saved">You Saved:</span> <span style='color:black'>15 €<span> </div>
                        <hr class="singleline">
                        <div> <span class="product_info">Free Shipping<span><br> <span class="product_info">7 Days easy return policy<span><br> <span class="product_info">Made in Germany<span> </div>
                        <div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="br-dashed">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3"> <img src="https://img.icons8.com/color/48/000000/price-tag.png"> </div>
                                            <div class="col-md-9 col-xs-9">
                                                <div class="pr-info"> <span class="break-all">Get 5% instant discount!</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7"> </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options"><h5>Size Options</h5></span><br> <button class="btn btn-outline-warning btn-sm">EU 41</button> <button class="btn btn-outline-warning btn-sm">EU 42</button> <button class="btn btn-outline-warning btn-sm">EU 43</button> <button class="btn btn-outline-warning btn-sm">EU 44</button> </div>
                                <div class="col-xs-6" style="margin-left: 55px;"> <span class="product_options"><h5>Color Options</h5></span><br> <button class="btn btn-outline-warning btn-sm">Black</button> <button class="btn btn-outline-warning btn-sm">Silver</button> <button class="btn btn-outline-warning btn-sm">White</button> </div>
                            </div>
                        </div>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                              <div class="number" style="margin-right: 15px;">
                                 <h5>Quantity</h5>
	                               <button class="btn btn-secondary btn-sm minus">-</button>
	                               <input class="input-qty" style="height: 30px; width: 30px;" type="text" value="1"/>
	                               <button class="btn btn-secondary btn-sm plus">+</button>
                              </div>
                            </div>
                            <div class="col-xs-6"> <button type="button" class="btn btn-dark shop-button">Add to Cart</button> <button type="button" class="btn btn-dark shop-button">Buy Now</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="col-md-12">
                        <tbody>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Sales Package :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>some information</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Model Number :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>some information</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>some information</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Suitable for :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>some information</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Brand :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>some information</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
