<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-index">
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
          </li>
          <li class="active">
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/pengguna/"> <i class="menu-icon fa fa-user"></i>Pengguna </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/warung/"> <i class="menu-icon fa fa-coffee"></i>Warung </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/menu-warung/"> <i class="menu-icon fa fa-bars"></i>Daftar Item </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/lokasi/"> <i class="menu-icon fa fa-map-marker"></i>Daftar Lokasi </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/order-tipers/"> <i class="menu-icon fa fa-shopping-bag"></i>Order Tipers </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/order-customer/"> <i class="menu-icon fa fa-shopping-cart"></i>Order Customers </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/history-tipers/"> <i class="menu-icon fa fa-file-text"></i>History Order Tipers </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->request->BaseUrl ?>/history-customer/"> <i class="menu-icon fa fa-file-text-o"></i>History Order Customers </a>
          </li>
        </ul>
      </div>
    </nav>
  </aside>
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>">Dashboard</a></li>
                <li class="active">Pengguna</li>
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
                <strong class="card-title">Pengguna</strong>
              </div>
            </div>
            <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">ID Pengguna</th>
                    <th class="text-center">NRP</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Jurusan</th>
                    <th class="text-center">Angkatan</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Rating</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dataProvider->getModels() as $data){ ?>
                    <tr>
                      <th class="text-center"><?= $data->iduser ?></th>
                      <th class="text-center"><?= $data->nrp ?></th>
                      <th class="text-center"><?= $data->nama ?></th>
                      <th class="text-center"><?= $data->jurusan ?></th>
                      <th class="text-center"><?= $data->angkatan ?></th>
                      <th class="text-center"><img src="<?= Yii::getAlias('@fileUrl').'/'.$data->foto; ?>" class="img-responsive"></img></th>
                      <th class="text-center"><?= $data->rating ?></th>
                      <th>
                        <center>
                          <?= Html::a('Hapus', ['delete', 'id' => $data->iduser], ['class' => 'btn btn-outline-danger btn-sm']) ?>
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
