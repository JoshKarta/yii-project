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
        <?= Html::button('Previous', ['class' => 'btn btn-outline-success', 'id' => 'prevSampBtn', 'onClick' => 'prevButton()']) ?>
        <?= Html::button('Submit', ['class' => 'btn btn-success', 'id' => 'submitBtn', 'onClick' => 'sendBtn()']) ?>
        <!-- <?= Html::submitButton('Submit', ['class' => 'btn btn-success', 'id' => 'submitFormBtn']) ?> -->
    </div>

    <?php ActiveForm::end(); ?>

</div>