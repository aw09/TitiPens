<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HistoryTipersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Tipers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-tipers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create History Tipers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idhistori',
            'ordertipers_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
