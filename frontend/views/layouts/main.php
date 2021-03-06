<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?= yii\helpers\Url::base().'/gambar/titipblack.png' ?>">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<style>
 .tes{
    margin-top: -30px;
 }
 .skuy{
   padding-top: 30px;
 }
</style>
<div class="wrap">
    <?php
    NavBar::begin(
      [
        'brandLabel' => Html::img('@web/gambar/titip1.png', ['alt'=>Yii::$app->name, 'width'=>"10%", 'class'=>"skuy"]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top tes',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'items' => [
                 ['label' => 'Tipers', 'url' => ['/site/login', 'role'=>1]],
                 ['label' => 'Customers', 'url' => ['/site/login', 'role'=>2]]
                  ]
                ];
    }
    else if(isset($_SESSION['role'])) {
        if($_SESSION['role'] == 1){
          $menuItems[] = ['label' => "as Tipers", 'url' => ['/site/tipers']];
        }
        else{
          $menuItems[] = ['label' => "as Customer", 'url' => ['/site/customer']];
          $menuItems[] = ['label' => "Cart", 'url' => ['/warung/list']];
        }
        $menuItems[] = ['label' => Yii::$app->user->identity->nama, 'url' => ['/pengguna/'.Yii::$app->user->identity->iduser]];

        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton('Logout', ['class' => 'btn btn-link logout'])
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
        <p class="pull-left">&copy;<font face="Century Gothic" size="4">TITIPENS </font><?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
