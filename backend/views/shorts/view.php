<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Shorts */

$this->title = $model->short->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shorts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create'), 'create', ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'language_id',
                'label'=>'Language',
                'value' => $model->language->name
            ],
            [
                'attribute' => 'short_id',
                'label'=>'Title',
                'value' => $model->short->title
            ],
            [
                'attribute' => 'short_id',
                'label'=>'Description',
                'value' => $model->short->description
            ],


        ],
    ]) ?>

</div>
