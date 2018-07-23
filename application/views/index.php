<?php include 'common/header.php' ?>
<div class="container min_height_container">
    <div class="index col-sm-12 col-xs-12 zero_padding" style="margin-top:56px;">
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
        <video width="100%" controls autoplay loop>
            <source src="<?= base_url('assets/videos/logo.mp4') ?>" type="video/mp4">
            <source src="<?= base_url('assets/videos/logo.ogg') ?>" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="feeds_container">
        <div class="col-sm-12 col-xs-12 feeds zero_padding">
            <div class="col-md-4 col-sm-12 col-xs-12 padding_left_0">
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
                        <a class="twitter-timeline" href="https://twitter.com/GAAFofficial?ref_src=twsrc%5Etfw">Tweets by GAAFofficial</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 padding_right_0">
                <div class="feed_container col-sm-12 col-xs-12">
                    <p class="hdng"><i class="fa fa-instagram"></i> Feeds</p>
                    <div class="feeds_item custom_scrollbar col-sm-12 col-xs-12">
                        <script src="//cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/7164bf8315bc57a496cf6c01b4f9cb75.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>		
<script type="text/javascript" src="<?=base_url('assets/js/instafeed.min.js')?>"></script>
<script>
    $(document).ready(function (){
        $('.openurl').click(function (){
           window.open($(this).data('url'),"_self");
        });
    });
</script>