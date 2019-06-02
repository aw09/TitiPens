<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HistoryTipers */

$this->title = 'Update History Tipers: ' . $model->idhistori;
$this->params['breadcrumbs'][] = ['label' => 'History Tipers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idhistori, 'url' => ['view', 'id' => $model->idhistori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="history-tipers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
