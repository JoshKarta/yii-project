<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Samplicious $model */

$this->title = 'Update Samplicious: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sampliciouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="samplicious-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
