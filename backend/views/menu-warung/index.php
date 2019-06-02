<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuWarungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Warungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-warung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu Warung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idmenu',
            'warung_id',
            'nama_item',
            'harga',
            'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>