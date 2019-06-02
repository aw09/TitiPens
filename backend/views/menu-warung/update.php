<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuWarung */

$this->title = 'Update Menu Warung: ' . $model->idmenu;
$this->params['breadcrumbs'][] = ['label' => 'Menu Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmenu, 'url' => ['view', 'id' => $model->idmenu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-warung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
