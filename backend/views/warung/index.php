<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WarungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Warung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idwarung',
            'nama',
            'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
