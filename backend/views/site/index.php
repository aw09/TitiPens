<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?php echo Yii::$app->request->BaseUrl ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
          </li>
          <li>
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
  <div class="content">
    <div class="animated fadeIn">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-1">
                  <i class="pe-7s-users"></i>
                </div>
                <div class="stat-content">
                  <div class="text-left dib">
                    <div class="stat-text"><span class="count"></span></div>
                    <div class="stat-heading">Revenue</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
