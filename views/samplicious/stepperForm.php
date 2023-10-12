<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\samplicious $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div>

    <?php $form = ActiveForm::begin(['id' => 'samplicious-form']); ?>

    <?= $form->field($samplicious, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($samplicious, 'date')->textInput(['autocomplete' => 'off']) ?>
    <!-- <?= $form->field($samplicious, 'date')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd', 'inline' => false]) ?> -->

    <div class="form-group">
        <?= Html::button('Previous', ['class' => 'btn btn-outline-success', 'onClick' => 'previousButton()']) ?>
        <?= Html::button('Submit', ['class' => 'btn btn-success', 'onClick' => 'submitButton()']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>