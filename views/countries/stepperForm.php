<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Countries $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="">

    <?php $form = ActiveForm::begin(['action' => '/countries/create', 'id' => 'countriesForm']); ?>

    <div class="row">
        <?= $form->field($countries, 'country')->textInput(['maxlength' => true]) ?>

        <?= $form->field($countries, 'city')->textInput(['maxlength' => true]) ?>

    </div>

    <div class="form-group">
        <?= Html::button('Previous', ['class' => 'btn btn-outline-success previous-button', 'onClick' => 'previousButton("countriesForm","personalInfoForm")']) ?>
        <?= Html::button('Next', ['class' => 'btn btn-outline-success', 'onClick' => 'nextButton("countriesForm", "sampliciousForm")']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>