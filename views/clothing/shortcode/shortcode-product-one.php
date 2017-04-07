
        <!-- single product start-->
        <div class="single-product">
            <div class="product-img">
                <? if($item['hot']): ?>
                    <div class="product-label">
                        <div class="new"><?=$item['hot']?></div>
                    </div>
                <? endif; ?>
                <div class="single-prodcut-img  product-overlay pos-rltv">
                    <a href="/product/<?=$item['id']?>"> <img alt="" src="/views/clothing/images/product/<?=$item['image'];?>" class="primary-image"> <img alt="" src="/views/clothing/images/product/<?=$item['image_2'];?>" class="secondary-image"> </a>
                </div>
                <div class="product-icon socile-icon-tooltip text-center">
                    <ul>
                        <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left" data-id="<?=$item['id']?>"><i class="fa fa-cart-plus"></i></a></li>
                        <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                        <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="product-text">
                <div class="prodcut-name"> <a href="/product/<?=$item['id']?>"><?=$item['name'];?></a> </div>
                <div class="prodcut-ratting-price">
                    <? if($item['rating']): ?>
                        <div class="prodcut-ratting">
                            <? for($i = 0; $i < $item['rating']; $i++): ?>
                                <a href="#"><i class="fa fa-star"></i></a>
                            <? endfor; ?>
                            <? for($i = $item['rating']; $i < 5; $i++): ?>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            <? endfor; ?>
                        </div>
                    <? endif; ?>
                    <div class="prodcut-price">
                        <div class="new-price"> $<?=$item['price']?> </div>
                        <div class="old-price"> <del>$250</del> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product end-->