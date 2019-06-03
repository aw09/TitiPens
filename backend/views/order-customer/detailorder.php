<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\OrderTipers;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-customer-index">
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>">Dashboard</a></li>
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>/order-customer">Order Customers</a></li>
                <li class="active">Detail Order</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="float-left">
                <strong class="card-title"><?php echo $model->user->nama ?></strong>
              </div>
            </div>
            <div class="card-body">
              <table class="table">
                <tbody>
                  <tr>
                    <th class="text-center">ID Order</th>
                    <th><?php echo $model->idordercustomer ?></th>
                    <th></th>
                    <th></th>
                  </tr>
                    <tr>
                      <th class="text-center">Tanggal</th>
                      <th><?php echo $model->tanggal ?></th>
                      <th></th>
                      <th></th>
                    </tr>
                    <tr>
                      <th class="text-center">Nama Tipers</th>
                      <th><?php echo $model->ordertipers->user->nama ?></th>
                      <th></th>
                      <th></th>
                    </tr>
                    <tr>
                      <th class="text-center">Lokasi</th>
                      <th><?php echo $model->lokasi ?></th>
                      <th></th>
                      <th></th>
                    </tr>
                    <tr>
                      <th class="text-center">Catatan</th>
                      <th><?php echo $model->catatan ?></th>
                      <th></th>
                      <th></th>
                    </tr>
                </tbody>
                <tbody>
                  <tr>
                    <th class="text-center">Nama Item</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Total</th>
                    <th></th>
                  </tr>
                  <?php foreach ($item as $data) { ?>
                    <?php $i = 0; ?>
                  <tr>
                        <th class="text-center"> <?php echo $data->nama_item ?> </th>
                        <th class="text-center"><img src="<?= Yii::getAlias('@fileUrl').'/'.$data->foto; ?>" class="img-responsive" style="width:130px;height:80px;"></img></th>
                        <th class="text-center"><?php echo $data->orderItemCustomers[$i]->jumlah ?></th>
                        <th class="text-center"><?php echo $data->orderItemCustomers[$i]->total ?></th>
                  </tr>
                  <?php $i++; ?>
                  <?php } ?>
                  <tr>
                    <th class="text-center">Total Pesanan</th>
                    <th></th>
                    <th></th>
                    <th class="text-center"><?php echo $model->total ?></th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/datatables.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/buttons.bootstrap.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/jszip.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/vfs_fonts.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/buttons.print.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/lib/data-table/buttons.colVis.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/init/datatables-init.js"></script>
