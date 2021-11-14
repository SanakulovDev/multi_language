<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ShortsLanguage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shorts-language-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'language_id')->textInput() ?>

    <?= $form->field($model, 'short_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
