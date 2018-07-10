<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12 privacy">
            <div class="h2 ">
                <div class="head_underline"><?= $page_heading ?></div>
            </div>
            <div class="col-md-12 btm_block">
				<p>Ever wondered how it feels like to be a part of India’s Largest Contemporary Art Space? Here's your chance to join us and get an opportunity to network with people from all walks of life and around the world... Yes we are HIRING!! Check out the vacancies available below and send us your resume soon.</p>
            </div>
            <div class="col-sm-12 col-xs-12 text-center btm_block intern_internal_container">
                <?php foreach ($jobs as $k => $v) { ?>
                    <div class="col-md-4 intern_block">
                        <a href="<?= base_url('home/job/'.$v['id'])?>">
							<img class="medium_image" src="<?= base_url('assets/images/intern/' . $v['image']) ?>" width="100%"/>
							<p class="sponsor_title"><?= $v['Vacancy'] ?></p>
                        </a>
                    </div>
					 <div class="col-md-4 intern_block">
                        <a href="<?= base_url('home/job/'.$v['id'])?>">
							<img class="medium_image" src="<?= base_url('assets/images/intern/' . $v['image']) ?>" width="100%"/>
							<p class="sponsor_title"><?= $v['Vacancy'] ?></p>
                        </a>
                    </div>
					 <div class="col-md-4 intern_block">
                        <a href="<?= base_url('home/job/'.$v['id'])?>">
							<img class="medium_image" src="<?= base_url('assets/images/intern/' . $v['image']) ?>" width="100%"/>
							<p class="sponsor_title"><?= $v['Vacancy'] ?></p>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 