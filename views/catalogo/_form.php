<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Catalogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actividad_id')->textInput() ?>

    <?= $form->field($model, 'evento_id')->textInput() ?>

    <?= $form->field($model, 'costo')->textInput() ?>

    <?= $form->field($model, 'totalhoras')->textInput() ?>

    <?= $form->field($model, 'cupolimite')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
