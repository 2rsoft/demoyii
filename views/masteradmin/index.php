<?php

use app\models\MasterAdmin;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'username',
            'password',
            [
                'class' => ActionColumn::class,
                'template' => '{view} {update} {delete} {password}',
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
                    'password' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', 'Ubah Password'),
                            'class' => 'btn btn-xs btn-info',
                        ];
                        return Html::a('<i class="mdi mdi-qrcode-remove "></i>', $url, $options);
                    }
                ],
            ],
        ],
    ]); ?>


</div>