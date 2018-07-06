<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12 artist_gallery">
        <div class="row">
            <div class="h1">
                <div class="head_underline"><?= $page_heading?></div>
            </div>
        </div>
        <div class="row"><hr></div>
        <div class="row">
            <?php foreach ($arts as $key => $value) { ?>
                <div class="col-md-4 text-center image_container">
                    <a href="<?= base_url("home/artist_art/".$value['artist_id']."/".$value['id'])?>">
                        <img src="<?= base_url('assets/images/artist_gallery/' . $value['image']) ?>" class="img">
                        <p class="name"><?= $value['Name'] ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 