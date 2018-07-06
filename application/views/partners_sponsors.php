<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12 partners">
        <div class="h1">
            <div class="head_underline">Partners & Sponsors</div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center col-md-offset-4">
                <p><?=(isset($partners[1][0]['Name']))?$partners[1][0]['Name']:""?></p>
                <img src="<?= base_url('assets/images/partners_sponsors/'.$partners[1][0]['image']) ?>" width="50%"/>
            </div>
            <div class="col-md-12">
                <div class="desc"><?=(isset($partners[1][0]['Description']))?$partners[1][0]['Description']:""?></div>
            </div>
        </div>
        <div class="col-md-12 height"></div>
        <div class="row">
            <?php 
                if(isset($partners[2]) && !empty($partners[2])){
                    foreach ($partners[2] as $partners2){ ?>
                        <div class="col-md-4 text-center">
                        <p><?=$partners2['Name']?></p>
                        <img src="<?= base_url('assets/images/partners_sponsors/'.$partners2['image']) ?>" width="50%"/>
                        <div class="desc"><?=$partners2['Description']?></div>
                        </div>
            <?php   }
                } ?>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12 text-center text-with-line">Partners</div>
                <?php 
                    if(isset($partners[3]) && !empty($partners[3])){
                        foreach ($partners[3] as $partners3){ ?>
                            <div class="col-md-4 text-center">
                                <img src="<?= base_url('assets/images/partners_sponsors/'.$partners3['image']) ?>" width="50%"/>
                                <p class="title"><?=$partners3['Title']?></p>
                                <p class="tag"><?=$partners3['Name']?></p>
                            </div>
                <?php   }
                    } ?>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 text-center text-with-line">Sponsors</div>
                 <?php 
                    if(isset($partners[4]) && !empty($partners[4])){
                        foreach ($partners[4] as $partners4){ ?>
                            <div class="col-md-4 text-center">
                                <img src="<?= base_url('assets/images/partners_sponsors/'.$partners4['image']) ?>" width="50%"/>
                                <p class="title"><?=$partners4['Title']?></p>
                                <p class="tag"><?=$partners4['Name']?></p>
                            </div>
                <?php   }
                    } ?>
            </div>

        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 