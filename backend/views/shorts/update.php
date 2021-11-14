<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shorts */
/* @var $shortLanguage common\models\ShortsLanguage */
$this->title = Yii::t('app', 'Update Shorts: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shorts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'shortLanguage' => $shortLanguage
    ]) ?>

</div>
