<?php include 'common/header.php' ?>
<style>
	.iframe_container_big{
		height:550px;
	}
	@media (max-width:425px){
		.iframe_container_big{
			height:320px;
		}
	}
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12 media_publications">
            <div class="h2">
                <div class="head_underline"><?= $page_heading ?></div>
            </div>
            <div class="col-md-12 media_blocks">
				<div class="col-md-12 col-sm-12 col-xs-12 catalogue_block margin_t_20">
					<div class="col-md-12 col-sm-12 col-xs-12 catalogue_image iframe_container_big">
						<iframe width="100%" height="100%" 
							src="https://www.youtube.com/embed/q-V_c9SiDJ8" frameborder="0" 
							allow="autoplay; encrypted-media" allowfullscreen>
						</iframe>
					</div> 
					<div class="col-md-12 col-sm-12 col-xs-12 text-center catalogue_text margin_t_20">
						GAAF 2017 covered by Goa 365 TV
					</div>
				</div>
				<div class="col-md-12 col-xs-12 zero_padding">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="col-md-12 col-sm-12 col-xs-12 catalogue_block margin_t_20">
							<div class="col-md-12 col-sm-12 col-xs-12 catalogue_image">
								<iframe width="100%" height="100%" 
									src="https://www.heraldgoa.in/Cafe/Bringing-people-closer-to-art/124010.html" frameborder="0" 
									allow="autoplay; encrypted-media" allowfullscreen>
								</iframe>
							</div> 
							<div class="col-md-12 col-sm-12 col-xs-12 text-center catalogue_text margin_t_20">
								GAAF 2017 covered by Herald
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="col-md-12 col-sm-12 col-xs-12 catalogue_block margin_t_20">
							<div class="col-md-12 col-sm-12 col-xs-12 catalogue_image">
								<iframe width="100%" height="100%" 
									src="https://timesofindia.indiatimes.com/city/goa/an-art-fest-thats-easy-on-the-pocket/articleshow/61231795.cms" frameborder="0" 
									allow="autoplay; encrypted-media" allowfullscreen>
								</iframe>
							</div> 
							<div class="col-md-12 col-sm-12 col-xs-12 text-center catalogue_text margin_t_20">
								GAAF 2017 covered by TOI
							</div>
						</div>
					</div>
				</div>
                <?php /*foreach ($media as $k => $v) { ?>
                    <!--div class="col-md-4 col-sm-6 col-xs-12 media_block">
                        <a href="<?= (($v['Link']) ? $v['Link'] : "#") ?>" target="_new">
                            <div class="col-sm-12 col-xs-12 inner_block">
                                <div class="col-sm-12 col-xs-12 image_block">
                                    <div class="overlay"></div>
                                    <img src="<?= base_url('assets/images/media/' . $v['image']) ?>" width="100%"/>
                                    <div class="date"><?= date('M ', strtotime($v['Date'])) ?><?= date('d, Y', strtotime($v['Date'])) ?></div>
                                </div>
                                <div class="col-sm-12 col-xs-12 title_block"><?= $v['Description'] ?></div>
                            </div>
                        </a>
                    </div-->
                <?php } */?>
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>