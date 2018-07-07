<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12">
        <div class="h1">
            <div class="head_underline"><?=$page_heading?></div>
        </div>
        <div class="row">
            <?php foreach($arts as $k => $v){?>
            <div class="col-md-12">
            <div class="col-md-5">
                <img src="<?=base_url("assets/images/artist_gallery/".$v['image'])?>" height="100px">
            </div>
            <div class="col-md-5"><?=$v['Name']?></div>
            <div class="col-md-2"><input type="button" value="vote"/></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 