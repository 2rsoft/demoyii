<?php

use app\helpers\StringHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\MasterGaji $model */

$this->title = "View Gaji " . $model->getPegawai()->nama;
$this->params['breadcrumbs'][] = ['label' => 'Master Gajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-gaji-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cetak Slip', ['cetakslip', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
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
            [
                'attribute' => 'Pegawai',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->getPegawai()->nama;
                }
            ],
            [
                'attribute' => 'Bulan',
                'format' => 'html',
                'value' => function ($model) {
                    return StringHelper::getBulanList()[$model->bulan];
                }
            ],
            'tahun',
            [
                'attribute' => 'Gaji Pokok',
                'format' => 'html',
                'value' => function ($model) {
                    return StringHelper::formatRupiah($model->gaji_pokok);
                }
            ],
            'tunjangan_jabatan',
            'tunjangan_kinerja',
            'pot_bpjskes',
            'pot_bpjsket',
            'tanggal',
        ],
    ]) ?>

</div>