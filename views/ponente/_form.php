<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ponente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ponente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombrecompleto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivelacademico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuenta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
