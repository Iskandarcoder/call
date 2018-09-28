<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use backend\models\ListAppeal;
use backend\models\Country;
use backend\models\Region;
use backend\models\Department;
use backend\models\User;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Appeal */
/* @var $form yii\widgets\ActiveForm */

$lang = Yii::$app->language;

$city = [];
if ($model->country_id) {
    $city = Region::find()->where(['country_id' => $model->country_id])->asArray()->all();
}

?>

<!-- Content area -->
<div class="content">

    <!-- Default options -->
    <div class="row">
        <div class="col-md-12">

            <?php $form = ActiveForm::begin(); ?>

            <div class="col-md-3">
                <?= $form->field($model, 'appeal')->dropDownList(
                    ArrayHelper::map(ListAppeal::find()->all(), 'id','name_appeal'),
                    ['prompt'=>'Выберите ...']
                    ) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'passport_data')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'country_id')->dropDownList(
                    ArrayHelper::map(Country::find()->all(), 'id','name'),
                    ['prompt'=>'Выберите ...']
                    ) ?>
            </div>

            <?php // $form->field($model, 'country')->widget(Select2::classname(), [
            //     'data' => ArrayHelper::map(Countries::find()->all(), 'id', 'name'),
            //     'language' => 'ru',
            //     'options' => ['placeholder' => 'Выберите клиент ...'],
            //     'pluginOptions' => [
            //         'allowClear' => true
            //     ],
            // ]);
            ?>    

            <div class="col-md-3">
                <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map($city, 'id','name')) ?>
                
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'work_number')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true]) ?>
            </div>
            <hr>

            <div class="col-md-3">
                <?= $form->field($model, 'name_department')->dropDownList(
                    ArrayHelper::map(Department::find()->all(), 'name','name'),
                    ['prompt'=>'Выберите ...']
                    ) ?>
            </div>

            <div class="col-md-3">
                 <?= $form->field($model, 'responsible')->dropDownList(
                    ArrayHelper::map(User::find()->all(), 'id','last_name'),
                    ['prompt'=>'Выберите ...']
                    ) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'anketa_call')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'question_resolved')->textInput() ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'question_no_resolved')->textInput() ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'process_of_solving')->textInput() ?>
            </div>

            <div class="col-md-12">
                <?= $form->field($model, 'note')->textarea(['rows' => 4]) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'connect')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'no_connect')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'to_email')->textInput() ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'refusal_answer')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'to_mem_email')->textInput() ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'members')->textarea(['rows' => 6]) ?>
            </div>

            <div class="col-md-3">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
<?php
    $this->registerJs("
        $('#appeal-country_id').change(function(){
                var thisid = $(this).val();
                $.ajax({
                  type: 'GET',
                  url: '/appeal/regions',
                  data: {
                  id: thisid,
                  },
                  success: function(data){
                    console.log(data);
                    $('#appeal-city_id').html(data);
                  }
                });
          });
    ");
?>