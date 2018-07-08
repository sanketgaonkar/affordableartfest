<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 partners">
        <div class="h2">
            <div class="head_underline">Partners & Sponsors</div>
        </div>
        <div class="row text-center top_block">
            <div class="col-md-12">
                <p class="sponsor_title"><?=(isset($partners[1][0]['Name']))?$partners[1][0]['Name']:""?></p>
                <img class="big_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners[1][0]['image']) ?>"/>
            </div>
            <div class="col-md-12">
                <div class="desc"><?=(isset($partners[1][0]['Description']))?$partners[1][0]['Description']:""?></div>
            </div>
        </div>
        <div class="row text-center btm_block">
            <?php 
                if(isset($partners[2]) && !empty($partners[2])){
                    foreach ($partners[2] as $partners2){ ?>
                        <div class="col-md-4 text-center">
							<p class="sponsor_title"><?=$partners2['Name']?></p>
							<img class="medium_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners2['image']) ?>" />
							<div class="desc"><?=$partners2['Description']?></div>
                        </div>
            <?php   }
                } ?>
        </div>
        <div class="row text-center btm_block">
            <div class="col-md-6">
                <div class="col-md-12 text-center text-with-line">Partners&nbsp;</div>
                <?php 
                    if(isset($partners[3]) && !empty($partners[3])){
                        foreach ($partners[3] as $partners3){ ?>
                            <div class="col-md-4 text-center">
                                <img class="small_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners3['image']) ?>" />
                                <p class="title"><?=$partners3['Title']?></p>
                                <p class="tag"><?=$partners3['Name']?></p>
                            </div>
                <?php   }
                    } ?>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 text-center text-with-line">Sponsors&nbsp;</div>
                 <?php 
                    if(isset($partners[4]) && !empty($partners[4])){
                        foreach ($partners[4] as $partners4){ ?>
                            <div class="col-md-4 text-center">
                                <img class="small_image" src="<?= base_url('assets/images/partners_sponsors/'.$partners4['image']) ?>" />
                                <p class="title"><?=$partners4['Title']?></p>
                                <p class="tag"><?=$partners4['Name']?></p>
                            </div>
                <?php   }
                    } ?>
            </div>

        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 