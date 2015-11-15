<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$piecesAsset = \davidjeddy\pieces\PiecesAsset::register($this);

$this->beginContent('@frontend/views/layouts/_clear.php');

?>
<div class="container-fluid wrap">

    <div class="banner-container hidden-xs banner-container">
        <div class="col-lg-3 hidden-md hidden-sm hidden-xs   l-side-banner"></div>
        <div class="col-lg-6 col-md-12 col-sm-12 m-banner">
            <!-- <img src="<?= $piecesAsset->baseUrl; ?>/images/top-banner-name.png" class="img-responsive" alt="Pieces" /> -->
        </div>
        <div class="col-lg-3 hidden-md hidden-sm hidden-xs   r-side-banner"></div>
    </div>

    <div class="navbar-text visible-xs-inline-block">
        <img src="<?= $piecesAsset->baseUrl; ?>/images/top-banner-name.png" class="img-responsive" alt="Pieces" />
    </div>
    <?php 
    NavBar::begin([
        // 'brandLabel' => Yii::$app->name,
        // 'brandUrl'   => Yii::$app->homeUrl,
        'options'    => ['class' => 'navbar-inverse center'],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items'   => [
            ['label' => Yii::t('frontend', 'Home'),         'url' => ['/site/index']],
            ['label' => Yii::t('frontend', 'Comic'),        'url' => ['/article/index?category_id=1']],
            ['label' => Yii::t('frontend', 'Characters'),   'url' => ['/article/characters']],
            ['label' => Yii::t('frontend', 'Universe'),     'url' => ['/article/pieces-universe']],
            ['label' => Yii::t('frontend', 'Story'),        'url' => ['/article/pieces-of-the-past']],
            ['label' => Yii::t('frontend', 'Film'),         'url' => ['/article/the-film']],
            ['label' => Yii::t('frontend', 'Team'),         'url' => ['/article/article/sick-minds']],
            ['label' => Yii::t('frontend', 'Contact'),      'url' => ['/site/contact']],
        ]
    ]); ?>
    <?php NavBar::end(); ?>

    <div class="content-container">
        <div class="col-lg-2 col-md-1 hidden-sm hidden-xs l-side-content"       ></div>
        <div class="col-lg-8 col-md-10 col-sm-12 cols-xs-12 m-content alpha60"  ><?php echo $content ?></div>
        <div class="col-lg-2 col-md-1 hidden-sm hidden-xs r-side-content"       ></div>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?php echo \Yii::$app->params['companyName']; ?>, <?php echo date('Y') ?></p>
        <p class="pull-right"><?php echo Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endContent() ?>