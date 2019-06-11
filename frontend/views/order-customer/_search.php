<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrderCustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idordercustomer') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'lokasi') ?>

    <?= $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
