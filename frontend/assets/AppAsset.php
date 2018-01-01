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
        'css/bootstrap.css',
        'css/style.css',
        'css/component.css',
        'css/flexslider.css',
        'css/owl.carousel.css',
        ];
    public $js = [
//        'js/jquery.min.js',
//        'js/main.js',
//        'js/bootstrap-3.1.1.min.js',
//        'js/simpleCart.min.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
