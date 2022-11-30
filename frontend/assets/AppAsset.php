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
//        'css/site.css',
        'web/css/fl-bigmug-line.css',
        'web/css/fonts.css',
        'web/css/style.css',
        'web/css/bootstrap.css',
        'web/css/bootstrap-grid.css',
        'web/css/bootstrap-reboot.css',


    ];
    public $js = [
        'web/js/core.min.js',
        'web/js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
