<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Warung;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuWarung */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-warung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'warung_id')->dropDownList(ArrayHelper::map(Warung::find()->all(),'idwarung','nama'), ['prompt'=>'Pilih warung . . .']) ?>

    <?= $form->field($model, 'nama_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-outline-success btn-md']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
