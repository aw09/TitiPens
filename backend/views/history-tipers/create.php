<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HistoryTipers */

$this->title = 'Create History Tipers';
$this->params['breadcrumbs'][] = ['label' => 'History Tipers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-tipers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
