<?php
use yii\helpers\Html;
 ?>
<style>
  .button{
    background-color: rgb(0,0,0);
    color: rgb(248,217,54);
    padding: 17px 24px;
  }

  .thead-dark{
    background-color: rgb(0,0,0);
    color: rgb(248,217,54);
  }

  .bg-colour{
    background-color: rgb(248,217,54);
  }
</style>
      <div class="col-lg-6 col-md-offset-3">
        <div class="jumbotron">
          <img src="<?= yii\helpers\Url::base().'/gambar/tipers.png' ?>">
          <br><br>
        <p>Anda dapat melakukan open order untuk menawarkan jasa kepada customer</p>
        <br>
        <p>
          <?php
          $nums_row=0;
          foreach ($model as $key) {
            if($key->user_id == Yii::$app->user->identity->iduser)
            $idOrder = $key -> idordertipers;
            $nums_row++;
          }
           if($nums_row==0){ ?>
          <button class="button" data-toggle="modal" data-target="#myModal">Make Your Titipan</button>
        <?php }else { ?>
          <?= Html::a('Detail Titipan', [$idOrder], ['class'=>'btn btn-primary btn-block']) ?>
         <?php } ?>
        </p>
      </div>
      </div>
    <div class="body-content">
      <center>
        <div class="row">
            <div class="col-md-12">
              <h3>History Titipan</h3>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Produk</th>
      <th scope="col" class="col-lg-3">Tanggal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ariq</td>
      <td>micin</td>
      <td>14 oktober 2019</td>
    </tr>
  </tbody>
</table>
            </div>
          </div>
        </center>
        </div>
        <!-- Modal -->
        <?php
        $url = Yii::$app->basePath.'\views\site\modal.php';
        include $url; ?>
<!-- tes -->

</div>
    </div>
