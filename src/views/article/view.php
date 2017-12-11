<?php

use dosamigos\disqus\Comments;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

?>
<div class="content">
    <article class="article-item">

        <?php echo $model->body ?>

        <?php if (!empty($model->articleAttachments)): ?>
            <h3><?php echo Yii::t('frontend', 'Attachments') ?></h3>
            <ul id="article-attachments">
                <?php foreach ($model->articleAttachments as $attachment): ?>
                    <li>
                        <?php echo \yii\helpers\Html::a(
                            $attachment->name,
                            ['attachment-download', 'id' => $attachment->id])
                        ?>
                        (<?php echo Yii::$app->formatter->asSize($attachment->size) ?>)
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </article>

    <div class="row">
        <?php
        // get parent category_id
        $parent_cat_id = \davidjeddy\articlecategory\models\ArticleCategory::find()
            ->andWhere(['id' => $model->category_id])
            ->andWhere(['parent_id' => 1])
            ->one();

        // does the current category have children AND
        // is the current categoery a child of 'comic'? If yes pagination per category_id, else skip paginateion
        if ($parent_cat_id) {
            $prev = $model->getNextOrPrev($model->category_id, $model->published_at, 'DESC', 'published_at');
            $next = $model->getNextOrPrev($model->category_id, $model->published_at, 'ASC', 'published_at');

            // prev. exists
            if (!empty($prev)) {
                echo '<div class="col-xs-3 text-left"><h2><a href="' . ($prev['slug'] ? $prev['slug'] : NULL) . '" class="prevnext">Prev.</a></h2></div>';
            };
            // one or the other do not
            if (!empty($prev) && empty($next) || empty($prev) && !empty($next)) {
                echo '<div class="col-xs-9 text-center"></div>';
            } elseif (!empty($prev) && !empty($next)) {
                // both exits
                echo '<div class="col-xs-6 text-center"></div>';
            }
            // next exists
            if (!empty($next)) {
                echo '<div class="col-xs-3 text-right"><h2><a href="' . ($next['slug'] ? $next['slug'] : NULL) . '" class="prevnext">Next</a></h2></div>';
            };
        };
        ?>
    </div>

    <?php echo Comments::widget([
        // see http://help.disqus.com/customer/portal/articles/472098-javascript-configuration-variables
        'identifier' => env('FRONTEND_HOST_INFO') .'/' . $_SERVER['REQUEST_URI'],
        'shortname'  => 'pieces-compendium',
    ]); ?>
</div>