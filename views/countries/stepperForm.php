<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Countries $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="">

    <?php $form = ActiveForm::begin(['id' => 'countries-form']); ?>

    <div class="row">
        <?= $form->field($countries, 'country')->textInput(['maxlength' => true]) ?>

        <?= $form->field($countries, 'city')->textInput(['maxlength' => true]) ?>

        <?= $form->field($countries, 'user_id')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <?= Html::button('Next', ['class' => 'btn btn-outline-success', 'onClick' => 'nextButton()']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>