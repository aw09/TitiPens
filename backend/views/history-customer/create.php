<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HistoryCustomer */

$this->title = 'Create History Customer';
$this->params['breadcrumbs'][] = ['label' => 'History Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
