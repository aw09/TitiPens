<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrderCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'tanggal')->textInput() ?>-->

    <!--<?= $form->field($model, 'user_id')->textInput() ?>-->

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
