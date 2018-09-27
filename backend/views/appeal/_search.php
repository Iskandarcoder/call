<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppealSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appeal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'time_to_call') ?>

    <?= $form->field($model, 'appeal') ?>

    <?= $form->field($model, 'complaint') ?>

    <?= $form->field($model, 'redirection') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'surname') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'work_number') ?>

    <?php // echo $form->field($model, 'mobile_number') ?>

    <?php // echo $form->field($model, 'passport_data') ?>

    <?php // echo $form->field($model, 'name_department') ?>

    <?php // echo $form->field($model, 'surname_responsible') ?>

    <?php // echo $form->field($model, 'name_responsible') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'ext_number') ?>

    <?php // echo $form->field($model, 'number_telephone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'anketa_call') ?>

    <?php // echo $form->field($model, 'question_resolved') ?>

    <?php // echo $form->field($model, 'question_no_resolved') ?>

    <?php // echo $form->field($model, 'process_of_solving') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'resp_operator') ?>

    <?php // echo $form->field($model, 'connect') ?>

    <?php // echo $form->field($model, 'no_connect') ?>

    <?php // echo $form->field($model, 'to_email') ?>

    <?php // echo $form->field($model, 'refusal_answer') ?>

    <?php // echo $form->field($model, 'to_mem_email') ?>

    <?php // echo $form->field($model, 'members') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
