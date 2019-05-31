<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrderTipersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-tipers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idordertipers') ?>

    <?= $form->field($model, 'fee') ?>

    <?= $form->field($model, 'lokasi_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'catatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
