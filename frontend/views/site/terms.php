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
    //    var_dump($model);
    //    die();
    ?>
    <div class="row">

        <ul class="list-group">
            <div class="col-md-12 col-12">

                <?php foreach ($model as $key => $item): ?>
                    <a href="#" class="list-group-item list-group-item-action text-start" data-toggle="modal" data-target="#modal<?= $key ?>">
                        <p>
                            <?= $item->term->title ?>
                        </p>
                            <span>
                            <?= $item->term->description ?>
                        </span>
                            <p>
                                <?= $item->term->created_at ?>
                            </p>
                    </a>
                    <!--Modal section-->
                    <div class="modal fade" id="modal<?= $key ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title"><?=$item->term->title?></h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <?= $item->term->description?>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </ul>
    </div>

    <?php Pjax::end(); ?>

</div>
