
<div class="discunt-featured-onsale-area pt-60">
    <div class="container">
        <div class="row">
            <div class="product-area tab-cars-style">
                <div class="title-tab-product-category">
                    <div class="col-md-12 text-center">
                        <ul class="nav mb-40 heading-style-2" role="tablist">
                            <li role="presentation" class="active"><a href="#newarrival" aria-controls="newarrival" role="tab" data-toggle="tab">New Arrival</a></li>
                            <li role="presentation"><a href="#bestsellr" aria-controls="bestsellr" role="tab" data-toggle="tab">Best Seller</a></li>
                            <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer" role="tab" data-toggle="tab">Special Offer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="content-tab-product-category">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="newarrival">
                            <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                <? foreach ($product as $item): ?>
                                    <? if ($item['new_arrival']): ?>
                                        <div class="col-md-3">
                                            <?php require ROOT . '/views/clothing/shortcode/shortcode-product-one.php'?>
                                        </div>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane  fade in" id="bestsellr">
                            <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                <? foreach ($product as $item): ?>
                                    <? if ($item['best_seller']): ?>
                                        <div class="col-md-3">
                                            <?php require ROOT . '/views/clothing/shortcode/shortcode-product-one.php'?>
                                        </div>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane  fade in" id="specialoffer">
                            <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                <? foreach ($product as $item): ?>
                                    <? if ($item['special_offer']): ?>
                                        <div class="col-md-3">
                                            <?php require ROOT . '/views/clothing/shortcode/shortcode-product-one.php'?>
                                        </div>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>