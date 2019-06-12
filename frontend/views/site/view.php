<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order_Tipers */

$this->title = $model->idordertipers;
\yii\web\YiiAsset::register($this);

$nums_row=0;
foreach ($order as $key) {
  if($key->ordertipers_id==$model->idordertipers)
    $nums_row++;

}

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
        <?php
        if($nums_row==0)
          echo Html::a('Delete', ['delete', 'id' => $model->idordertipers], ['class' => 'btn buttonpilih'])
        ?>
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
<?php
if($nums_row!=0){ ?>
    <div class="col-lg-12">
      <div class="row" style="height:150px;">
        <div class="col-md-3"></div>
        <div class="col-md-5">
          <div class="panel panel-default" style="width:600px;">
            <div class="panel-heading" style="background-color:rgb(0,0,0);">
              <h5 class="mb-0" style="color:#ffffff;"><b><?= $key->user->nama ?> </b></h5>
            </div>
            <div class="panel-body">
              <p style="color:#000000;">Lokasi	: <?= $key->lokasi ?></p>
              <p style="color:#000000;">Catatan: <?= $key->catatan  ?> </p>
              <?= Html::a('Detail', ['detail', 'id' => $key->idordercustomer], ['class' => 'button buttonpilih']) ?>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  <?php } ?>

</div>
