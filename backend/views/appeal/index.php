<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppealSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appeals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Appeal', ['value'=>Url::to(['appeal/create']),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>
    <?php
        Modal::begin([
                'header'=>'<h4>Appeal</h4>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]);

            echo "<div id='modalContent'></div>";
        Modal::end();
    ?>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'time_to_call',
            'appeal',
            'complaint',
            'redirection',
            //'description:ntext',
            'surname',
            'name',
            //'country',
            //'city',
            'work_number',
            //'mobile_number',
            'passport_data',
            //'name_department',
            //'surname_responsible',
            //'name_responsible',
            //'position',
            //'ext_number',
            //'number_telephone',
            //'email:email',
            //'anketa_call',
            //'question_resolved',
            //'question_no_resolved',
            //'process_of_solving',
            //'note:ntext',
            //'resp_operator',
            //'connect',
            //'no_connect',
            //'to_email:email',
            //'refusal_answer',
            //'to_mem_email:email',
            //'members:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
