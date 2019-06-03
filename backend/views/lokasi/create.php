<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */

$this->params['breadcrumbs'][] = ['label' => 'Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-create">
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>">Dashboard</a></li>
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>/lokasi/">Lokasi</a></li>
                <li class="active">Tambah Lokasi</li>
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
