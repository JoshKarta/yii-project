<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Countries $model */

$this->title = 'Create Countries';
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countries-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
        if ($isSuccess) {
            $this->registerJs("
                OpenToast();
                setTimeout(function(){
                    window.location.href = '" . Yii::$app->urlManager->createUrl(['countries/index']) . "';
                }, 3000)
            ");
        }
    ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


    <!-- Toast -->
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:white;">
            <div class="d-flex align-items-center bg-bg-success-subtle ">
                <div class="toast-body">
                    Country added successfully
                </div>
            </div>
        </div>
    </div>

</div>