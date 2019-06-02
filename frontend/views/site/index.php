<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Welcome to TITIPENS';
?>
<div class="site-index">
<style>
  .button{
    background-color: rgb(0,0,0);
    color: rgb(248,217,54);
    padding: 17px 24px;
  }
</style>
      <div class="col-lg-6 col-md-offset-3">
        <div class="jumbotron">
          <img src="<?= yii\helpers\Url::base().'/gambar/9889999719082.jpg' ?>">
          <br>
        <h2>Apa itu TitiPens ?</h2>
        <p>Titipens adalah sebuah aplikasi website yang membantu mahasiswa dalam berbelanja di area PENS</p>
        <br>
        <p><a class="button" href="">PESAN SEKARANG</a></p>
      </div>
      </div>
    <div class="body-content">
      <center>
        <div class="row">
              <div class="col-lg-4">
                <h3>Makanan</h3>
                <br>
                    <img src="<?= yii\helpers\Url::base().'/gambar/maem.png' ?>">
              </div>
              <div class="col-lg-4">
                <h3>Fotocopy & Print</h3>
                <br>
                    <img src="<?= yii\helpers\Url::base().'/gambar/fotocopy.png' ?>">
              </div>
              <div class="col-lg-4">
                <h3>Custom</h3>
                    <img src="<?= yii\helpers\Url::base().'/gambar/list.png' ?>">
              </div>
          </div>
        </center>
        </div>
    </div>
