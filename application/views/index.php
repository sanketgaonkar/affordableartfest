<?php include 'common/header.php' ?>
<div class="container min_height_container">
    <div class="index">
        <div id="Index_Carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php for ($i = 0; $i < count($banners); $i++) { if ($i == 0) {?>
                    <li data-target="#Index_Carousel" data-slide-to="<?=$i?>" class="active"></li>
                <?php } else { ?>
                    <li data-target="#Index_Carousel" data-slide-to="<?=$i?>"></li>
                <?php } } ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php for ($i = 0; $i < count($banners); $i++) { if ($i == 0) {?>
                <div class="item active"><img class="openurl" data-url="<?=$banners[$i]['Link']?>" src="<?= base_url('assets/images/home_banners/'.$banners[$i]['image']) ?>"></div>
                <?php } else { ?>
                <div class="item"><img class="openurl" data-url="<?=$banners[$i]['Link']?>" src="<?= base_url('assets/images/home_banners/'.$banners[$i]['image']) ?>"></div>
                <?php } } ?>
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
            <source src="<?= base_url('assets/videos/logo.mp4') ?>" type="video/mp4">
            <source src="<?= base_url('assets/videos/logo.ogg') ?>" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="feeds_container">
        <div class="container-fluid feeds">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="feed_container col-sm-12 col-xs-12">
                    <p class="hdng"><i class="fa fa-facebook"></i> Feeds</p>
                    <div class="feeds_item custom_scrollbar col-sm-12 col-xs-12">
                        <img src="<?= base_url('assets/images/facebook_feeds.png') ?>" width="100%"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="feed_container col-sm-12 col-xs-12">
                    <p class="hdng twitter"><i class="fa fa-twitter"></i> Feeds</p>
                    <div class="feeds_item custom_scrollbar col-sm-12 col-xs-12">
                        <img src="<?= base_url('assets/images/twitter_feeds.jpg') ?>" width="100%"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="feed_container col-sm-12 col-xs-12">
                    <p class="hdng"><i class="fa fa-instagram"></i> Feeds</p>
                    <div class="feeds_item custom_scrollbar col-sm-12 col-xs-12">
                        <img src="<?= base_url('assets/images/instagram.jpg') ?>" width="100%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>		
<script>
    $(document).ready(function (){
        $('.openurl').click(function (){
           window.open($(this).data('url'),"_self");
        });
    });
</script>
