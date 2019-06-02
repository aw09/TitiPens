<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderItemCustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-item-customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idorderitem') ?>

    <?= $form->field($model, 'ordercustomer_id') ?>

    <?= $form->field($model, 'menuwarung_id') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
