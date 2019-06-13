<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;



/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WarungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warung';
$this->params['breadcrumbs'][] = $this->title;

if(isset($_POST["post"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="index.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="index.php"</script>';
                }
           }
      }
 }
?>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <style>
    .button{
      text-align: center;
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
                <div class="text-center" id="title-name"><b><?= Html::a($data->nama_item, ['menu', 'id'=>$data->idmenu], ['class'=>"title"]); ?></b>
                     <b>Rp <?= Html::a($data->harga, ['menu', 'id'=>$data->idmenu], ['class'=>"title"]); ?></b></div>
              </a>
              <br>
              <div class="input-group">

                 <!-- $form = ActiveForm::begin(['id' => 'login-form']);  -->
                 <form class="" action="<?php echo Yii::$app->request->baseUrl; ?>/warung/keranjang/ <?php echo $data->idmenu  ?>" method="get">
                   <input type="hidden" name="idmenu" value="<?php echo "$data->idmenu"; ?>">
                   <?= Html::a(' CheckOut', ['/warung/keranjang', 'id'=>$data->idmenu, 'idwarung' => $idwarung], ['class' => 'glyphicon glyphicon-shopping-cart btn btn-warning']) ?>
                 </form>

                  <!-- <? //$form->field($models, 'jml_beli')->textInput(['class' => 'form-control input-number', 'id' => 'quantity', 'value' => '0', 'min' => '1', 'max' => '100']) ?> -->
                  <?php //ActiveForm::end(); ?>

              </div>

          </center>
          </div>
          <?php } ?>
        </div>
    </div>
</div>

</body>
</html>
