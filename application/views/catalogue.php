<?php include 'common/header.php';?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 artist_gallery">
        <div class="col-sm-12 col-xs-12">
            <div class="h2">
                <div class="head_underline"><?= $page_heading?></div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12">
            <?php $i=0; 
            if(!empty($arts)){
            foreach ($arts as $key => $value) {
            if($i%2 == 0){?>
            <div class="col-md-12 col-sm-12 col-xs-12 catalogue_block left_image_right_text margin_t_20">
                <div class="col-md-6 col-sm-6 col-xs-12 catalogue_image">
                    <a href="<?=base_url('/home/artist_art/'.$value['artist_id'].'/'.$value['id'])?>"><img src="<?= base_url('assets/images/artist_gallery/' . $value['image']) ?>" /></a>
                </div> 
                <div class="col-md-5 col-sm-5 col-xs-12 pull-right catalogue_text margin_t_20">
                   <?=$value['Name']?>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-md-12 col-sm-12 col-xs-12 catalogue_block right_image_left_text margin_t_20">
                <div class="col-md-5 col-sm-5 col-xs-12 pull-left catalogue_text hidden-xs margin_t_20">
                    <?=$value['Name']?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 catalogue_image pull-right">
                    <a href="<?=base_url('/home/artist_art/'.$value['artist_id'].'/'.$value['id'])?>"><img src="<?= base_url('assets/images/artist_gallery/' . $value['image']) ?>" /></a>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 pull-right catalogue_text margin_t_20 hidden-sm hidden-md hidden-lg">
                    <?=$value['Name']?>
                </div>
            </div>
            <?php } $i++;}}else{ ?>
            <p class="text-center"> GAAF artwork catalogue coming soon </p>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 