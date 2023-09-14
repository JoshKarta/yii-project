<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Countries $model */

$this->title = 'Update: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'country' => $model->country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="countries-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
