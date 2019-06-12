<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengguna */

$this->title = 'Update Pengguna: ' . $model->iduser;
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iduser, 'url' => ['view', 'id' => $model->iduser]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengguna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
