<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuWarung */

$this->title = $model->idmenu;
$this->params['breadcrumbs'][] = ['label' => 'Menu Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-warung-view">
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
                <li class="active"><?php echo $model->nama_item ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <p>
      <?= Html::a('Update', ['update', 'id' => $model->idmenu], ['class' => 'btn btn-outline-primary btn-sm']) ?>
      <?= Html::a('Hapus', ['delete', 'id' => $model->idmenu], ['class' => 'btn btn-outline-danger btn-sm']) ?>
      <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-outline-secondary btn-sm',]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idmenu',
            'warung_id',
            'nama_item',
            'harga',
            'foto',
        ],
    ]) ?>

</div>
