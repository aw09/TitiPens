<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<!--
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?> -->

<html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - TITIPENS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl ?>/css/dataTables.bootstrap.min.css">
</head>
<body>
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
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
  <div id="right-panel" class="right-panel">
    <header id="header" class="header">
      <div class="top-left">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo Yii::$app->request->BaseUrl ?>"><img src="/TitiPens/images/titipblack.png" alt="Logo" style="width:140px; height:40px;"></a>
          <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
      </div>
      <div class="top-right">
        <div class="header-menu">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h6 style="padding-right:10px;"> <?php echo "Welcome, " . Yii::$app->user->identity->username . "!"?> </h6>
              <img class="user-avatar rounded-circle" src="/TitiPens/images/ava.png" alt="User Avatar">
            </a>
            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="content">
      <div class="animated fadeIn">
        <?= $content ?>
      </div>
    </div>
  </div>
  <footer class="site-footer">
    <div class="footer-inner bg-white">
      <div class="row">
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="<?php echo Yii::$app->request->BaseUrl ?>/js/main.js"></script>
</body>
</html>
