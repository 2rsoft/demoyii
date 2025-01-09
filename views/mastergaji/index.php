<?php

use app\helpers\StringHelper;
use app\models\MasterGaji;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gaji';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-gaji-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Entri Gaji', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'pegawai_id',
                'label' => 'Pegawai',
                'format'=>'html',
                'value' => function($model) {
                    return $model->getPegawai()->nama;
                },
                'filter' => Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'pegawai_id',
                    'data' => ArrayHelper::map($searchModel->getPegawaiList(), 'id', 'nama'),
                    'options' => ['placeholder' => 'Pilih'],
                    'pluginOptions' => [
                        'allowClose' => true,
                        'allowClear' => true
                    ],
                ])
            ],
            [
                'attribute' => 'bulan',
                'label' => 'Bulan',
                'format'=>'html',
                'value' => function($model) {
                    return StringHelper::getBulanList()[$model->bulan];
                }
            ],
            'tahun',
            [
                'attribute' => 'Gaji Pokok',
                'format'=>'html',
                'value' => function($model) {
                    return StringHelper::formatRupiah($model->gaji_pokok);
                }
            ],
            //'tunjangan_jabatan',
            //'tunjangan_kinerja',
            //'pot_bpjskes',
            //'pot_bpjsket',
            //'tanggal',
            [
                'class' => ActionColumn::class,
                'template' => '{view} {update} {delete} {cetakslip}',
                'contentOptions' => [
                    'style' => 'width: 10%; text-align: center;'
                ],
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', 'View Data'),
                            'class' => 'btn btn-xs btn-info',
                        ];
                        return Html::a('<i class="mdi mdi-eye "></i>', $url, $options);
                    },
                    'update' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', 'View Data'),
                            'class' => 'btn btn-xs btn-success',
                        ];
                        return Html::a('<i class="mdi mdi-pencil "></i>', $url, $options);
                    },
                    'delete' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', 'Delete Data'),
                            'class' => 'btn btn-xs btn-danger',
                            'data' => [
                                'method' => 'post',
                                'confirm' => 'Yakin menghapus data ini?',
                            ],
                        ];
                        return Html::a('<i class="mdi mdi-file "></i>', $url, $options);
                    },
                    'cetakslip' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', 'Cetak Slip'),
                            'class' => 'btn btn-xs btn-info',
                        ];
                        return Html::a('<i class="mdi mdi-paperclip "></i>', $url, $options);
                    }
                ],
            ],
        ],
    ]); ?>


</div>