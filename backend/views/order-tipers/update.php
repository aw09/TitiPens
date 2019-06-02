<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderTipers */

$this->title = 'Update Order Tipers: ' . $model->idordertipers;
$this->params['breadcrumbs'][] = ['label' => 'Order Tipers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idordertipers, 'url' => ['view', 'id' => $model->idordertipers]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-tipers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
