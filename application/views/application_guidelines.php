<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12">
            <div class="h2">
                <div class="head_underline"><?= $page_heading ?></div>
            </div>
            <div class="col-md-12 application_guidelines_container">
                <div class="col-md-2 col-sm-1 col-xs-0"></div>
                <div class="col-md-8 col-sm-10 col-xs-12 application_guidelines_form zero_padding">
                    <div class="col-sm-12 col-xs-12 zero_padding top_two_colored_div">
                        <div class="col-sm-6 col-xs-12 black">
                        </div>
                        <div class="col-sm-6 col-xs-12 white hidden-xs"></div>
                    </div>
                    <div class="col-sm-12 col-xs-12 content">
                        <div class="col-sm-12 col-xs-12 block">
                            <?=$application_guidelines['ag']['description']?>
                        </div>
                        <div class="col-sm-12 col-xs-12 block">
                            <h2>GUIDELINES TO APPLY</h2>
                        </div>
                        <div class="col-sm-12 col-xs-12 block last_block">
                            <ul class="col-sm-12 col-xs-12">
                                <?php foreach($application_guidelines['gta'] as $v){?>
                                    <li><?=$v['description']?></li>
                                <?php }?>
                            </ul>
                        </div>

                    </div>
                    <img class="texture" src="<?= base_url('assets/images/bottom.png') ?>" />
                </div>
                <div class="col-md-2 col-sm-1 col-xs-0"></div>
                <div class="col-sm-12 col-xs-12 zero_padding margin_top_container">
                    <div class="col-md-2 col-sm-1 col-xs-0"></div>
                    <div class="col-md-8 col-sm-10 col-xs-12 application_guidelines_form zero_padding">
                        <div class="col-sm-12 col-xs-12 zero_padding top_two_colored_div">
                            <div class="col-sm-6 col-xs-12 black">
                                <h2>TERMS AND <span class="hidden-md hidden-lg visible-xs">CONDITIONS</span></h2>
                            </div>
                            <div class="col-sm-6 col-xs-12 white hidden-xs">
                                <h2>CONDITIONS</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 content">
                            <div class="col-sm-12 col-xs-12 block last_block">
                                <ul class="col-sm-12 col-xs-12">
                                    <?php foreach($application_guidelines['tac'] as $v1){?>
                                        <li><?=$v1['description']?></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <img class="texture" src="<?= base_url('assets/images/bottom.png') ?>" />
                    </div>
                    <div class="col-md-2 col-sm-1 col-xs-0"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>