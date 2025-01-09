<?php

use app\models\MasterProvinsi;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\MasterPegawai $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Master Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'nama_ayah',
            'nama_ibu',
            'no_ktp',
            'no_telp',
            [
                'attribute' => 'provinsi',
                'value' => function($model) {
                    return MasterProvinsi::findOne($model->provinsi)->prov_name;
                }
            ],
            'kabupaten',
        ],
    ]) ?>

</div>
