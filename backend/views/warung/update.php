<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Warung */

$this->title = 'Update Warung: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idwarung, 'url' => ['view', 'id' => $model->idwarung]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warung-update">
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>">Dashboard</a></li>
                <li><a href="<?php echo Yii::$app->request->BaseUrl ?>/warung/">Warung</a></li>
                <li class="active">Update Warung</li>
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
