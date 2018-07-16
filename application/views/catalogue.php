<?php include 'common/header.php' ?>
<style>
    .catalogue_image{
		padding:0;
		height:320px;
		-webkit-box-shadow: 20px 20px 0px 0px rgba(43,222,227,1);
		-moz-box-shadow: 20px 20px 0px 0px rgba(43,222,227,1);
		box-shadow: 20px 20px 0px 0px rgba(43,222,227,1);
	}
	.catalogue_image img{
	    
	    height:100%;
	    width:100%;
	    margin:0 auto;
		-webkit-box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
		-moz-box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
		box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
	}
	.margin_t_20{
        margin-top:20px;
    }
    .catalogue_block{
        margin-bottom:50px;
    }
	@media (max-width:425px){
		
		.catalogue_image{
		     height:200px;
		    -webkit-box-shadow: 10px 10px 0px 0px rgba(43,222,227,1);
			-moz-box-shadow: 10px 10px 0px 0px rgba(43,222,227,1);
			box-shadow: 10px 10px 0px 0px rgba(43,222,227,1);
		}
		.catalogue_text{
		    font-size:12px;
		}
		
	}
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 artist_gallery">
        <div class="col-sm-12 col-xs-12">
            <div class="h2">
                <div class="head_underline"><?= $page_heading?></div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12">
            <?php $i=0; foreach ($arts as $key => $value) {
            if($i%2 == 0){?>
            <div class="col-md-12 col-sm-12 col-xs-12 catalogue_block left_image_right_text margin_t_20">
                <div class="col-md-6 col-sm-6 col-xs-12 catalogue_image">
                    <img src="<?= base_url('assets/images/artist_gallery/' . $value['image']) ?>" />
                </div> 
                <div class="col-md-5 col-sm-5 col-xs-12 pull-right catalogue_text margin_t_20">
                    Museum of Goa launched the annual Goa Affordable Art Fest (GAAF) whose purpose is to provide quality 
					art at affordable prices with the objective to enthuse the general public to appreciate, connect and collect art.
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-md-12 col-sm-12 col-xs-12 catalogue_block right_image_left_text margin_t_20">
                <div class="col-md-5 col-sm-5 col-xs-12 pull-left catalogue_text hidden-xs margin_t_20">
                    Museum of Goa launched the annual Goa Affordable Art Fest (GAAF) whose purpose is to provide quality 
					art at affordable prices with the objective to enthuse the general public to appreciate, connect and collect art.
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 catalogue_image pull-right">
                    <img src="<?= base_url('assets/images/artist_gallery/' . $value['image']) ?>" />
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 pull-right catalogue_text margin_t_20 hidden-sm hidden-md hidden-lg">
                    Museum of Goa launched the annual Goa Affordable Art Fest (GAAF) whose purpose is to provide quality 
					art at affordable prices with the objective to enthuse the general public to appreciate, connect and collect art.
                </div>
            </div>
            <?php } $i++;} ?>
                <div class="col-md-4 text-center image_container hide">
                    <a href="<?= base_url("home/artist_art/".$value['artist_id']."/".$value['id'])?>">
                        <img src="<?= base_url('assets/images/artist_gallery/' . $value['image']) ?>" class="img">
                        <p class="name"><?= $value['Name'] ?></p>
                    </a>
                </div>
            
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 