<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Term */
/* @var $language frontend\models\Term */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="term-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row d-flex align-items-center justify-content-center">
        <?php foreach ($language  as $key => $item):?>
            <div class="col-md-3 border ml-2 pl-4 mb-4" id =<?=$key?>>
                <h4><?=$item->short?></h4>
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <a href=<?php if ($key +1 == $item->id)
                        echo '#'.$item->id;
                    else echo '#submit';?> class="btn btn-success"><?= Yii::t('app', 'Next')?></a>
                </div>
                <?= $key?>
            </div>
        <?php endforeach?>
    </div>
    <?= Html::submitButton(Yii::t('app','Save'),['class'=>'btn btn-success', 'id'=>'submit'])?>


    <?php ActiveForm::end(); ?>

</div>
