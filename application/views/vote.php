<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 vote">
        <div class="h2">
            <div class="head_underline"><?=$page_heading?></div>
        </div>
		<div class="col-sm-12 col-xs-12">
            <?php foreach($arts as $k => $v){?>
            <div class="col-sm-12 col-xs-12 vote_list_block">
				<div class="col-sm-5 col-xs-6 image_block">
					<img src="<?=base_url("assets/images/artist_gallery/".$v['image'])?>">
				</div>
				<div class="col-sm-5 col-xs-4 descript_block"><?=$v['Name']?></div>
				<div class="col-sm-2 col-xs-2 vote_btn">
					<button class="btn btn-default btn-xs visible-xs" value="vote"><i class="fa fa-angellist"></i> Vote</button>
					<button class="btn btn-default btn-md hidden-xs" value="vote"><i class="fa fa-angellist"></i> Vote</button>
				</div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
