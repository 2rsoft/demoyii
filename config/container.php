<?php

use yii\helpers\Html;

return [
    'definitions' => [
        \yii\widgets\LinkPager::class => \yii\bootstrap4\LinkPager::class,

        'yii\data\Pagination' => [
            'pageSize' => 5,
        ],

        // 'yii\widgets\LinkPager' => [
        //     'maxButtonCount' => 4,
        //     'firstPageLabel' => 'Awal',
        //     'prevPageLabel' => '<',
        //     'nextPageLabel' => '>',
        //     'lastPageLabel' => 'Akhir',
        //     'linkContainerOptions' => ['class' => 'page-item'],
        //     'linkOptions' => ['class' => 'page-link'],
        //     'disabledPageCssClass' => ['class' => 'page-link'],
        //     'disabledPageCssClass' => ['class' => 'page-link'],
        //     'options' => ['class' => 'pagination  pagination-sm']
        // ],

        'yii\grid\ActionColumn' => [
            'template' => '{view} {update} {delete}',
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
        ]
    ],
];
