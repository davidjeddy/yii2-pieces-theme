<?php

namespace davidjeddy\theme\Pieces;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $baseUrl    = '@web';
    public $sourcePath = '@vendor/davidjeddy/pieces-theme/src';
    
    public $css=[
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/prettyPhoto.css',
    ];
    
    public $js=[
        'js/main.js',
        'js/html5shiv.js',
        'js/jquery.isotope.min.js',
        'js/jquery.prettyPhoto.js',
        'js/main.js',
        'js/respond.min.js',
    ];
    
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        //'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init() {
        parent::init();
    }
}
