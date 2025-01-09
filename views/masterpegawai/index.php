<?php

use app\models\MasterPegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Demo Data', ['demodata'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        // 'pager' => [
        //     'class' => 'yii\bootstrap4\LinkPager'
        // ],
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'nama_ayah',
            //'nama_ibu',
            'no_ktp',
            //'no_telp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterPegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>