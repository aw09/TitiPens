<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\OrderCustomer;

/* @var $this yii\web\View */
/* @var $model app\models\Order_Tipers */

\yii\web\YiiAsset::register($this);

?>
<div class="order-tipers-view">
  <div class="container-fluid">
    <?php foreach ($model as $key) {
      if($key->idordercustomer == $id)
        $orderCustomer = $key;
    } ?>
    <br></br>
    <h1><?= Html::encode($orderCustomer->user->nama) ?></h1>
    <table class="table">
      <tbody>
        <tr>
          <th class="text-center">ID Order</th>
          <th><?php echo $orderCustomer->idordercustomer ?></th>
          <th></th>
          <th></th>
        </tr>
          <tr>
            <th class="text-center">Tanggal</th>
            <th><?php echo $orderCustomer->tanggal ?></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th class="text-center">Nama Tipers</th>
            <th><?php echo $orderCustomer->ordertipers->user->nama ?></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th class="text-center">Lokasi</th>
            <th><?php echo $orderCustomer->lokasi ?></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th class="text-center">Catatan</th>
            <th><?php echo $orderCustomer->catatan ?></th>
            <th></th>
            <th></th>
          </tr>
      </tbody>
      <br></br>
      <tbody>
        <tr>
          <th class="text-center">Nama Item</th>
          <th class="text-center">Jumlah</th>
          <th class="text-center">Total</th>
          <th></th>
        </tr>
        <?php foreach ($item as $data) { ?>
          <?php $i = 0; ?>
        <tr>
              <th class="text-center"> <?php echo $data->nama_item ?> </th>
              <th class="text-center"><?php echo $data->orderItemCustomers[$i]->jumlah ?></th>
              <th class="text-center"><?php echo $data->orderItemCustomers[$i]->total ?></th>
              <th></th>
        </tr>
        <?php $i++; ?>
        <?php } ?>
        <tr>
          <th class="text-center">Total Pesanan</th>
          <th></th>
          <th class="text-center"><?php echo $orderCustomer->total ?></th>
          <th></th>
        </tr>
      </tbody>
    </table>
</div>

</div>
