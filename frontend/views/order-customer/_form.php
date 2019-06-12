<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\OrderCustomer;


?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
  <style>
  .login-clean {
    padding: 80px 0;
  }

  .login-clean form {
    max-width:320px;
    width:90%;
    margin:0 auto;
    background-color:#ffffff;
    padding:40px;
    border-radius:4px;
    color:#505e6c;
    box-shadow:1px 1px 5px rgba(0,0,0,0.1);
  }

  .login-clean .illustration {
    text-align:center;
    padding:0 0 20px;
    font-size:100px;
    color:rgb(244,71,107);
  }

  .login-clean form .form-control {
    background:#f7f9fc;
    border:none;
    border-bottom:1px solid #dfe7f1;
    border-radius:0;
    box-shadow:none;
    outline:none;
    color:inherit;
    text-indent:8px;
    height:42px;
  }

  .login-clean form .btn-primary {
    background:rgb(248,217,54);
    border:none;
    border-radius:4px;
    padding:11px;
    box-shadow:none;
    margin-top:26px;
    text-shadow:none;
    outline:none !important;
  }

  .login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
    background:rgb(0,0,0);
  }

  .login-clean form .btn-primary:active {
    transform:translateY(1px);
  }

  .login-clean form .forgot {
    display:block;
    text-align:center;
    font-size:12px;
    color:#6f7a85;
    opacity:0.9;
    text-decoration:none;
  }

  .login-clean form .forgot:hover, .login-clean form .forgot:active {
    opacity:1;
    text-decoration:none;
  }
  </style>

    <body>
        <div class="login-clean">
          <?php $form = ActiveForm::begin(); ?>
              <div class="illustration"><img src="<?= yii\helpers\Url::base().'/gambar/logos.jpg' ?>"></div>
              <div class="form-group"><?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?></div>
              <div class="form-group"><?= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?></div>
              <div class="form-group">
                  <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-block']) ?>
                  <?= Html::a('Cancel', ['index'], ['class'=>'btn btn-primary btn-block']) ?>
              </div>
          <?php ActiveForm::end(); ?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
