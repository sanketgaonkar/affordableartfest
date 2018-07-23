<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12 artist_gallery highlights_container">
            <div class="row">
                <div class="h2">
                    <div class="head_underline">GAAF 2017</div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <?php foreach($gaaf as $v){?>
                <div class="col-md-12 col-sm-12 col-xs-12 catalogue_block left_image_right_text margin_t_20">
                    <div class="col-md-6 col-sm-6 col-xs-12 catalogue_image">
                        <img src="<?= base_url("assets/images/gaaf/".$v['image'])?>" />
                    </div> 
                    <div class="col-md-5 col-sm-5 col-xs-12 pull-right catalogue_text margin_t_20">
                        <?=$v['Name']?>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 