<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */

$this->title = 'Update Lokasi: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idlokasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lokasi-update">
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
                <li class="active">Update <?php echo $model->name ?></li>
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
