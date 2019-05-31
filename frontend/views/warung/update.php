<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Warung */

$this->title = 'Update Warung: ' . $model->idwarung;
$this->params['breadcrumbs'][] = ['label' => 'Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idwarung, 'url' => ['view', 'id' => $model->idwarung]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
