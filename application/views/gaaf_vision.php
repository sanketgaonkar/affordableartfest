<?php include 'common/header.php' ?>
<style>
    .margin_tb_20{
        margin-top:20px;
    }
	.padding_top_20p{
		padding-top:20%;
	}
	.gaaf_vision_image
	{
		margin-bottom:50px;
		padding:0;
		-webkit-box-shadow: 50px 50px 0px 0px rgba(43,222,227,1);
		-moz-box-shadow: 50px 50px 0px 0px rgba(43,222,227,1);
		box-shadow: 50px 50px 0px 0px rgba(43,222,227,1);
	}
	.gaaf_vision_image img
	{
		-webkit-box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
		-moz-box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
		box-shadow: -8px 8px 10px 0px rgba(187,187,187,1);
	}
        .incr{
            font-size: 20px;
        }
        
	@media (max-width:768px)
	{
		.padding_top_20p
		{
			padding-top:0;
		}
		
	}
	@media (max-width:425px)
	{
		.gaaf_vision_image
		{
			-webkit-box-shadow: 30px 30px 0px 0px rgba(43,222,227,1);
			-moz-box-shadow: 30px 30px 0px 0px rgba(43,222,227,1);
			box-shadow: 30px 30px 0px 0px rgba(43,222,227,1);
		}
		
	}
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12 media_publications">
            <div class="h2">
                <div class="head_underline">GAAF Vision</div>
            </div>
            <div class="col-md-12 col-xs-12">
				<div class="col-md-6 col-sm-11 col-xs-10 margin_tb_20 gaaf_vision_image">
                     <img src="<?= base_url('assets/images/folder_2/Image_2.jpg') ?>" width="100%" />
                </div>
                <div class="col-md-5 col-xs-12 pull-right margin_tb_20 padding_top_20p">
                    <span class="incr">Museum of Goa</span> launched the annual <span class="incr">Goa Affordable Art Fest (GAAF)</span> whose purpose is to provide <span class="incr">quality 
                        art</span> at <span class="incr">affordable prices</span> with the objective to enthuse the general public to appreciate, connect and collect art.
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>