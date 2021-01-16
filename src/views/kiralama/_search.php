<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model  mrpurposeless\kiralama\models\KiralamaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kiralama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'isim') ?>

    <?= $form->field($model, 'soyisim') ?>

    <?= $form->field($model, 'mail') ?>

    <?= $form->field($model, 'telefonNo') ?>

    <?php // echo $form->field($model, 'markaModel') ?>

    <?php // echo $form->field($model, 'gecerlilikTarihi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
