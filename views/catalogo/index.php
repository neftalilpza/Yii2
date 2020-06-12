<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Catalogos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalogo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Catalogo'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'actividad_id',
            'evento_id',
            'costo',
            //'totalhoras',
            //'cupolimite',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
