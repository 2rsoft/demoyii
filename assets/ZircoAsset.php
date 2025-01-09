<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ZircoAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        // '/zirco/dist/assets/css/bootstrap.min.css',
        // '/zirco/dist/assets/css/icons.min.css',
        // '/zirco/dist/assets/css/app.min.css',
    ];
    public $js = [
        // '/zirco/dist/assets/js/vendor.min.js',
        // '/zirco/dist/assets/libs/morris-js/morris.min.js',
        // '/zirco/dist/assets/libs/raphael/raphael.min.js',
        // '/zirco/dist/assets/js/pages/dashboard.init.js',
        // '/zirco/dist/assets/js/app.min.js',

    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
        // 'yii\bootstrap4\BootstrapAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
