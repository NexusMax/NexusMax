<?php
require_once ROOT . '/views/clothing/header.php';
?>
        
        <!--breadcumb area start -->
        <div class="breadcumb-area breadcumb-3 overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Contact Details</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="/">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!--map area start-->
        <div class="map-area">
            <div id="googleMap"></div>
        </div>
        <!--map area end-->
        
        <!--contact info are start-->
        <div class="contact-info ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <?php if($result): ?>
                            <p>Сообщение отправлено! </p>
                        <?php else: ?>
                         <div class="row">
                             <form id="contact-form" action="" method="post">
                                  <div class="col-md-6">
                                       <div class="input-box mb-20">
                                           <input name="name" class="info" placeholder="Name*" type="text" value="<?=@$_POST['name'];?>">
                                       </div>
                                   </div>
                                  <div class="col-md-6">
                                       <div class="input-box mb-20">
                                           <input name="email" class="info" placeholder="Email" type="email" value="<?=@$_POST['email'];?>" required>
                                       </div>
                                   </div>
                                  <div class="col-md-6">
                                       <div class="input-box mb-20">
                                           <input name="phone" class="info" placeholder="Phone" type="text" value="<?=@$_POST['phone'];?>">
                                       </div>
                                   </div>
                                  <div class="col-md-6">
                                       <div class="input-box mb-20">
                                           <input name="country" class="info" placeholder="Country" type="text" value="<?=@$_POST['country'];?>">
                                       </div>
                                   </div>
                                    <div class="col-md-12">
                                        <div class="input-box mb-20">
                                            <textarea name="message" class="area-tex" placeholder="Your Message*" value="<?=@$_POST['message'];?>" required></textarea>
                                        </div>
                                    </div>
                                    <p class="form-messege"></p>
                                  <div class="col-xs-12">
                                       <div class="input-box">
                                           <input name="submit" class="sbumit-btn" value="Submit" type="submit"> 
                                       </div>
                                   </div>
                                   
                               </form>
                         </div>
                            <?php if(isset($errors) && is_array($errors)): ?>
                                <?php foreach ($errors as $error): ?>
                                    <p><?=$error;?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-footer contact-us contact-us-2">
                            <div class="heading-title text-center mb-50">
                                <h5 class="uppercase">Contact Info</h5> 
                                </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                                    <div class="contact-text">
                                        <p><span>+11 (019) 25184203</span> <span>+11 (018) 50950555</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                    <div class="contact-text">
                                        <p><span><a href="#">company@gmail.com</a></span> <span><a href="#">admin@devitems.com</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                    <div class="contact-text">
                                        <p><span>777, Seventh Streeth, Rampura,</span> <span>Dhaka, Bangladesh</span></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-icon-wraper mt-25">
                                <div class="social-icon socile-icon-style-1">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google-glass"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-blogger"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                       <div class="pos-rltv">
                            <div class="contact-des">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact info are end-->
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-IIoucJ-70FQg6xZsORjQCUPHCVj9GV4"></script>
    <script src="views/clothing/js/google-map.js"></script>
<?php
require_once ROOT . '/views/clothing/footer.php';
?>