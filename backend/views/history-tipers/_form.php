<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HistoryTipers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-tipers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ordertipers_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
