<!DOCTYPE HTML>
<html>
<head>
    <title><?=$page_title?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
   
    
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
    <style>
        .navbar{
            border-bottom: solid 1px #e8e8e8;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/images/mog_logo.png')?>" style="width:150px;height:100px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: black"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>