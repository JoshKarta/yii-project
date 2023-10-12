<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Stepper';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <code><?= __FILE__ ?></code>

    <div class="mt-5">
        <div id="stepProgressBar">
            <div class="step">
                <div class="bullet current">1</div>
                <p>Step 1</p>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="bullet">2</div>
                <p>Step 1</p>
            </div>
        </div>

        <div>
            <div id="form-countries">
                <?= $this->render('@app/views/countries/stepperForm', [
                    'countries' => $countries,
                ]) ?>
            </div>
            <div id="form-samplicious" style="display: none;">
                <?= $this->render('@app/views/samplicious/stepperForm', [
                    'samplicious' => $samplicious,
                ]) ?>
            </div>
        </div>
    </div>
</div>