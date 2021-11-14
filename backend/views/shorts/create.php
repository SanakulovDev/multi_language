<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shorts */

$this->title = Yii::t('app', 'Create Shorts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shorts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shorts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
