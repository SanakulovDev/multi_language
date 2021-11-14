<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Terms */
/* @var $termLanguage common\models\TermLanguage */
$this->title = Yii::t('app', 'Update Terms: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Terms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="terms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'termLanguage' => $termLanguage
    ]) ?>

</div>
