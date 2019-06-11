<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<html>
<head>
  <style>
    .button{
      padding: 6px 24px;
      text-align: center;
      margin-left: 445px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
    }
    .buttonpilih {
      background-color: #000000;
      color: #ffffff;
    }
    .buttonpilih:hover {
      background-color: rgb(248,217,54);
      color: black;
    }
  </style>
</head>
<body>
  <div class="site-index">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-offset-3">
        <div class="jumbotron">
          <img src="<?= yii\helpers\Url::base().'/gambar/customer.jpg' ?>" style="width:400px;">
          <br><br>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="panel panel-default" style="border-color:rgb(0,0,0);">
            <div class="panel-heading" style="background-color:rgb(248,217,54);">
              <h5 class="text-center" style="color:#000000;"><b>TOP TIPERS</b></h5>
            </div>
            <div class="panel-body">

            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row" style="height:150px;">
            <?php foreach ($models as $order) { ?>
              <div class="col-md-3" style="padding-left:50px; margin-bottom:25px;"><img src="<?= Yii::getAlias('@fileUrl').'/'.$order->user->foto; ?>" class="img-fluid" style="height:160px;width:160px;"/></div>
                <div class="col-md-6" style="width:550px;margin-bottom:25px;">
                  <div class="panel panel-default" style="width:550px;border-color:rgb(0,0,0);">
                    <div class="panel-heading" style="background-color:rgb(248,217,54);">
                      <h5 class="mb-0" style="color:#000000;"><b><?= $order->user->nama ?> - <?= $order->user->jurusan ?></b></h5>
                    </div>
                    <div class="panel-body">
                      <p style="color:#000000;">Fee	: <?= $order->fee ?> / Item</p>
                      <p style="color:#000000;">Catatan: <?= $order->catatan ?></p>
                      <p style="color:#000000;">Lokasi yang dituju:  <?= $order->lokasi->name ?></p>
                      <?= Html::a('Pilih', ['/warung/index', 'id' => $order->idordertipers], ['class' => 'button buttonpilih']) ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>
