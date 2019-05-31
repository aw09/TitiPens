<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrderTipers */

$this->title = 'Create Order Tipers';
$this->params['breadcrumbs'][] = ['label' => 'Order Tipers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-tipers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
