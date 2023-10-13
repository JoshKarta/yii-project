<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Stepper';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs("")

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <code><?= __FILE__ ?></code>

    <div class="mt-5">
        <div id="stepProgressBar">
            <div class="step">
                <div class="bullet" data-type="1">1</div>
                <p>Personal</p>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="bullet">2</div>
                <p>Countries</p>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="bullet">3</div>
                <p>Samplicious</p>
            </div>
        </div>

        <div>
            <div id="personalInfoForm">
                <?= $this->render('@app/views/users/_form', [
                    'users' => $users,
                ]) ?>
            </div>
            <div id="countriesForm" style="display: none;">
                <?= $this->render('@app/views/countries/stepperForm', [
                    'countries' => $countries,
                ]) ?>
            </div>
            <div id="sampliciousForm" style="display: none;">
                <?= $this->render('@app/views/samplicious/stepperForm', [
                    'samplicious' => $samplicious,
                ]) ?>
            </div>
        </div>
    </div>
</div>