<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ponentes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ponente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ponente'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombrecompleto',
            'sexo',
            'foto',
            'cv',
            //'nivelacademico',
            //'cuenta',
            //'password',
            //'correo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
