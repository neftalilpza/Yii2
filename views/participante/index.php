<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Participantes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participante-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Participante'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombrecompleto',
            'curp',
            'intitucionprocedencia',
            'cuenta',
            //'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
