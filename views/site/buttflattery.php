<?php

/** @var yii\web\View $this */

use buttflattery\formwizard\FormWizard;
use yii\helpers\Html;

$this->title = 'Buttflattery Stepper';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <code><?= __FILE__ ?></code>

    <?= FormWizard::widget([
        // 'formOptions' => 'method',
        'theme' => FormWizard::THEME_CIRCLES,
        'steps' => [
            [
                'model' => $model,
                'title' => 'My Shoots',
                'description' => 'Add your shoots',
                'formInfoText' => 'Fill all fields'
            ],
            // [
            //     'model' => $countries,
            //     'title' => 'Shoot Tags',
            //     'description' => 'Add your shoot tags',
            //     'formInfoText' => 'Fill all fields'
            // ],
        ]
    ]); ?>
</div>