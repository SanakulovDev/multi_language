<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Terms */
/* @var $termLanguage common\models\TermLanguage */
/* @var $form yii\widgets\ActiveForm */
$langList = \common\models\Language::selectList();
?>

<div class="terms-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($termLanguage,'language_id')->dropDownList($langList,['prompt'=>'Select a language'])?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
