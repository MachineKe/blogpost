<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">
    <p class="text-muted">
        <small>Created At: <b><?= Yii::$app->formatter->asRelativeTime($model->created_at) ?></b>
    By: <?= $model->createdBy ? Html::encode($model->createdBy->username) : '-' ?>
    </small>
    </p>
    <!-- <p class="text-muted">
        <small>Updated At: <b><?= Yii::$app->formatter->asRelativeTime($model->updated_at) ?></b></small>
    </p> -->


    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->id == $model->created_by): ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif; ?>

    <div>
        <?= $model->getEncodedBody(); ?>
    </div>

</div>
