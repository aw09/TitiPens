<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Warung */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-outline-success btn-sm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
