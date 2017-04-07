
            <div class="blog-area pb-70">
                <div class="container">
                    <div class="row">
                          <div class="col-xs-12 text-center">
                               <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                   <h5 class="uppercase">Blog</h5>
                               </div>
                           </div>
                       <div class="total-blog">
                           <?php foreach ($mainBlog as $item):?>
                            <div class="col-md-4">
                               <div class="single-blog">
                                   <?php require ROOT . '/views/clothing/shortcode/shortcode-blog-one-item.php'; ?>
                               </div> 
                            </div>
                           <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
