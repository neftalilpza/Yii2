<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
           # ['label' => 'Home', 'url' => ['/site/index']],
           # ['label' => 'Menu', 'url' => ['/site/about']],

            ['label' => 'Actividad', 'url' => ['/actividad']],
            ['label' => 'Catalogo', 'url' => ['/catalogo']],
            ['label' => 'Categoria', 'url' => ['/categoria']],
            ['label' => 'Evento', 'url' => ['/evento']],
            ['label' => 'Horario', 'url' => ['/horario']],
            ['label' => 'Horario detalle', 'url' => ['/horariodetalle']],
            ['label' => 'Pago', 'url' => ['/pago']],
            ['label' => 'Organizador', 'url' => ['/organizador']],
            ['label' => 'Pago detalle', 'url' => ['/pagodetalle']],
            ['label' => 'Participante', 'url' => ['/participante']],
            ['label' => 'Participante horario', 'url' => ['/participantehorario']],
            ['label' => 'Ponente', 'url' => ['/ponente']],
            



            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>






    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
