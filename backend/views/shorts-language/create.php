<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ShortsLanguage */

$this->title = Yii::t('app', 'Create Shorts Language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shorts Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shorts-language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
