<?php

use kartik\mpdf\Pdf;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'layout' => 'zirco',
    // 'view' => [
    //     'theme' => [
    //         'basePath' => '@app/views'
    //     ]
    // ],
    'defaultRoute' => 'home',
    'container' => require __DIR__ . '/container.php',
    'modules' => [
        // 'admin' => [
        //     'class' => 'mdm\admin\Module',
        //     // ...
        // ],
        'gridview' =>  [
            'class' => \kartik\grid\Module::class,
            'bsVersion' => '4.x', // or '3.x'
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => [],
            // 'exportEncryptSalt' => 'tG85vd1',
        ]
    ],
    'components' => [
        // 'pdf' => [
        //     'class' => Pdf::classname(),
        //     'format' => Pdf::FORMAT_A4,
        //     'orientation' => Pdf::ORIENT_PORTRAIT,
        //     'destination' => Pdf::DEST_BROWSER,
        //     // refer settings section for all configuration options
        // ],

        'authManager' => [
            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        ],

        'i18n' => [
            'translations' => [
                'yii2-ajaxcrud' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2ajaxcrud/ajaxcrud/messages',
                    'sourceLanguage' => 'en', // en || id
                ],
            ]
        ],

        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => []
                ],

                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => []
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                ],

                'yii\bootstrap4\BootstrapPluginAsset' => [
                    'js' => []
                ],
                'yii\bootstrap4\BootstrapAsset' => [
                    'css' => [],
                ],

                'yii\bootstrap5\BootstrapPluginAsset' => [
                    'js' => []
                ],
                'yii\bootstrap5\BootstrapAsset' => [
                    'css' => [],
                ],

                // 'kartik\form\ActiveFormAsset' => [
                //     'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
                // ],

            ],
        ],

        'formatter' => [
            'class' => 'yii\i18n\formatter',
            'thousandSeparator' => '.',
            'decimalSeparator' => ',',
            'numberFormatterOptions' => [
                NumberFormatter::MIN_FRACTION_DIGITS => 0,
                NumberFormatter::MAX_FRACTION_DIGITS => 3,
            ]
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'xKXe_-V8axPsNi4m-dPD5GLaWydWZzoW',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        // 'user' => [
        //     'identityClass' => 'app\models\MasterAdmin',
        //     'enableAutoLogin' => true,
        // ],
        'errorHandler' => [
            'errorAction' => 'common/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@app/runtime/logs/database.log', // Log file path
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => 'logout',
                    'route' => 'home/logout'
                ]
            ],
        ],

    ],
    // 'as access' => [
    //     'class' => 'mdm\admin\components\AccessControl',
    //     'allowActions' => [
    //         'site/*',
    //         'admin/*',
    //         'some-controller/some-action',
    //         // The actions listed here will be allowed to everyone including guests.
    //         // So, 'admin/*' should not appear here in the production, of course.
    //         // But in the earlier stages of your development, you may probably want to
    //         // add a lot of actions here until you finally completed setting up rbac,
    //         // otherwise you may not even take a first step.
    //     ]
    // ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
