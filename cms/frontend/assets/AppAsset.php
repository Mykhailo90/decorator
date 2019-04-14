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
        'css/font-awesome.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/all.min.js',
        'js/owl.carousel.min.js',
        'js/theme-scripts.js',
        'js/cbpAnimatedHeader.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
