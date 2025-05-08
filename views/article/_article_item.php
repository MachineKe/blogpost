<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

/* @var $model app\models\Article */
?>

<?php if (isset($index) && $index > 0) echo '<hr>'; ?>
<div class="article-item">
    <a href="<?= Url::to(['article/view', 'slug' => $model->slug]) ?>">
        <h3><?= Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?= StringHelper::truncateWords(Html::encode($model->body), 50) ?>
    </div>
</div>
