<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Order_Tipers */


?>

    <?= $this->render('homepageTipers', [
        'model' => $model,
        'modelOrder' => $modelOrder,
        'namalokasi'=> $namalokasi,
    ]) ?>
