<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MOG Admin<?= (isset($page_title)) ? " | " . $page_title : "" ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css') ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css') ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/AdminLTE.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/skins/skin-blue.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/css/style.css') ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <?php $method = $this->router->fetch_method(); ?>
        <div class="wrapper">
            <header class="main-header">
                <a href="index2.html" class="logo">
                    <span class="logo-mini"><b>MOG</b></span>
                    <span class="logo-lg"><b>MOG Admin</b></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-gears"></i>
                                    <span class="hidden-xs">My Accounts</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <!-- Menu Body -->
                                    <li class="user-body hide">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left hide">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <?= anchor('Mog_admin/logout', 'Sign out', 'class="btn btn-default btn-flat"') ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>         
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">

                        <li class="<?=(($method=="index")?"active":"")?>"><?= anchor('Mog_admin/', '<i class="fa fa-dashboard"></i> <span>Dashboard</span>') ?></li>
                        <li class="treeview <?=(($method=="Category" || $method=="Artist" || $method=="Arts" || $method=="edit_artist" || $method=="edit_category" || $method=="edit_arts")?"active":"")?>">
                            <a href="#"><i class="fa fa-link"></i> <span>Art</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?=(($method=="Category"|| $method=="edit_category")?"active":"")?>"><?= anchor('Mog_admin/Category', '<i class="fa fa-pencil"></i> <span>Category</span>') ?></li>
                                <li class="<?=(($method=="Artist"|| $method=="edit_artist")?"active":"")?>"><?= anchor('Mog_admin/Artist', '<i class="fa fa-pencil"></i> <span>Artist</span>') ?></li>
                                <li class="<?=(($method=="Arts"|| $method=="edit_arts")?"active":"")?>"><?= anchor('Mog_admin/Arts', '<i class="fa fa-pencil"></i> <span>Arts</span>') ?></li>
                            </ul>
                        </li>
                        <li class="<?=(($method=="team")?"active":"")?>"><?= anchor('Mog_admin/team', '<i class="fa fa-user"></i> <span>Team</span>') ?></li>
                        <li class="<?=(($method=="gaaf")?"active":"")?>"><?= anchor('Mog_admin/gaaf', '<i class="fa fa-user"></i> <span>GAAF 2017</span>') ?></li>
                        <li class="<?=(($method=="partners_sponsors")?"active":"")?>"><?= anchor('Mog_admin/partners_sponsors', '<i class="fa fa-user"></i> <span>Partners & Sponsors</span>') ?></li>
                        <li class="<?=(($method=="publications")?"active":"")?>"><?= anchor('Mog_admin/publications', '<i class="fa fa-user"></i> <span>Publication</span>') ?></li>
                        <li class="<?=(($method=="media")?"active":"")?>"><?= anchor('Mog_admin/media', '<i class="fa fa-user"></i> <span>Media</span>') ?></li>

                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?= (isset($page_heading)) ? $page_heading : "" ?>
                        <small class="hide">Optional description</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><?= anchor('Mog_admin/', '<i class="fa fa-dashboard"></i> Dashboard') ?></li>
                        <?php
                        if (isset($breadcrums)) {
                            foreach ($breadcrums as $v) {
                                echo $v;
                            }
                        }
                        ?>
                    </ol>
                </section>
