<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Participantehorarios');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participantehorario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Participantehorario'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'participante_id',
            'horario_id',
            'fecharegistro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
