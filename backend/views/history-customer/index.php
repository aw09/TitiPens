<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HistoryCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create History Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idhistori',
            'ordercustomer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
