<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderItemCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-item-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ordercustomer_id')->textInput() ?>

    <?= $form->field($model, 'menuwarung_id')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
