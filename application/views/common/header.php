<!DOCTYPE HTML>
<html>
    <head>
        <title><?= (isset($page_title) ? $page_title . " | Museum of Goa" : "Museum of Goa") ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="museum of goa, MOG, Museum of Goa, museum, goa, contemporary arts, modern arts, modern art, contemporary art, contemporary, Goa tourism, places to visit in Goa, " />
        <meta name="description" content="museum of goa" />
        
        <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico')?>" type="image/x-icon">
        <link rel="icon" href="<?= base_url('assets/images/favicon.ico')?>" type="image/x-icon">

        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>"/>
    </head>
    <body>
        <div class="navbar-wrapper container zero_padding">
            <nav class="navbar">
                <div class="navbar-header">
                    <div class="searchbar_block_mobile visible-xs col-xs-7">
                        <input type="text" class="search_inpt" placeholder="Enter search term..." />
                        <button class="btn btn-default search_btn text-center"><i class="fa fa-search"></i></button>
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <i class="fa fa-bars"></i>
                    </button>
					<a class="navbar-brand" href="<?= base_url() ?>">
						<div class="left_mog_logo_container">
							<img src="<?= base_url("assets/images/GAAF v1.jpg") ?>">
						</div>
					</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav bordered_menu">
                        <li class="active"><?= anchor('/', 'Home') ?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                About <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><?= anchor('home/gaaf_vision', 'GAAF Vision') ?></li>
                                <li><?= anchor('home/gaaf_2017', 'GAAF 2017') ?></li>
                                <li><?= anchor('home/gaaf_2018', 'GAAF 2018') ?></li>
                                <li><?= anchor('home/Team', 'Team') ?></li>
                                <li><?= anchor('home/supporters', 'Supporters') ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Application <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><?= anchor('home/hot_to_apply', 'How to apply') ?></li>
                                <li><?= anchor('home/Application_Guidelines', 'Application guidelines') ?></li>
                                <li><?= anchor('home/Application_Form', 'Application Form') ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Art <i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li><?= anchor('home/Catalogue', 'Catalogue') ?></li>
                                <li><?= anchor('home/select_artist', 'Art Inquiry') ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Involve <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?= anchor('home/Intern', 'Intern') ?></li>
                                <li><?= anchor('home/Volunteer', 'Volunteer') ?></li>
                                <li><?= anchor('home/partners_sponsors', 'Partners & Sponsors') ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?= anchor('home/media', 'Media') ?></li>
                                <li><?= anchor('home/publications', 'Publication') ?></li>
                            </ul>
                        </li>
                        <li><?= anchor('home/vote', 'Vote') ?></li>
						<li class="cursor_pointer hidden-xs">
                            <a <!--onclick="toggle_searchbar();"--><i class="fa fa-search"></i></a>
                        </li>
                        <div class="searchbar_block col-md-9 col-sm-10 col-xs-12 hidden-xs">
                            <input type="text" class="search_inpt" placeholder="Enter search term..." />
                            <button class="btn btn-default search_btn"><i class="fa fa-search"></i></button>
                            <button class="btn btn-default search_btn" onclick="toggle_searchbar();"><i class="fa fa-times"></i></button>
                        </div>
                    </ul>
                    <ul class="nav navbar-nav navbar-right hidden-xs">
                        <a class="right_black_logo_anchor" href="http://museumofgoa.com/" target="_new">
							<div class="black_logo_div">
								<img src="<?= base_url("assets/images/MOG logo.jpg") ?>">
							</div>
						</a>
                    </ul>
                </div>
            </nav>
        </div>

