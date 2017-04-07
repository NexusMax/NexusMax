<?php
require_once ROOT . '/views/clothing/header.php';
?>

        <!--breadcumb area start -->
        <div class="breadcumb-area breadcumb-2 overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Blog Details</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="/">Home</a></li>
                    <li class="active">Single Blog</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->

        <!--single about main area are start-->
        <div class="shop-main-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <!--shop sidebar start-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <?php require_once ROOT . '/views/clothing/shortcode/shortcode-single-aside.php';?>
                    </div>
                    <!--shop sidebar end-->

                    <!--main-shop-product start-->
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="single-blog-body">
                            <div class="single-blog sb-2 mb-30">
                                <?php foreach ($oneBlog as $item): ?>
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="/views/clothing/images/blog/<?=$item['image_2'];?>" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><?=$item['title'];?></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i><?=@$item['likes'];?> Like</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i><?=@$item['comments'];?> Comments</a></li>
                                                <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i><?=$item['date_publication'];?></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p><?=$item['description'];?></p>
                                        </div>
                                    </div>
                                    <div class="blockqot mtb-30">
                                        <blockquote><p>There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour. There are many variations of passages of Lorem Ipsum available, but the majorit. There are many variations of passages of Lorem Ipsum available, but the majorit.</p></blockquote>
                                    </div>
                                    <div class="subject">
                               <h5 class="uppercase sb-title">Subject</h5>
                               <ul>
                                   <li><a href="#">Design Concept</a></li>
                                   <li><a href="#">Google Material Design</a></li>
                                   <li><a href="#">Web Template Design</a></li>
                                   <li><a href="#">Themeforest Submit</a></li>
                                   <li><a href="#">Documantation Creation</a></li>
                                   <li><a href="#">Image Selection</a></li>
                               </ul>
                            </div>
                                    <div class="related-post mt-30">
                                       <h5 class="uppercase sb-title">Related Blog</h5>
                                        <div class="row">
                                            <div class="total-blog-3 mb-30">
                                                <?php foreach ($mainBlog as $item): ?>
                                                <div class="col-md-4">
                                                   <div class="single-blog">
                                                       <?php require ROOT . '/views/clothing/shortcode/shortcode-blog-one-item.php'; ?>
                                                   </div>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-area fix mt-20">
                               <h5 class="uppercase sb-title">Comments Area</h5>
                                <div class="comments-body">
                                    <ul>
                                        <li class="signle-comments">
                                            <img src="../images/blog/author.jpg" alt="">
                                            <div class="commets-text">
                                                <h5>JOHN NGUYEN</h5>
                                                <span>July 15 , 2018</span> <span>, at 2:39 am</span>
                                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                            </div>
                                            <div class="replay"><a href="#">Replay</a></div>
                                        </li>
                                        <li class="signle-comments">
                                            <img src="../images/blog/demo.jpg"
                                             alt="">
                                            <div class="commets-text">
                                                <h5>JOHN NGUYEN</h5>
                                                <span>July 15 , 2018</span> <span>, at 2:39 am</span>
                                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                            </div>
                                            <div class="replay"><a href="#">Replay</a></div>
                                        </li>
                                        <li class="signle-comments">
                                            <img src="../images/blog/author.jpg" alt="">
                                            <div class="commets-text">
                                                <h5>JOHN NGUYEN</h5>
                                                <span>July 15 , 2018</span> <span>, at 2:39 am</span>
                                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                            </div>
                                            <div class="replay"><a href="#">Replay</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                    <div class="leave-through-area clearfix mt-40">
                                <h5 class="uppercase sb-title">Leave your thought</h5>
                                <div class="row">
                                     <form action="../mail.php" method="post">
                                          <div class="col-md-6">
                                               <div class="input-box mb-20">
                                                   <input name="name" class="info" placeholder="Name*" type="text">
                                               </div>
                                           </div>
                                          <div class="col-md-6">
                                               <div class="input-box mb-20">
                                                   <input name="name" class="info" placeholder="Email" type="email">
                                               </div>
                                           </div>
                                          <div class="col-md-6">
                                               <div class="input-box mb-20">
                                                   <input name="name" class="info" placeholder="Phone" type="text">
                                               </div>
                                           </div>
                                          <div class="col-md-6">
                                               <div class="input-box mb-20">
                                                   <input name="name" class="info" placeholder="Country" type="text">
                                               </div>
                                           </div>
                                            <div class="col-md-12">
                                                <div class="input-box mb-20">
                                                    <textarea name="message" class="area-tex" placeholder="Your Message*"></textarea>
                                                </div>
                                            </div>
                                          <div class="col-xs-12">
                                               <div class="input-box">
                                                   <input name="submit" class="sbumit-btn" value="Post Commetns" type="submit">
                                               </div>
                                           </div>

                                       </form>
                                </div>
                            </div>
                               </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    <!--main-shop-product start-->
                    </div>
                </div>
            </div>
        </div>
        <!--single about main area are end-->
<?php require_once ROOT . '/views/clothing/footer.php'; ?>