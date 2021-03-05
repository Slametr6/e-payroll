<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Payroll - <?= $judul;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>assets/images/icon/dpt1.png">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="<?= base_url('app');?>"><img src="<?= base_url();?>assets/images/icon/dpt.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="<?= base_url();?>assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('username');?> <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
									<?php
									if ($this->session->userdata('username') == 'admin') {
										?>
										<a class="dropdown-item" href="<?= base_url();?>app/profiladmin/<?= $this->session->userdata('id_user');?>">Profil</a>
									<?php } else {
										?>
										<a class="dropdown-item" href="<?= base_url();?>app/tampilprofil/<?= $this->session->userdata('id_user');?>">Profil</a>
									<?php } ?>
                                    <a class="dropdown-item" href="<?= base_url();?>auth/ubahpass/<?= $this->session->userdata('id_user');?>">Ubah Password</a>
                                    <a class="dropdown-item" href="<?= base_url();?>auth/logout">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
