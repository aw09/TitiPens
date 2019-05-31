<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
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
</style>
      <div class="col-lg-6 col-md-offset-3">
        <div class="jumbotron">
          <img src="<?= yii\helpers\Url::base().'/gambar/tipers.png' ?>">
          <br><br>
        <p>Anda dapat melakukan open order untuk menawarkan jasa kepada customer</p>
        <br>
        <p><button class="button" data-toggle="modal" data-target="#myModal">Make Your Titipan</button></p>
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    </div>
