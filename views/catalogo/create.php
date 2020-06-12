<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catalogo */

$this->title = Yii::t('app', 'Create Catalogo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Catalogos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalogo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
