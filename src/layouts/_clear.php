<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

\frontend\assets\FrontendAsset::register($this);

$piecesAsset = \davidjeddy\pieces\PiecesAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <?php echo Html::csrfMetaTags() ?>

        <link rel="shortcut icon" type="image/png"      href="<?= $piecesAsset->baseUrl; ?>/favicon/favicon-16x16.png" />

        <link rel="manifest" href="/manifest.json">
        <link rel="apple-touch-icon"    sizes="57x57"   href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-57x57.png"  />
        <link rel="apple-touch-icon"    sizes="60x60"   href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-60x60.png"  />
        <link rel="apple-touch-icon"    sizes="72x72"   href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-72x72.png"  />
        <link rel="apple-touch-icon"    sizes="76x76"   href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-76x76.png"  />
        <link rel="apple-touch-icon"    sizes="114x114" href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-114x114.png"/>
        <link rel="apple-touch-icon"    sizes="120x120" href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-120x120.png"/>
        <link rel="apple-touch-icon"    sizes="144x144" href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-144x144.png"/>
        <link rel="apple-touch-icon"    sizes="152x152" href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-152x152.png"/>
        <link rel="apple-touch-icon"    sizes="180x180" href="<?= $piecesAsset->baseUrl; ?>/favicon/apple-icon-180x180.png"/>
        <link rel="icon"                sizes="192x192" href="<?= $piecesAsset->baseUrl; ?>/favicon/android-icon-192x192.png" type="image/png" />
        <link rel="icon"                sizes="32x32"   href="<?= $piecesAsset->baseUrl; ?>/favicon/favicon-32x32.png"        type="image/png" />
        <link rel="icon"                sizes="96x96"   href="<?= $piecesAsset->baseUrl; ?>/favicon/favicon-96x96.png"        type="image/png" />
        <link rel="icon"                sizes="16x16"   href="<?= $piecesAsset->baseUrl; ?>/favicon/favicon-16x16.png"        type="image/png" />

        <meta name="msapplication-TileColor"            content="#000000" />
        <meta name="msapplication-TileImage"            content="<?= $piecesAsset->baseUrl; ?>/favicon/ms-icon-144x144.png"/ß>

        <meta name="theme-color"                        content="#000000" />
    </head>
    <body>
        <?php $this->beginBody() ?>
            <?php echo $content ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>