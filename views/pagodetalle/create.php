<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pagodetalle */

$this->title = Yii::t('app', 'Create Pagodetalle');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pagodetalles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagodetalle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
