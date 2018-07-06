<?php include 'common/header.php' ?>
<div class="container">
    <div class="col-md-12 publications">
        <div class="h1">
            <div class="head_underline"><?=$page_heading?></div>
        </div>
        <div class="row">
            <?php foreach($publications as $k => $v){ ?>
                <div class="col-md-4 text-center pub_contain">
                    <a href="<?=(($v['Link'])?$v['Link']:"#")?>">
                    <div class="img_container">
                        <img src="<?= base_url('assets/images/publication/'.$v['image']) ?>" width="100%"/>
                        <p class="date">
                            <?=date('M', strtotime($v['Date']))?><br>
                            <?=date('d, Y', strtotime($v['Date']))?>
                        </p>
                    </div>
                    <div class="desc"><?=$v['Description']?></div>
                    </a>
                </div>
                
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>