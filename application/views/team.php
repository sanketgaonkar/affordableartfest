<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12 team">
        <div class="h1">
            <div class="head_underline">Our Team</div>
        </div>
        <div class="row">
            <?php foreach ($team as $key => $value) { ?>
                <div class="col-md-12 team_container">
                    <div class="col-md-4">
                        <img height="200px" width="200px" src="<?= base_url('assets/images/team/' . $value['image']) ?>" alt="<?= $value['Name'] ?>" class="img-circle">
                    </div>
                    <div class="col-md-8">
                        <p class="name"><?= $value['Name'] ?></p>
                        <p class="desig"><?= $value['Designation'] ?></p>
                        <div class="desc"><?= $value['Description'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 