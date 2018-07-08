<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MOG Admin<?= (isset($page_title)) ? " | " . $page_title : "" ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/AdminLTE.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/skins/skin-blue.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/css/style.css') ?>">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="<?= base_url("assets/images/mog_logo.png") ?>" style="width: 130px;">
            </div>
            <div class="login-box-body">
                <?php $errors = trim(validation_errors()); if (!empty($errors) || isset($error)) { ?>
                    <div class="alert alert-danger" role="alert">Enter Invalid Admin Id / Password</div>
                <?php } ?>
                <?= form_open("Mog_admin/login") ?>
                <div class="form-group has-feedback">
                    <label>Email:</label><!--<?= set_value('admin_id') ?>-->
                    <input type="email" class="form-control" placeholder="Email" name="admin_id">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Password:</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
                <?= form_close() ?>
                <!--a href="#">I forgot my password</a><br-->
            </div>
        </div>
        <script src="<?= base_url('assets/admin/bower_components/jquery/dist/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/dist/js/adminlte.min.js') ?>"></script>
    </body>
</html>