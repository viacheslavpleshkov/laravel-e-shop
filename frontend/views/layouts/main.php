<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script src="js/jquery.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <script src="js/simpleCart.min.js"> </script>
    <?php $this->head() ?>
</head>
<body>
<!-- header-section-starts -->
<div class="header">
    <div class="header-top-strip">
        <div class="container">
            <div class="header-top-left">
                <ul>
                    <li><a href="/site/login"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
                    <li><a href="/site/signup"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
                </ul>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a href="/"><span>E</span> -Shop</a></h1>
                </div>
            </div>
            <!--/.navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/site/men">MEN</a></li>
                    <li><a href="/site/women">WOMEN</a></li>
                    <li><a href="/site/kids">KIDS</a></li>
                    <li><a href="/site/typo">TYPO</a></li>
                    <li><a href="/site/contact">CONTACT</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
</div>

<?= Alert::widget() ?>
<?= $content ?>

<!-- content-section-ends-here -->
<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>JOIN OUR MAILING LIST</h6>
            <div class="sub-left-right">
                <form>
                    <input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
                    <input type="submit" value="SUBSCRIBE" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="span_of_4">
                <div class="col-md-3 span1_of_4">
                    <h4>Shop</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>help</h4>
                    <ul class="f_nav">
                        <li><a href="#">frequently asked  questions</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>account</h4>
                    <ul class="f_nav">
                        <li><a href="account.html">login</a></li>
                        <li><a href="register.html">create an account</a></li>
                        <li><a href="#">create wishlist</a></li>
                        <li><a href="checkout.html">my shopping bag</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">create wishlist</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>popular</h4>
                    <ul class="f_nav">
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">kids</a></li>
                        <li><a href="#">brands</a></li>
                        <li><a href="#">trends</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">style videos</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="cards text-center">
            <img src="images/cards.jpg" alt="" />
        </div>
        <div class="copyright text-center">
            <p>Yii2-E-Shop ©<?php echo date('Y')?>. All rights reserved.</p>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
