<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12 select_artist">
        <div class="h2">
            <div class="head_underline">Select Artist</div>
        </div>
        <div class="row artist_list">
            <?php foreach ($artists as $k => $v){ ?>
            <div class="col-md-4 text-center artist">
                <a href="<?= base_url('home/artist_gallery/'.$v['id'])?>">
                    <img src="<?= base_url('assets/images/artist/'.$v['image'])?>" alt="" class="img-circle">
                    <div class="artist_details text-center">
                        <p><?=$v['Name']?></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>			
