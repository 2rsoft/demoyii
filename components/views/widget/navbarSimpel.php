<?php

use app\components\AccessControl;
use app\helpers\StringHelper;
use yii\helpers\Url;
?>
<!-- Navigation Bar-->
<header id="topnav">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>



                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/zirco/dist/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a> -->

                        <!-- item-->
                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings-outline"></i>
                            <span>Settings</span>
                        </a> -->

                        <!-- item-->
                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline"></i>
                            <span>Lock Screen</span>
                        </a> -->

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="<?= Url::toRoute('/logout') ?>" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="mdi mdi-settings-outline noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <!-- <img src="/zirco/dist/assets/images/logo.png" alt="" height="30"> -->
                        <span class="logo-lg-text-light">RekaRupa</span>
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">Z</span> -->
                        <img src="/zirco/dist/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                </a>
            </div>


            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                <!-- <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li> -->
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="/"> <i class="mdi mdi-view-dashboard"></i>Beranda</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="mdi mdi-view-dashboard"></i>Pengaturan</a>
                        <ul class="submenu">
                            <li><a href="/masteradmin">Master Pengguna</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="mdi mdi-view-dashboard"></i>Data Master</a>
                        <ul class="submenu">
                            <li><a href="/masterpegawai">Data Pegawai</a></li>
                            <li><a href="/masterdivisi">Data Divisi</a></li>
                            <li><a href="/masterjabatan">Data Jabatan</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="mdi mdi-view-dashboard"></i>Data Karyawan</a>
                        <ul class="submenu">
                            <li><a href="/mastergaji">Gaji</a></li>
                            <li><a href="/entriabsensi">Absensi</a></li>
                            <li><a href="/entricuti">Cuti</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="mdi mdi-view-dashboard"></i>Data Keuangan</a>
                        <ul class="submenu">
                            <li><a href="/entrihutang">Hutang</a></li>
                            <li><a href="/entripiutang">Piutang</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="mdi mdi-google-pages"></i>
                            <?php if (!empty(StringHelper::getLoginSession())) {  ?>
                                Anda login sebagai <?= StringHelper::getLoginSession()->username ?>
                            <?php } ?>
                        </a>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->