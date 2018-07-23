<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12 partners">
            <div class="h2">
                <div class="head_underline">Partners & Sponsors</div>
            </div>
            <div class="col-md-6 text-center top_block">
                <div class="col-md-12">
                    <p class="sponsor_title"><?= (isset($partners[1][0]['Name'])) ? $partners[1][0]['Name'] : "" ?></p>
                    <img class="big_image" src="<?= base_url('assets/images/partners_sponsors/' . $partners[1][0]['image']) ?>"/>
                </div>
                <div class="col-md-12">
                    <div class="desc"><?= (isset($partners[1][0]['Description'])) ? $partners[1][0]['Description'] : "" ?></div>
                </div>
            </div>
            <div class="col-md-6 text-center top_block">
                <?php
                if (isset($partners[2]) && !empty($partners[2])) {
                    ?>
                    <div class="col-md-12 zero_padding">
                        <div class="col-md-6 text-center">
                            <p class="sponsor_title"><?= $partners[2][0]['Name'] ?></p>
                            <img class="medium_image" src="<?= base_url('assets/images/partners_sponsors/' . $partners[2][0]['image']) ?>" />
                            <div class="desc"><?= $partners[2][0]['Description'] ?></div>
                        </div>
                        <div class="col-md-6 text-center">
                            <p class="sponsor_title"><?= $partners[2][1]['Name'] ?></p>
                            <img class="medium_image" src="<?= base_url('assets/images/partners_sponsors/' . $partners[2][1]['image']) ?>" />
                            <div class="desc"><?= $partners[2][1]['Description'] ?></div>
                        </div>
                    </div>
                    <div class="col-md-12 zero_padding text-center">
                        <div class="col-md-3 hidden-xs"></div>
                        <div class="col-md-6 text-center">
                            <p class="sponsor_title"><?= $partners[2][2]['Name'] ?></p>
                            <img class="medium_image" src="<?= base_url('assets/images/partners_sponsors/' . $partners[2][2]['image']) ?>" />
                            <div class="desc"><?= $partners[2][2]['Description'] ?></div>
                        </div>
                    </div>
                    <?php }
                ?>
            </div>
            <div class="row text-center btm_block">

                <div class="col-md-12">
                    <div class="col-md-12 text-center text-with-line">Other Sponsors&nbsp;</div>
                    <?php
                    if (isset($partners[4]) && !empty($partners[4])) {
                        foreach ($partners[4] as $partners4) {
                            ?>
                            <div class="col-md-2 text-center">
                                <img class="small_image" src="<?= base_url('assets/images/partners_sponsors/' . $partners4['image']) ?>" />
                                <p class="title"><?= $partners4['Title'] ?></p>
                                <p class="tag"><?= $partners4['Name'] ?></p>
                            </div>
                        <?php }
                    }
                    ?>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12 text-center text-with-line">Partners&nbsp;</div>
                    <?php
                    if (isset($partners[3]) && !empty($partners[3])) {
                        foreach ($partners[3] as $partners3) {
                            ?>
                            <div class="col-md-2 text-center">
                                <img class="small_image" src="<?= base_url('assets/images/partners_sponsors/' . $partners3['image']) ?>" />
                                <p class="title"><?= $partners3['Title'] ?></p>
                                <p class="tag"><?= $partners3['Name'] ?></p>
                            </div>
    <?php }
}
?>
                </div>
            </div>

        </div>
        <div class="col-md-12 margin_top_container application_guidelines_container">
            <div class="col-md-12 col-sm-12 col-xs-12 application_guidelines_form sponsors_form zero_padding">
                <div class="col-sm-12 col-xs-12 zero_padding top_two_colored_div">
                    <div class="col-sm-6 col-xs-12 black">
                    </div>
                    <div class="col-sm-6 col-xs-12 white hidden-xs"></div>
                </div>
                <div class="col-sm-12 col-xs-12 content">
                    <div class="col-sm-12 col-xs-12 block">
                        <h2 class="cyan_color">Sponsorship Value</h2>
                    </div>
                    <div class="col-sm-12 col-xs-12 block">
                        <ul class="col-sm-12 col-xs-12">
                            <li>GAAF 2018 has an overall budget of INR 20,00,000</li>
                            <li>We will expect the <b><u>Main Partner</u></b> to contribute INR 7,50,000 to GAAF</li>
                            <li>
                                There will be three levels of co sponsors - 
                                <ol class="numbered_ul">
                                    <li><u>Gold sponsor</u> - contribution of INR 4,50,000</li>
                                    <li><u>Silver sponsor</u> - contribution of INR 3,50,000</li>
                                    <li><u>Bronze sponsor</u> - contribution of INR 1,50,000</li>
                                </ol>
                            </li>
                            <li>
                                Apart from this GAAF 2018 will have the following partners
                                <ul class="dashed_ul">
                                    <li>Radio Partner</li>
                                    <li>Media Partner</li>
                                    <li>Hospitality and F&B Partner</li>
                                    <li>Beverage Partners</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-xs-12 block">
                        <h2 class="cyan_color">Sponsorship Benefits</h2>
                    </div>
                    <div class="col-sm-12 col-xs-12 block last_block">
                        <ul class="col-sm-12 col-xs-12">
                            <li class="underlined_points_sponsor"><u>Association</u></li>
                            <p>Contributing company get association with an art property which is not only rare in India but also has international allure.</p>
                            <li class="underlined_points_sponsor"><u>Enhancing customer relations</u></li>
                            <p>Contributing company get opportunity to enhance customer relations through exclusive events hosted for the said company and their select customers by GAAF in the MOG premises.</p>
                            <li class="underlined_points_sponsor"><u>Platform</u></li>
                            <p>Contributing company get platforms through GAAF 2018 for marketing, outreach and enhancing customer relations.</p>
                            <li class="underlined_points_sponsor"><u>Visibility</u></li>
                            <p>Contributing company gets visibility and access to niche circles of art and culture from all over India through association with GAAF 2018.</p>
                            <li class="underlined_points_sponsor"><u>Customer Trust Development</u></li>
                            <p>Contributing company gets a platform to develop customer trust through association with an art and culture event.</p>
                        </ul>
                    </div>
                </div>
                <img class="texture" src="<?= base_url('assets/images/bottom.png') ?>" />
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 