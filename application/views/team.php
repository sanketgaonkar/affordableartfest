<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 team">
        <div class="h2">
            <div class="head_underline">Our Team</div>
        </div>
        <div class="row">
            <?php foreach ($team as $key => $value) { ?>
                <div class="col-md-12 team_container">
                    <div class="col-md-2">
                        <img height="120px" width="120px" src="<?= base_url('assets/images/team/' . $value['image']) ?>" alt="<?= $value['Name'] ?>" class="img-circle">
                    </div>
                    <div class="col-md-10">
                        <p class="name"><?= $value['Name'] ?></p>
                        <p class="desig"><?= $value['Designation'] ?></p>
                        <div class="desc"><?= $value['Description'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>