<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order_Tipers */

$this->title = $model->idordertipers;
\yii\web\YiiAsset::register($this);
?>
<style>
  .button{
    padding: 6px 24px;
    text-align: center;
    margin-left: 470px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
  }
  .buttonpilih {
    background-color: #000000;
    color: #ffffff;
  }
  .buttonpilih:hover {
    background-color: rgb(248,217,54);
    color: black;
  }
</style>
<div class="order-tipers-view">
    <h1><?= Html::encode("Detail Titipan") ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idordertipers], ['class' => 'btn buttonpilih']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idordertipers], ['class' => 'btn buttonpilih']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idordertipers',
            'fee',
            'lokasi_id',
            'user_id',
            'catatan:ntext',
            'tanggal',
        ],
    ]) ?>

    <div class="col-lg-12">
      <div class="row" style="height:150px;">
        <div class="col-md-3"></div>
        <div class="col-md-5">
          <div class="panel panel-default" style="width:600px;">
            <div class="panel-heading" style="background-color:rgb(0,0,0);">
              <h5 class="mb-0" style="color:#ffffff;"><b>NAMA CUSTOMER</b></h5>
            </div>
            <div class="panel-body">
              <p style="color:#000000;">Lokasi	: </p>
              <p style="color:#000000;">Catatan: </p>
              <?= Html::a('Detail', ['/warung/index'], ['class' => 'button buttonpilih']) ?>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

</div>
