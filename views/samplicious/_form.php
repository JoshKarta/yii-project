<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Samplicious $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="samplicious-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput(['autocomplete' => 'off']) ?>
    <!-- <?= $form->field($model, 'date')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd', 'inline' => false]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>