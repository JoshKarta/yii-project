<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Samplicious $model */

$this->title = 'Create Samplicious';
$this->params['breadcrumbs'][] = ['label' => 'Sampliciouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="samplicious-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
