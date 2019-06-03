<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuWarung */

$this->title = 'Update Menu Warung: ' . $model->nama_item;
$this->params['breadcrumbs'][] = ['label' => 'Menu Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmenu, 'url' => ['view', 'id' => $model->idmenu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-warung-update">
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>">Dashboard</a></li>
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>/menu-warung/">Menu Item</a></li>
                <li class="active">Update <?php echo $model->nama_item ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
