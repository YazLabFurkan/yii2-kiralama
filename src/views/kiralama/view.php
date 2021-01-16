<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model  mrpurposeless\kiralama\models\Kiralama */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kiralama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kiralama-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'isim',
            'soyisim',
            'mail',
            'telefonNo',
            'markaModel',
            'gecerlilikTarihi',
        ],
    ]) ?>

</div>
