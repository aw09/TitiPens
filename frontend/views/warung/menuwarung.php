<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WarungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warung';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  	.title {
  		color:rgb(0,0,0);

  	}
    #title-name {
      width:300px;
      height:40px;
      background-color:rgb(248,217,54);
  		padding-top:9px;
      margin-top:9px;
    }


	</style>
</head>

<body>
<div class="warung-index">

    <h1 class="text-center" style="font-family:Acme, sans-serif;font-size:44px;color:rgb(0,0,0);padding-top:52px;padding-bottom:52px;">Pilih warung yang Anda inginkan</h1>

    <div class="container-fluid">
		    <div class="row">
          <?php foreach ($dataProvider->getModels() as $data){ ?>
          <div class="col-lg-4" style="margin-bottom:30px;">
            <center>
              <img src="<?= Yii::getAlias('@fileUrl').'/'.$data->foto; ?>" style="height:200px;width:300px;" id="image"/>
              <a href="#">
                <div class="text-center" id="title-name"><b><?= Html::a($data->nama_item, ['menu', 'id'=>$data->idmenu], ['class'=>"title"]); ?></b></div>
              </a>
            </center>
          </div>
          <?php } ?>
        </div>
    </div>


</div>
</body>
</html>
