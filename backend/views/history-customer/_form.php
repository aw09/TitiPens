<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HistoryCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ordercustomer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
