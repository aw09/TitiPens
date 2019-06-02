<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderItemCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Item Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-item-customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Item Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idorderitem',
            'ordercustomer_id',
            'menuwarung_id',
            'jumlah',
            'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
