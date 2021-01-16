<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model  mrpurposeless\kiralama\models\Kiralama */

$this->title = 'Kiralama Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Kiralama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kiralama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
