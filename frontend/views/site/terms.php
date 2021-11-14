<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model \common\models\TermLanguage */

$this->title = Yii::t('app', 'Terms');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terms-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    var_dump($model);
    die();
    ?>
    <div class="row">
        <?php foreach ($model as $key => $item):?>
        <div class="col-md-12 bordered p-2" style="position:relative;">
            <a href="" style="position:absolute; width: 100%; height: 100%;">Hello world</a>
        </div>
        <?php endforeach;?>
    </div>

    <?php Pjax::end(); ?>

</div>
