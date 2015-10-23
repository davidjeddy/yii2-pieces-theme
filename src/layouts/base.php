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

    <?php 
    NavBar::begin([
        // 'brandLabel' => Yii::$app->name,
        // 'brandUrl'   => Yii::$app->homeUrl,
        'options'    => ['class' => 'navbar-inverse center'],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items'   => [
            ['label' => Yii::t('frontend', 'Home'),         'url' => ['/']],
            // ['label' => Yii::t('frontend', 'Home'),      'url' => ['/site/index']],
            // ['label' => Yii::t('frontend', 'About'),     'url' => ['/page/view', 'slug'=>'about']],
            // ['label' => Yii::t('frontend', 'Articles'),  'url' => ['/article/index']],
            ['label' => Yii::t('frontend', 'Episodes'),     'url' => ['/article/index?category_id=1']],
            ['label' => Yii::t('frontend', 'Characters'),   'url' => ['/article/index?category_id=2']],
            ['label' => Yii::t('frontend', 'Universe'),     'url' => ['/article/index?category_id=3']],
            ['label' => Yii::t('frontend', 'Story'),        'url' => ['/article/index?category_id=4']],
            ['label' => Yii::t('frontend', 'Film'),         'url' => ['/article/index?category_id=5']],
            ['label' => Yii::t('frontend', 'Team'),         'url' => ['/article/index?category_id=6']],
            ['label' => Yii::t('frontend', 'Contact'),      'url' => ['/site/contact']],
            // ['label' => Yii::t('frontend', 'Signup'),    'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
            // ['label' => Yii::t('frontend', 'Login'),     'url' => ['/user/sign-in/login'], 'visible'=>Yii::$app->user->isGuest],
            /* [
                'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
                'visible'=>!Yii::$app->user->isGuest,
                'items'=>[
                    [
                        'label' => Yii::t('frontend', 'Settings'),
                        'url' => ['/user/default/index']
                    ],
                    [
                        'label' => Yii::t('frontend', 'Backend'),
                        'url' => Yii::getAlias('@backendUrl'),
                        'visible'=>Yii::$app->user->can('manager')
                    ],
                    [
                        'label' => Yii::t('frontend', 'Logout'),
                        'url' => ['/user/sign-in/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ]
                ]
            ],
            [
                'label'=>Yii::t('frontend', 'Language'),
                'items'=>array_map(function ($code) {
                    return [
                        'label' => Yii::$app->params['availableLocales'][$code],
                        'url' => ['/site/set-locale', 'locale'=>$code],
                        'active' => Yii::$app->language === $code
                    ];
                }, array_keys(Yii::$app->params['availableLocales']))
            ] */
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