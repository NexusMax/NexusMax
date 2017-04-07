<?php
require_once ROOT . '/views/clothing/header.php';
?>
        
        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Login Register</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="/">Home</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!-- Account Area Start -->
        <div class="account-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-3 col-sm-6 col-xs-12">
                        <form action="#" class="login-side" method="POST">
                            <div class="login-reg">
                                <h3>Login</h3>
                                <div class="input-box mb-20">
                                    <label class="control-label" for="email">E-Mail</label>
                                    <input type="email" placeholder="E-Mail" value="<?=@$_POST['email'];?>" name="email" class="info" id="email">
                                </div>
                                <div class="input-box">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="password" placeholder="Password" value="<?=@$_POST['password'];?>" name="password" class="info" id="password">
                                </div>
                            </div>
                            <div class="frm-action">
                                <div class="input-box tci-box">
                                    <input type="submit" name="submit" class="btn-submit" value="Login">
                                </div>
                                <span>
                             <input class="remr" type="checkbox"> Remember me
                         </span>
                                <a href="#" class="forgotten forg">Forgotten Password</a>
                            </div>
                        </form>
                        <?php if(isset($errors) && is_array($errors)): ?>
                            <?php foreach ($errors as $error): ?>
                                <p> - <?php echo $error; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Area End -->
<?php
require_once ROOT . '/views/clothing/footer.php';
?>