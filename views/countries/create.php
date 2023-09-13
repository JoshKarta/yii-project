<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Countries $model */

$this->title = 'Create Countries';
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$test = 1234

?>
<div class="countries-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($isSuccess)
        $this->registerJs("
                    OpenToast()
                    setTimeout(function() {
                        window.location.href = '" . Yii::$app->urlManager->createUrl(['countries/index']) . "';
                    }, 3000); // 3000 milliseconds (3 seconds)  
                ");

    ?>

    <div class="mt-4 ">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="background-color:white;">
            <div class="d-flex align-items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-check2-circle m-lg-1 " viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                </svg>
                <div class="toast-body">
                    Country added successfully
                </div>
            </div>
        </div>
    </div>

</div>