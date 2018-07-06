<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12 artist_gallery">
        <div class="row">
            <div class="h1">
                <div class="head_underline">GAAF 2017</div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($gaaf as $key => $value) { ?>
                <div class="col-md-4 text-center image_container">
                    
                        <img src="<?= base_url('assets/images/gaaf/' . $value['image']) ?>" class="img">
                        <p class="name"><?= $value['Name'] ?></p>
                    
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 