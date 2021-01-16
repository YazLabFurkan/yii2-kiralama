<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel  mrpurposeless\kiralama\models\KiralamaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kiralama';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kiralama-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kiralama Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'soyisim',
            'mail',
            'telefonNo',
            //'markaModel',
            //'gecerlilikTarihi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
