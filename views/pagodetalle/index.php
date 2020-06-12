<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pagodetalles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagodetalle-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Pagodetalle'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pago_id',
            'catalogo_id',
            'importe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
