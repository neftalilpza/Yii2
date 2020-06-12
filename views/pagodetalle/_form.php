<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pagodetalle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagodetalle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pago_id')->textInput() ?>

    <?= $form->field($model, 'catalogo_id')->textInput() ?>

    <?= $form->field($model, 'importe')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
