<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OrderTipersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dashboardcustomer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="order-tipers-index">

    <h1 class="text-center" style="font-family:Acme, sans-serif;font-size:44px;color:rgb(0,0,0);padding-top:52px;padding-bottom:52px;">Welcome, Customer!</h1>

  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-lg-3">
  				<div class="btn-group-vertical" style="width:250px;">
  					<button type="button" class="btn btn-default" style="border-color:rgb(0,0,0);color:rgb(0,0,0);">Warung</button>
  					<button type="button" class="btn btn-default" style="border-color:rgb(0,0,0);color:rgb(0,0,0);">Keranjang</button>
  				</div>
  			</div>
    			<div class="col-lg-9">
    				<div class="row" style="height:150px;">
            <?php foreach($model as $order) { ?>
            <?php $user = $order->user ?>
            <?php $lokasi = $order->lokasi ?>
    					<div class="col-md-3" style="padding-left:50px; margin-bottom:25px;"><img src="<?= Yii::getAlias('@fileUrl').'/'.$user->foto; ?>" class="img-fluid" style="height:160px;width:160px;"/></div>
    					<div class="col-md-6" style="height:160px;width:550px;margin-bottom:25px;">
    						<div class="panel panel-default" style="width:550px;height:160px;border-color:rgb(0,0,0);">
    							<a href="<?=Yii::getAlias('@frontendUrl').'/warung'?>">
    								<div class="panel-heading" style="background-color:rgb(248,217,54);">
    									<h5 class="mb-0" style="color:#000000;"><b><?= $user->nama ?> - <?= $user->jurusan ?></b></h5>
    								</div>
    							</a>
    							<div class="panel-body">
    								<p style="color:#000000;">Fee	: <?= $order->fee ?> / Item</p>
    								<p style="color:#000000;">Catatan: <?= $order->catatan ?></p>
    								<span class="glyphicon glyphicon-map-marker" ></span>  <?= $lokasi->name ?>
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
