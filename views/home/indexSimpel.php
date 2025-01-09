<?php

$this->title = "Beranda";
// $this->registerJsFile('/zirco/dist/assets/js/pages/dashboard.init.js');

use kartik\growl\Growl as GrowlNotif;
echo GrowlNotif::widget([
    'type' => GrowlNotif::TYPE_SUCCESS,
    'title' => 'Yuhuuu!',
    'icon' => 'fas fa-check-circle',
    'body' => 'Selamat Datang',
    'showSeparator' => true,
    'delay' => 0,
    'pluginOptions' => [
        'showProgressbar' => true,
        'placement' => [
            'from' => 'top',
            'align' => 'right',
        ]
    ]
]);

?>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard </a></li>
                            <li class="breadcrumb-item active"><?= $this->title ?></li>
                        </ol>
                    </div>
                    <h4 class="page-title"><?= $this->title ?></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

    </div>
    <!-- end container-fluid -->

</div>
<!-- end content -->