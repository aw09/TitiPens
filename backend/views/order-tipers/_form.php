<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderTipers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-tipers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fee')->textInput() ?>

    <?= $form->field($model, 'lokasi_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
