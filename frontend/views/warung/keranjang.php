<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\OrderCustomer;
use yii\bootstrap\ActiveForm;
use kartik\touchspin\TouchSpin;

/* @var $this yii\web\View */
/* @var $model app\models\Order_Tipers */

\yii\web\YiiAsset::register($this);

?>
<style>
  .button{
    padding: 20px 30px;
    text-align: center;
    margin-left: 470px;
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
<div class="order-tipers-view">
  <div class="container-fluid">
    <br></br>
    <h1><?= Html::encode("Keranjang") ?></h1>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">Nama Item</th>
          <th class="text-center">Jumlah</th>
          <th class="text-center">Harga</th>
          <th class="text-center">Total</th>
          <th class="text-center"></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <br></br>
        <?php $total=0; $totalAll=0; ?>
        <?php foreach ($item as $data) { ?>
          <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
          <?php $i = 0; ?>
          <tr>
              <th class="text-center"><?php echo $data->nama_item ?> </th>
              <th class="text-center"><?php echo $jml=$data->keranjangs[$i]->jml_beli ?></th>
              <th class="text-center"><?php echo $harga=$data->keranjangs[$i]->menuwarung->harga ?></th>
              <th class="text-center"><?php echo $total=$jml*$harga; ?></th>
              <th class="text-center"><?= Html::a('Hapus', ['hapus', 'id' => $data->idmenu], ['class' => 'btn buttonpilih']) ?></th>
              </th>
        </tr>
        <?php ActiveForm::end(); ?>
        <?php $totalAll+=$total; $i++; ?>
        <?php } ?>
        <tr>
          <th></th>
          <th></th>
          <th class="text-center">Fee : </th>
          <th class="text-center"><?php echo $fee=$_SESSION['idordertipers']->fee?></th>
          <th></th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th class="text-center">Total : </th>
          <th class="text-center"><?php echo $_SESSION['total']=$totalAll+$fee?></th>
          <th></th>
        </tr>
      </tbody>
    </table>
  </div>
  <?= Html::a('Check Out', ['/order-customer/create'], ['class' => 'button buttonpilih']) ?>
</div>
