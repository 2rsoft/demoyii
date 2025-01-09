<?php

use app\models\MasterPegawai;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="master-pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=

    GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        // 'headerContainer' => ['style' => 'top:50px', 'class' => 'kv-table-header'], // offset from top
        // 'floatHeader' => true, // table header floats when you scroll
        // 'floatPageSummary' => true, // table page summary floats when you scroll
        // 'floatFooter' => false, // disable floating of table footer

        'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
        // 'beforeHeader' => [
        //     [
        //         'columns' => [
        //             ['content' => 'Header Before 1', 'options' => ['colspan' => 4, 'class' => 'text-center warning']],
        //             ['content' => 'Header Before 2', 'options' => ['colspan' => 4, 'class' => 'text-center warning']],
        //             ['content' => 'Header Before 3', 'options' => ['colspan' => 3, 'class' => 'text-center warning']],
        //         ],
        //         'options' => ['class' => 'skip-export'] // remove this row from export
        //     ]
        // ],
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],

        // parameters from the demo form
        // 'bordered' => true,
        // 'striped' => true,
        // 'condensed' => true,
        // 'responsive' => true,
        // 'hover' => true,
        // 'showPageSummary' => true,

        'pjax' => true, // pjax is set to always true for this demo

        // set your toolbar
        'toolbar' =>  [
            [
                'content' =>
                Html::button('click', [
                    'title' => 'title',
                    'class' => 'btn btn-success',
                    'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this demo!");'
                ]) .
                    Html::a('Tambah Pegawai', ['create'], [
                        'class' => 'btn btn-outline-warning'
                    ]) .
                    Html::a('Demo Data', ['demodata'], [
                        'class' => 'btn btn-outline-success'
                    ]) .
                    Html::a('<i class="fas fa-redo"></i>', [Yii::$app->request->url], [
                        'class' => 'btn btn-outline-secondary mr-2',
                        'title' => 'Reset Grid',
                    ]),
            ],
            '{export}',
            '{toggleData}'
        ],

        'toggleDataContainer' => ['class' => 'btn-group ml-2'],


        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            // 'heading' => $this->title,
        ],
        'persistResize' => false,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            [
                'attribute' => 'tempat_lahir',
                'filter' => Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'tempat_lahir',
                    'data' => ArrayHelper::map($searchModel->getTempatLahirList(), 'tempat_lahir', 'tempat_lahir'),
                    'options' => ['placeholder' => 'Pilih'],
                    'pluginOptions' => [
                        'allowClose' => true,
                        'allowClear' => true
                    ],
                ])
            ],
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
    ]);

    ?>


</div>