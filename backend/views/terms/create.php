<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Terms */
/* @var $termLanguage common\models\TermLanguage */

$this->title = Yii::t('app', 'Create Terms');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Terms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'termLanguage' => $termLanguage
    ]) ?>

</div>
