<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Users $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div>

    <?php $form = ActiveForm::begin([
        'action' => '/users/create',
        'id' => 'personalInfoForm'
    ]); ?>

    <?= $form->field($users, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::button('Next', ['class' => 'btn btn-outline-success next-button', 'onCLick' => 'nextButton("personalInfoForm","countriesForm")', 'data-step' => '1']) ?>
        <!-- <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?> -->
    </div>

    <?php ActiveForm::end(); ?>

</div>