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
  <?php
$location = Yii::$app->basePath.'\views\layouts\aside.php';
  include $location; ?>
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>">Dashboard</a></li>
                <li class="active">Order Tipers</li>
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
                <strong class="card-title">Order Tipers</strong>
              </div>
            </div>
            <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">ID Order</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Nama Customers</th>
                    <th class="text-center">Nama Tipers</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dataProvider->getModels() as $data){ ?>
                    <tr>
                      <th class="text-center"><?= $data->idordercustomer ?></th>
                      <th class="text-center"><?= $data->tanggal ?></th>
                      <th class="text-center"><?= $data->user->nama ?></th>
                      <th class="text-center"><?= $data->ordertipers->user->nama ?></th>
                      <th>
                        <center>
                          <?= Html::a('Detail', ['detail', 'id' => $data->idordercustomer], ['class' => 'btn btn-outline-secondary btn-sm']) ?>
                          <?= Html::a('Hapus', ['delete', 'id' => $data->idordercustomer], ['class' => 'btn btn-outline-danger btn-sm']) ?>
                        </center>
                      </th>
                    </tr>
                <?php } ?>
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
