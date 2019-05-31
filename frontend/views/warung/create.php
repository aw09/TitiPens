<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Warung */

$this->title = 'Create Warung';
$this->params['breadcrumbs'][] = ['label' => 'Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
