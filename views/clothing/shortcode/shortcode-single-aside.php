<div class="shop-sidebar">
    <!--single aside start-->
    <aside class="single-aside search-aside search-box">
        <form action="#">
            <div class="input-box">
                <input class="single-input" placeholder="Search...." type="text">
                <button class="src-btn sb-2"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </aside>
    <!--single aside end-->

    <!--single aside start-->
    <aside class="single-aside catagories-aside">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">categories</h5>
        </div>
        <div id="cat-treeview" class="product-cat">
            <ul>
                <?php foreach($categoryList as $item): ?>
                    <li class="closed <?php if($item['id'] === @$idCategory) echo 'active';?>"><a href="/category/<?=$item['id'];?>"><?=$item['name']?> (05)</a>
                        <ul>
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Shirt</a></li>
                            <li><a href="#">Pant</a></li>
                            <li><a href="#">Shoe</a></li>
                            <li><a href="#">Gifts</a></li>
                        </ul>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </aside>
    <!--single aside end-->
<?php if(@$product): ?>
    <!--single aside start-->
    <aside class="single-aside price-aside fix">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">price</h5>
        </div>
        <div class="price_filter">
            <div id="slider-range"></div>
            <div class="price_slider_amount">
                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                <input type="submit" value="Filter" />
            </div>
        </div>
    </aside>
    <!--single aside end-->

    <!--single aside start-->
    <aside class="single-aside color-aside">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">Color</h5>
        </div>
        <ul class="color-filter mt-30">
            <li><a href="#" class="color-1"></a></li>
            <li><a href="#" class="color-2 active"></a></li>
            <li><a href="#" class="color-3"></a></li>
            <li><a href="#" class="color-4"></a></li>
            <li><a href="#" class="color-5"></a></li>
            <li><a href="#" class="color-6"></a></li>
            <li><a href="#" class="color-7"></a></li>
            <li><a href="#" class="color-8"></a></li>
            <li><a href="#" class="color-9"></a></li>
        </ul>
    </aside>
    <!--single aside end-->

    <!--single aside start-->
    <aside class="single-aside size-aside">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">Size Option</h5>
        </div>
        <ul class="size-filter mt-30">
            <li><a href="#" class="size-s">S</a></li>
            <li><a href="#" class="size-m">M</a></li>
            <li><a href="#" class="size-l">L</a></li>
            <li><a href="#" class="size-xl">XL</a></li>
            <li><a href="#" class="size-xxl">XXL</a></li>
        </ul>
    </aside>
<? endif; ?>
    <!--single aside start-->
    <aside class="single-aside tag-aside">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">Product Tags</h5>
        </div>
        <ul class="tag-filter mt-30">
            <li><a href="#">Fashion</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Winter</a></li>
            <li><a href="#">Street Style</a></li>
            <li><a href="#">Style</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Collection</a></li>
            <li><a href="#">Spring 2016</a></li>
        </ul>
    </aside>
    <!--single aside end-->

    <!--single aside start-->
    <aside class="single-aside product-aside">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">Recent Product</h5>
        </div>
        <div class="recent-prodcut-wraper total-rectnt-slider">
            <div class="single-rectnt-slider">
                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp01.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp02.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->

                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp03.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp04.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->

                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp02.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp03.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->

                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp04.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp01.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->
            </div>
            <div class="single-rectnt-slider">
                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp01.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp02.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->

                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp03.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp04.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->

                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp02.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp03.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->

                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img  product-overlay pos-rltv">
                            <a href="single-product"> <img alt="" src="/views/clothing/images/product/rp04.jpg" class="primary-image"> <img alt="" src="/views/clothing/images/product/rp01.jpg" class="secondary-image"> </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name"> <a href="single-product">Copenhagen Spitfire Chair</a> </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star"></i></a> <a href="#"><i class="fa fa-star-o"></i></a> </div>
                            <div class="prodcut-price">
                                <div class="new-price"> $220 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->
            </div>
        </div>

    </aside>
    <!--single aside end-->

    <!--single aside start-->
    <aside class="single-aside add-aside">
        <a href="single-product"><img src="/views/clothing/images/banner/add.jpg" alt=""></a>
    </aside>
    <!--single aside end-->
</div>