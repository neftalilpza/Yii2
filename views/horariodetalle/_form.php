<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Horariodetalle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horariodetalle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'horario_id')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'horarioincio')->textInput() ?>

    <?= $form->field($model, 'horafin')->textInput() ?>

    <?= $form->field($model, 'lugar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
