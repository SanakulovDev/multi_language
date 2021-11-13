<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Term */
/* @var $termLanguage frontend\models\Language */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="term-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="row d-flex align-items-center justify-content-center">

            <div class="col-md-4 border ml-2 pl-4 mb-4" id="card-item">

                <h4><?= Yii::t('app','Add item ')?></h4>
                <?= $form->field($termLanguage,'language_id')->dropDownList(\frontend\models\Language::selectList(),['promt'=>'Select a language'])?>
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app','Save'),['class'=>'btn btn-success', 'id'=>'submit'])?>
                </div>
            </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
