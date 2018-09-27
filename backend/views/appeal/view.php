<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Appeal */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Appeals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appeal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'time_to_call',
            'appeal',
            'complaint',
            'redirection',
            'description:ntext',
            'surname',
            'name',
            'country',
            'city',
            'work_number',
            'mobile_number',
            'passport_data',
            'name_department',
            'surname_responsible',
            'name_responsible',
            'position',
            'ext_number',
            'number_telephone',
            'email:email',
            'anketa_call',
            'question_resolved',
            'question_no_resolved',
            'process_of_solving',
            'note:ntext',
            'resp_operator',
            'connect',
            'no_connect',
            'to_email:email',
            'refusal_answer',
            'to_mem_email:email',
            'members:ntext',
        ],
    ]) ?>

</div>
