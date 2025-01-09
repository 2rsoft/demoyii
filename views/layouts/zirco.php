<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\ZircoAsset;
use yii\helpers\Html;
// use kartik\widgets\Growl;

ZircoAsset::register($this);

// on your view layout file
// use kartik\icons\FontAwesomeAsset;
// FontAwesomeAsset::register($this);



$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= Html::encode($this->title) ?> | Zircos - Responsive Bootstrap 4 Admin Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/zirco/dist/assets/images/favicon.ico">

    <!-- App css -->
    <link href="/zirco/dist/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="/zirco/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/zirco/dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    <?php $this->head() ?>

</head>

<body data-layout="horizontal">
    <?php $this->beginBody() ?>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- navbar -->
        <?= \app\components\NavbarWidget::widget() ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <?php if ($this->title == "Beranda") { ?>
                <?= $content ?>
            <?php } else { ?>
                <div class="content">
                    <div class="container-fluid">
                        <?= $content ?>
                    </div>
                </div>
            <?php } ?>


            <?= \app\components\FooterWidget::widget() ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= \app\components\OverlayWidget::widget() ?>

    <!-- Vendor js -->
    <script src="/zirco/dist/assets/js/vendor.min.js"></script>

    <script src="/zirco/dist/assets/libs/morris-js/morris.min.js"></script>
    <script src="/zirco/dist/assets/libs/raphael/raphael.min.js"></script>

    <!-- <script src="/zirco/dist/assets/js/pages/dashboard.init.js"></script> -->

    <!-- App js -->
    <script src="/zirco/dist/assets/js/app.min.js"></script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>