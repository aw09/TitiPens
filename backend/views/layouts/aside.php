<?php
$url = Yii::$app->request->url;
$array  = preg_split("#/#", $url);
 ?>
<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if($array[4]==""){?>class="active"<?php } ?> >
          <a href="<?php echo Yii::$app->request->BaseUrl ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
        </li>
        <li <?php if($array[4]=="pengguna"){?>class="active"<?php } ?> >
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/pengguna/"> <i class="menu-icon fa fa-user"></i>Pengguna </a>
        </li>
        <li <?php if($array[4]=="warung"){?>class="active"<?php } ?>>
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/warung/"> <i class="menu-icon fa fa-coffee"></i>Warung </a>
        </li>
        <li <?php if($array[4]=="menu-warung"){?>class="active"<?php } ?>>
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/menu-warung/"> <i class="menu-icon fa fa-bars"></i>Daftar Item </a>
        </li>
        <li <?php if($array[4]=="lokasi"){?>class="active"<?php } ?>>
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/lokasi/"> <i class="menu-icon fa fa-map-marker"></i>Daftar Lokasi </a>
        </li>
        <li <?php if($array[4]=="order-tipers"){?>class="active"<?php } ?> >
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/order-tipers/"> <i class="menu-icon fa fa-shopping-bag"></i>Order Tipers </a>
        </li>
        <li <?php if($array[4]=="order-customer"){?>class="active"<?php } ?> >
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/order-customer/"> <i class="menu-icon fa fa-shopping-cart"></i>Order Customers </a>
        </li>
        <li <?php if($array[4]=="history-tipers"){?>class="active"<?php } ?> >
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/history-tipers/"> <i class="menu-icon fa fa-file-text"></i>History Order Tipers </a>
        </li>
        <li <?php if($array[4]=="history-customer"){?>class="active"<?php } ?> >
          <a href="<?php echo Yii::$app->request->BaseUrl ?>/history-customer/"> <i class="menu-icon fa fa-file-text-o"></i>History Order Customers </a>
        </li>
      </ul>
    </div>
  </nav>
</aside>
