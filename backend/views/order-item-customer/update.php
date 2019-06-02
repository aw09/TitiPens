<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderItemCustomer */

$this->title = 'Update Order Item Customer: ' . $model->idorderitem;
$this->params['breadcrumbs'][] = ['label' => 'Order Item Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idorderitem, 'url' => ['view', 'id' => $model->idorderitem]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-item-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
