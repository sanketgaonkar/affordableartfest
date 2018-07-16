<?php include 'common/header.php' ?>
<style>
    .catalogue_image{
		padding:0;
		-webkit-box-shadow: 20px 20px 0px 0px rgba(43,222,227,1);
		-moz-box-shadow: 20px 20px 0px 0px rgba(43,222,227,1);
		box-shadow: 20px 20px 0px 0px rgba(43,222,227,1);
	}
	.catalogue_image img{
	    height:320px;
		-webkit-box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
		-moz-box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
		box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
	}
	.margin_t_20{
        margin-top:20px;
    }
   
	@media (max-width:425px){
		
		.catalogue_image{
		    -webkit-box-shadow: 10px 10px 0px 0px rgba(43,222,227,1);
			-moz-box-shadow: 10px 10px 0px 0px rgba(43,222,227,1);
			box-shadow: 10px 10px 0px 0px rgba(43,222,227,1);
		}
		.catalogue_image img{
		    height:200px;
		}
		.catalogue_text{
		    font-size:12px;
		}
		
	}
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 artist_art">
        <div class="col-sm-12 col-xs-12 hide">
            <h2 class="name"><?= $artist_info['Name'] ?></h2>
            <?=anchor("home/artist_gallery/".$artist_id,'<button class="btn btn-default"><i class="fa fa-reply" aria-hidden="true"></i> Back</button>','class="pull-right"')?>
        </div>
        <div class="col-sm-12 col-xs-12 margin_t_20">
            <div class="col-md-5 col-sm-5 col-xs-12 text-center catalogue_image margin_t_20">
                <img src="<?= base_url('assets/images/artist_gallery/' . $image['image']) ?>" class="img" width="100%" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 image_details pull-right margin_t_20">
                <h3 class="name"><?= $image['Name'] ?></h3>
                <p class="desc catalogue_text"><?= $image['Description'] ?></p>
                <p class="price catalogue_text">Price: INR <?= $image['Price'] ?></p>
                <p class="medium catalogue_text">Medium: <?= $image['Medium'] ?></p>
                <p class="size catalogue_text">Size: <?= $image['Size'] ?></p>
                <p class="Weight catalogue_text">Weight: <?= $image['Weight'] ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 