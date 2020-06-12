<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horariodetalle */

$this->title = Yii::t('app', 'Create Horariodetalle');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horariodetalles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horariodetalle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
