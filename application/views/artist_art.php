<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12 artist_art">
        <div class="row hide">
            <h2 class="name"><?= $artist_info['Name'] ?></h2>
            <?=anchor("home/artist_gallery/".$artist_id,'<button class="btn btn-default"><i class="fa fa-reply" aria-hidden="true"></i> Back</button>','class="pull-right"')?>
        </div>
    <div class="row "><hr></div>
        <div class="row">

            <div class="col-md-5 text-center image_container">

                <img src="<?= base_url('assets/images/artist_gallery/' . $image['image']) ?>" class="img">


            </div>
            <div class="col-md-7 image_details">

                <h3 class="name"><?= $image['Name'] ?></h3>
                <p class="desc"><?= $image['Description'] ?></p>
                <p class="price">Price: INR <?= $image['Price'] ?></p>
                <p class="medium">Medium: <?= $image['Medium'] ?></p>
                <p class="size">Size: <?= $image['Size'] ?></p>
                <p class="Weight">Weight: <?= $image['Weight'] ?></p>


            </div>

        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 