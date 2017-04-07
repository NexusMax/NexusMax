<?php require_once ROOT . '/views/clothing/header.php'; ?>
        
        <!--breadcumb area start -->
        <div class="breadcumb-area breadcumb-2 overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Blog Details</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="/">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!--blog main area are start-->
        <div class="shop-main-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <!--shop sidebar start-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <?php require_once ROOT . '/views/clothing/shortcode/shortcode-single-aside.php'; ?>
                    </div>
                    <!--shop sidebar end-->
                    
                    <!--main-shop-product start-->
                    <div class="col-md-9 col-sm-8 col-xs-12">
                       <div class="row">
                            <div class="blog-wraper">
                            <?php foreach($mainBlog as $item): ?>
                            <div class="col-md-6 hidden-sm col-xs-12">
                                <div class="single-blog sb-2 mb-30">
                                    <?php require ROOT . '/views/clothing/shortcode/shortcode-blog-one-item.php'; ?>
                                    </div>
                                </div>
                           <?php endforeach; ?>
                        </div>
                        </div>
                        <!--pagination start-->
                        <?php require_once ROOT . '/views/clothing/shortcode/shortcode-pagination.php'; ?>
                        <!--pagination end-->
                    </div>

                    <!--main-shop-product start-->
                </div>
            </div>
        </div>
        <!--blog main area are end-->
<?php require_once ROOT . '/views/clothing/footer.php'; ?>