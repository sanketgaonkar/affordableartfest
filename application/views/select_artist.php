<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 select_artist">
        <div class="h2">
            <div class="head_underline">Select Artist</div>
        </div>
        <div class="row artist_list">
            <?php foreach ($artists as $k => $v){ ?>
            <div class="col-md-4 text-center artist">
                <a href="<?= base_url('home/artist_gallery/'.$v['id'])?>">
                    <div><img src="<?= base_url('assets/images/artist/'.$v['image'])?>" alt="" ></div>
                    <div class="artist_details"><?=$v['Name']?></div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>			
