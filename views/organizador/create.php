<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizador */

$this->title = Yii::t('app', 'Create Organizador');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Organizadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
