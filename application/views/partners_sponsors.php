<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 partners">
        <div class="h2">
            <div class="head_underline">Partners & Sponsors</div>
        </div>
        <div class="col-md-6 text-center top_block">
            <div class="col-md-12">
                <p class="sponsor_title"><?=(isset($partners[1][0]['Name']))?$partners[1][0]['Name']:""?></p>
                <img class="big_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners[1][0]['image']) ?>"/>
            </div>
            <div class="col-md-12">
                <div class="desc"><?=(isset($partners[1][0]['Description']))?$partners[1][0]['Description']:""?></div>
            </div>
        </div>
        <div class="col-md-6 text-center top_block">
            <?php 
                if(isset($partners[2]) && !empty($partners[2])){
            ?>
				<div class="col-md-12 zero_padding">
					<div class="col-md-6 text-center">
						<p class="sponsor_title"><?=$partners[2][0]['Name']?></p>
						<img class="medium_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners[2][0]['image']) ?>" />
						<div class="desc"><?=$partners[2][0]['Description']?></div>
					</div>
					<div class="col-md-6 text-center">
						<p class="sponsor_title"><?=$partners[2][1]['Name']?></p>
						<img class="medium_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners[2][1]['image']) ?>" />
						<div class="desc"><?=$partners[2][1]['Description']?></div>
					</div>
				</div>
				<div class="col-md-12 zero_padding text-center">
					<div class="col-md-3 hidden-xs"></div>
					<div class="col-md-6 text-center">
						<p class="sponsor_title"><?=$partners[2][2]['Name']?></p>
						<img class="medium_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners[2][2]['image']) ?>" />
						<div class="desc"><?=$partners[2][2]['Description']?></div>
					</div>
				</div>
            <?php   
                } ?>
        </div>
        <div class="row text-center btm_block">
            
            <div class="col-md-12">
                <div class="col-md-12 text-center text-with-line">Other Sponsors&nbsp;</div>
                 <?php 
                    if(isset($partners[4]) && !empty($partners[4])){
                        foreach ($partners[4] as $partners4){ ?>
                            <div class="col-md-2 text-center">
                                <img class="small_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners4['image']) ?>" />
                                <p class="title"><?=$partners4['Title']?></p>
                                <p class="tag"><?=$partners4['Name']?></p>
                            </div>
                <?php   }
                    } ?>
            </div>
			<div class="col-md-12">
                <div class="col-md-12 text-center text-with-line">Partners&nbsp;</div>
                <?php 
                    if(isset($partners[3]) && !empty($partners[3])){
                        foreach ($partners[3] as $partners3){ ?>
                            <div class="col-md-2 text-center">
                                <img class="small_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners3['image']) ?>" />
                                <p class="title"><?=$partners3['Title']?></p>
                                <p class="tag"><?=$partners3['Name']?></p>
                            </div>
                <?php   }
                    } ?>
            </div>
        </div>
		
    </div>
	<div class="col-md-12 margin_top_container application_guidelines_container">
		<div class="col-md-12 col-sm-12 col-xs-12 application_guidelines_form sponsors_form zero_padding">
			<div class="col-sm-12 col-xs-12 zero_padding top_two_colored_div">
				<div class="col-sm-6 col-xs-12 black">
				</div>
				<div class="col-sm-6 col-xs-12 white hidden-xs"></div>
			</div>
			<div class="col-sm-12 col-xs-12 content">
				<div class="col-sm-12 col-xs-12 block">
					<h2 class="cyan_color">Sponsorship Value</h2>
				</div>
				<div class="col-sm-12 col-xs-12 block">
					<ul class="col-sm-12 col-xs-12">
						<li>GAAF is open only to Indian artists of any age.</li>
						<li>The pdf file size has to be below 35mb in size.</li>
						<li>
							There will be three levels of co-sponsors - 
							<ol class="numbered_ul">
								<li><u>Gold sponsor</u> - contribution of INR 4,50,000</li>
							</ol>
						</li>
						<li>
							Apart from that
							<ul class="dashed_ul">
								<li>Radio Partner</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 col-xs-12 block">
					<h2 class="cyan_color">Sponsorship Benefits</h2>
				</div>
				<div class="col-sm-12 col-xs-12 block last_block">
					<ul class="col-sm-12 col-xs-12">
						<li class="underlined_points_sponsor"><u>Association</u></li>
						<p>Contributing company get association with</p>
						<li class="underlined_points_sponsor"><u>Enhancing customer relations</u></li>
						<p>Contributing company get association with</p>
					</ul>
				</div>
			</div>
			<img class="texture" src="<?= base_url('assets/images/bottom.png')?>" />
		</div>
	</div>
</div>
</div>
<?php include 'common/footer.php' ?>
 