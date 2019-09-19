@extends('layouts.app.appLayout')

@section('content')

                
                <!--product Details Inner-->
                <div class="product_details_inner left_sidebar ptb-110">
                    <div class="container">
                        <div class="row">
                            <!--Product Tab Style start-->
                            <div class="col-md-12 col-lg-5 col-12">
                                <div class="product-details-img-content">
                                    <div class="product-details-tab">
                                        <div id="img-1" class="zoomWrapper single-zoom">
                                            <a href="#">
                                                <img id="zoom1" src="assets/img/product/pro_details/big-2.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg" alt="big-1">
                                            </a>
                                        </div>
                                        <div class="single-zoom-thumb mt-20">
                                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-2.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                        <img src="assets/img/product/pro_details/pro_sm_1.jpg" alt="zo-th-1"/>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-2.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                        <img src="assets/img/product/pro_details/pro_sm_2.jpg" alt="zo-th-1"/>
                                                    </a>
                                                    
                                                </li>
                                                <li >
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-3.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                        <img src="assets/img/product/pro_details/pro_sm_3.jpg" alt="zo-th-1"/>
                                                    </a>
                                                    
                                                </li>
                                                <li >
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-4.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                        <img src="assets/img/product/pro_details/pro_sm_4.jpg" alt="zo-th-1"/>
                                                    </a>
                                                    
                                                </li>
                                                <li >
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-4.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                        <img src="assets/img/product/pro_details/pro_sm_4.jpg" alt="zo-th-1"/>
                                                    </a>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product Tab Style End-->
                            <div class="col-md-12 col-lg-7 col-12">
                                    <div class="product-details-content">
                                        <h3>Handcrafted Supper Mug</h3>
                                        <div class="rating-number">
                                            <div class="product_rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </div>
                                            <div class="review_count">
                                                <span>2 Ratting (S)</span>
                                            </div>
                                        </div>
                                        <div class="price_amount">
                                            <span class="current_price">$2999.99</span>
                                            <span class="discount_price">-15%</span>
                                            <span class="old_price">$3700.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                                        <div class="product_variant_select">
                                            <div class="select-option-part">
                                                <label>Size*</label>
                                                <select class="nice-select">
                                                    <option value="">- Please Select -</option>
                                                    <option value="">xl</option>
                                                    <option value="">ml</option>
                                                    <option value="">m</option>
                                                    <option value="">sl</option>
                                                </select>
                                            </div>
                                            <div class="select-option-part">
                                                <label>Color*</label>
                                                <select class="nice-select">
                                                    <option value="">- Please Select -</option>
                                                    <option value="">orange</option>
                                                    <option value="">pink</option>
                                                    <option value="">yellow</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single_product_action d-flex align-items-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                            <div class="add_to_cart_btn">
                                                <a href="#">add to cart</a>
                                            </div>
                                            <div class="wishlist">
                                                <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_details_cat_list mt-35">
                                            <div class="categories_label">
                                                <span>Categories:</span>
                                            </div>
                                            <ul>
                                                <li><a href="#">fashion</a></li>
                                                <li><a href="#">electronics</a></li>
                                                <li><a href="#">toys</a></li>
                                                <li><a href="#">food</a></li>
                                                <li><a href="#">jewellery</a></li>
                                            </ul>
                                        </div>
                                        <div class="product_details_tag_list mtb-10">
                                            <div class="tag_label">
                                                <span>Tags : </span>
                                            </div>
                                            <ul>
                                                <li><a href="#">fashion</a></li>
                                                <li><a href="#">electronics</a></li>
                                                <li><a href="#">toys</a></li>
                                                <li><a href="#">food</a></li>
                                                <li><a href="#">jewellery</a></li>
                                            </ul>
                                        </div>
                                        <div class="product-share">
                                            <div class="share_label">
                                                <span>Share :</span>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Product Thumbnail Description Start -->
                        <div class="product_desc_tab_container mt-100 ">

                            <div class="thumb-desc-inner">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="product_desc_tab nav" role="tablist">
                                            <li><a class="active" data-toggle="tab" href="#dtail">Description</a></li>
                                            <li><a data-toggle="tab" href="#review">Reviews 1</a></li>
                                        </ul>
                                        <!-- Product Thumbnail Tab Content Start -->
                                        <div class="tab-content thumb-content mt-30">
                                            <div id="dtail" class="tab-pane fade show active">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut praesentium quibusdam voluptates eaque odio porro velit consequuntur repudiandae neque voluptatibus numquam pariatur autem omnis iure fugit commodi, voluptas sapiente ipsum, iusto, architecto totam libero eligendi incidunt. Maiores quasi aperiam culpa quibusdam ducimus, nemo placeat nihil suscipit dolorum commodi inventore soluta incidunt sint.</p>
                                            </div>
                                            <div id="review" class="tab-pane fade">
                                                <!-- Reviews Start -->
                                                <div class="review">
                                                    <div class="group-title">
                                                        <h2>customer review</h2>
                                                    </div>
                                                    <ul class="review-list">
                                                        <!-- Single Review List Start -->

                                                        <!-- Single Review List Start -->
                                                        <li>
                                                            <span>value</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <label>Posted on 12/20/18</label>
                                                        </li>
                                                        <!-- Single Review List End -->
                                                    </ul>
                                                </div>
                                                <!-- Reviews End -->
                                                <!-- Reviews Start -->
                                                <div class="review mt-20">
                                                    <h2 class="review-title mb-15">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                                                    <p class="review-mini-title">your rating</p>
                                                    <ul class="review-list">
                                                        <!-- Single Review List Start -->
                                                        <li>
                                                            <span>Quality</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <!-- Single Review List End -->
                                                        <!-- Single Review List Start -->
                                                        <li>
                                                            <span>price</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <!-- Single Review List End -->
                                                        <!-- Single Review List Start -->
                                                        <li>
                                                            <span>value</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <!-- Single Review List End -->
                                                    </ul>
                                                    <!-- Reviews Field Start -->
                                                    <div class="riview-field mt-40">
                                                        <div class="review_comment_box_inner">
                                                            <form action="#">
                                                                <div class="form-group">
                                                                    <label class="req" for="sure-name">Name</label>
                                                                    <input type="text" id="sure-name" required="required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="req" for="subject">Title of review</label>
                                                                    <input type="text"  id="subject" required="required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="req" for="comments">Your Review</label>
                                                                    <textarea rows="5" id="comments" required="required"></textarea>
                                                                </div>
                                                                <button type="submit" class="customer-btn">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Reviews Field Start -->
                                                </div>
                                                <!-- Reviews End -->
                                            </div>
                                        </div>
                                        <!-- Product Thumbnail Tab Content End -->
                                    </div>
                                </div>
                                <!-- Row End -->
                            </div>
                        </div>
                         <!--Realted Product section start-->
                        <div class="related_product_section mt-100">

                            <div class="row">
                                <div class="col-12">
                                    <div class="section_title">
                                        <h2>Related Product</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row related_product_guttters owl-carousel mt-60">
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single__product">
                                        <div class="produc_thumb">
                                            <a href="#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                        </div>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            </div>
                                            <div class="product__desc">
                                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                <div class="price_amount">
                                                    <span class="current_price">$2999.99</span>
                                                    <span class="discount_price">-08%</span>
                                                    <span class="old_price">$3700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Realted Product section end-->
                    </div>
                </div>
                <!--product Details End-->
@endsection


                
                
               
           

