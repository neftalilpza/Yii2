<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Horariodetalles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horariodetalle-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Horariodetalle'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'horario_id',
            'fecha',
            'horarioincio',
            'horafin',
            //'lugar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
