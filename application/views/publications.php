<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 media_publications">
        <div class="h2">
            <div class="head_underline"><?=$page_heading?></div>
        </div>
        <div class="col-md-12 media_blocks">
            <?php foreach($publications as $k => $v){ ?>
                <div class="col-md-4 col-sm-6 col-xs-12 media_block">
                    <a href="<?=(($v['Link'])?$v['Link']:"#")?>">
                    <div class="col-sm-12 col-xs-12 inner_block">
						<div class="col-sm-12 col-xs-12 image_block">
							<div class="overlay"></div>
							<img src="<?= base_url('assets/images/publication/'.$v['image']) ?>" width="100%"/>
							<div class="date"><?=date('M ', strtotime($v['Date']))?><?=date('d, Y', strtotime($v['Date']))?></div>
						</div>
						<div class="col-sm-12 col-xs-12 title_block"><?=$v['Description']?></div>
                    </div>
                    </a>
				</div>
            <?php } ?>
        </div>
	</div>
</div>
</div>
<?php include 'common/footer.php' ?>