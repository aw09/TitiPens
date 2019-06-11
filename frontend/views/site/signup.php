<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<style>
.register-photo {
padding:80px 0;
}

.register-photo .image-holder {
display:table-cell;
width:auto;
background-size:cover;
}

.register-photo .form-container {
display:table;
max-width:900px;
width:90%;
margin:0 auto;
box-shadow:1px 1px 5px rgba(0,0,0,0.1);
}

.register-photo form {
display:table-cell;
width:400px;
background-color:#ffffff;
padding:40px 60px;
color:#505e6c;
}

@media (max-width:991px) {
.register-photo form {
  padding:40px;
}
}

.register-photo form h2 {
font-size:24px;
line-height:1.5;
margin-bottom:30px;
}

.register-photo form .form-control {
background:#f7f9fc;
border:none;
border-bottom:1px solid #dfe7f1;
border-radius:0;
box-shadow:none;
outline:none;
color:inherit;
text-indent:6px;
height:40px;
}

.register-photo form .checkbox {
font-size:13px;
line-height:20px;
}

.register-photo form .btn-primary {
background:rgb(248,217,54);
border:none;
border-radius:4px;
padding:11px;
margin-top:35px;
text-shadow:none;
outline:none !important;
}

.register-photo form .btn-primary:hover, .register-photo form .btn-primary:active {
background:rgb(0,0,0);
}

.register-photo form .btn-primary:active {
transform:translateY(1px);
}

.register-photo form .already {
display:block;
text-align:center;
font-size:12px;
color:#6f7a85;
opacity:0.9;
text-decoration:none;
}
</style>
<body>
  <div class="register-photo">
      <div class="form-container">
        <br>
          <div><img src="<?= yii\helpers\Url::base().'/gambar/logos.jpg' ?>" width="100%"></div>
          <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

              <div class="form-group"><?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?></div>

                <div class="form-group"><?= $form->field($model, 'email') ?></div>

                <div class="form-group"><?= $form->field($model, 'password')->passwordInput() ?></div>
              <div class="form-group">
                  <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-block', 'name' => 'signup-button']) ?>
              </div>

          <?php ActiveForm::end(); ?>
      </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
