<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model  mrpurposeless\kiralama\models\Kiralama */

$this->title = 'Kiralama Güncelle: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kiralama', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kiralama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
