<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700',
        'css/style.css',
        'css/owl.carousel.css',
        'css/owl.carousel.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/modernizr.custom.28468.js',
        'js/jquery.cslider.js',
        'js/owl.carousel.js',
        'js/move-top.js',
        'js/easing.js',
        'js/responsive.menu.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
