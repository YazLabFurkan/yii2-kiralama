<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  mrpurposeless\kiralama\models\Arabamarka;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model  mrpurposeless\kiralama\models\Kiralama */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kiralama-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $araba=Arabamarka::find()->all();
    $listData=ArrayHelper::map($araba,'markaModel','markaModel'); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefonNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'markaModel')->dropDownList($listData,
        ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'gecerlilikTarihi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
