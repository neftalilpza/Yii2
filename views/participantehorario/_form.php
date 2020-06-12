<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Participantehorario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participantehorario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'participante_id')->textInput() ?>

    <?= $form->field($model, 'horario_id')->textInput() ?>

    <?= $form->field($model, 'fecharegistro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
