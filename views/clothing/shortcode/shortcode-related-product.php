
            <div class="new-arrival-area ptb-70">
            <div class="container">
                <div class="row">
                   <div class="col-xs-12 text-center">
                       <div class="heading-title heading-style pos-rltv mb-50 text-center">
                           <h5 class="uppercase">New Arrival</h5>
                       </div>
                   </div>
                   <div class="clearfix"></div>
                    <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                        <? foreach ($product as $item): ?>
                            <div class="col-md-3">
                            <?php require ROOT . '/views/clothing/shortcode/shortcode-product-one.php'?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>