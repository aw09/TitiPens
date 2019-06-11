<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MenuWarung */

$this->title = 'Create Menu Warung';
$this->params['breadcrumbs'][] = ['label' => 'Menu Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-warung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
