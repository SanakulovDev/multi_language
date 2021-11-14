<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TermLanguage */

$this->title = Yii::t('app', 'Create Term Language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Term Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
