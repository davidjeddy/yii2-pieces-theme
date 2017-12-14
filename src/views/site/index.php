<?php

use dosamigos\disqus\Comments;

/* @var $this yii\web\View */
$this->title = Yii::$app->name;
$model = \common\models\Article::findOne(['id' => 45]);
?>
<div class="site-index">

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

        <?php
        try {
            echo Comments::widget([
                // see http://help.disqus.com/customer/portal/articles/472098-javascript-configuration-variables
                'identifier' => substr($_SERVER['FRONTEND_URL'], 0, -1) . $_SERVER['REQUEST_URI'],
                'shortname' => 'pieces-compendium',
            ]);
        } catch (\Exception $e) {

        };
        ?>
    </div>
</div>
