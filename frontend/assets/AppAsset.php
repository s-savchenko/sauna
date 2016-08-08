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
        'css/reset.css',
        'css/common.css',
        'css/header.css',
        'css/advantages.css',
        'css/rooms.css',
        'css/rooms.css',
        'css/media.css',
        'css/price.css',
        'css/reviews.css',
        'css/map.css',
        'css/footer.css',
        'css/slick.css',
    ];
    public $js = [
        'js/slick.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
