<?php

use app\models\Countries;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CountriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countries-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <!-- <?php 
    echo $this->render('_search', ['model' => $searchModel]); 
    ?> -->

    
    <div class="mt-4 ">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'columns' => [
                // ['class' => 'yii\grid\SerialColumn'],
        
                'id',
                'country',
                'city',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Countries $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>


    <p>
        <?= Html::a('Create Countries', ['create'], ['class' => 'btn btn-outline-primary']) ?>
    </p>

</div>
