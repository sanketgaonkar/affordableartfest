<?php include 'common/header.php' ?>
<div class="container min_height_container">
<div class="index">
    <div id="Index_Carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#Index_Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Index_Carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active"><img src="<?= base_url('assets/images/about_us/plan-2-9843354173.jpg') ?>"/></div>
            <div class="item"><img src="<?= base_url('assets/images/about_us/capture-9446543338.jpg') ?>"/></div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#Index_Carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Index_Carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="col-sm-12 col-xs-12 video_container">
	<video width="100%" controls autoplay>
		<source src="<?= base_url('assets/videos/logo.mp4')?>" type="video/mp4">
		<source src="<?= base_url('assets/videos/logo.ogg')?>" type="video/ogg">
		Your browser does not support the video tag.
	</video>
</div>
<div class="feeds_container">
    <div class="container-fluid feeds">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="feed_container col-sm-12 col-xs-12">
                <p class="hdng"><i class="fa fa-facebook"></i> Feeds</p>
                <div class="feeds_item custom_scrollbar col-sm-12 col-xs-12">
                    <img src="<?= base_url('assets/images/facebook_feeds.png')?>" width="100%"/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="feed_container col-sm-12 col-xs-12">
                <p class="hdng twitter"><i class="fa fa-twitter"></i> Feeds</p>
                <div class="feeds_item custom_scrollbar col-sm-12 col-xs-12">
                    <img src="<?= base_url('assets/images/twitter_feeds.jpg')?>" width="100%"/>
                </div>
            </div>
        </div>
		 <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="feed_container col-sm-12 col-xs-12">
                <p class="hdng"><i class="fa fa-instagram"></i> Feeds</p>
                <div class="feeds_item custom_scrollbar col-sm-12 col-xs-12">
                    <img src="<?= base_url('assets/images/instagram.jpg')?>" width="100%"/>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>			
