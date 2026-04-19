<?php

namespace davidjeddy\pieces;

use yii;
use yii\web\AssetBundle;

/**
 *
 * @author David Eddy <me@davidjeddy.com>
 * @since 0.0.5
 */
class PiecesAsset extends AssetBundle
{
    public $sourcePath = '@vendor/davidjeddy/yii2-pieces-theme/src/assets';

    public $css = [
        'css/pieces.css',
    ];

    public $js = [];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

        'common\assets\Html5shiv',
    ];

    public function init()
    {
        parent::init();

        if (\Yii::$app->request->getUrl() === '/article/characters') {
            $this->js = array_merge(
                $this->js,
                ['js/charMap.js']
            );
        }

        if (\Yii::$app->request->getUrl() === '/article/comic') {
            $this->js = array_merge(
                $this->js,
                ['js/comicMap.js']
            );
        }
    }
}
