<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */

// use yii;
// use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Ajax';

$script = <<< JS

jQuery(document).ready(function($) {
       $(".comment-form").submit(function(e) {
            e.preventDefault(); // stopping submitting
            e.stopImmediatePropagation();
            const data = $(this).serializeArray();
            const url = $(this).attr('action');
            console.log(data)
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                data: data,
                success: function (res) {
                    console.log(res)
                    // window.location.href="/site/index"
                }
            })
            .fail(function() {
                console.log("error");
            });
        
            return false
        });
    });

JS;

$this->registerJs($script)

?>

<div class="pt-4">

    <h3 class="text-center">Form submission via Ajax</h3>

    <?php
    $form = ActiveForm::begin([
        'action' => [''],
        'options' => [
            'class' => 'comment-form'
        ]
    ]);
    ?>
    <?= $form->field($model, 'country'); ?>
    <?= $form->field($model, 'city'); ?>


    <?= Html::submitButton("Submit", ['class' => 'btn btn-primary']); ?>

    <?php ActiveForm::end(); ?>
</div>