<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Countries $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="countries-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="container">
        <div class="row">
            <div class="col"><?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?></div>
            <div class="col"><?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?></div>
        </div>
        
        <div class="form-group">
            <?= Html::submitButton('Add', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>