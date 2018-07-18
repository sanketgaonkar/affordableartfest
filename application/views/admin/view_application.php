<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <div class="form-group col-md-6">
        <label>First Name:</label>
        <?= $application['data']['firstname'] ?>
    </div>
    <div class="form-group col-md-6">
        <label>Last Name:</label>
        <?= $application['data']['lastname'] ?>
    </div>
    <div class="form-group col-md-12">
        <label>Address:</label>
        <?= $application['data']['address'] ?>
    </div>
    <div class="form-group col-md-6">
        <label>Email:</label>
        <?= $application['data']['emailid'] ?>
    </div>
    <div class="form-group col-md-6">
        <label>Phone:</label>
        <?= $application['data']['phone'] ?>
    </div>
    <div class="form-group col-md-6">
        <label>Date Of Birth:</label>
        <?= $application['data']['dob'] ?>
    </div>
    <div class="form-group col-md-6">
        <label>Age:</label>
        <?= $application['data']['age'] ?>
    </div>
    <div class="form-group col-md-6">
        <label>Gender:</label>
        <?= $application['data']['gender'] ?>
    </div>
    <div class="form-group col-md-6">
        <label>CV:</label>
        <a href="<?=base_url("uploads/applications/".$application['cv']['image'])?>" target="_new"><?=$application['cv']['image']?></a>
    </div>
    <div class="form-group col-md-12">
        <label>Artist Statement:</label>
        <?= $application['data']['artist_statement'] ?>
    </div>
    <div class="form-group col-md-12"><label>Images:</label></div>
    <div class="form-group col-md-12">
        <?php foreach($application['images'] as $img){?>
            <div class="col-md-6" style="margin-top: 10px;">
                <a href="<?=base_url("uploads/applications/".$img['image'])?>" target="_new"/>
                    <img src="<?=base_url("uploads/applications/".$img['image'])?>" width="100%"/>
                </a>
            </div>
        <?php } ?>
    </div>
    <div class="form-group col-md-12"><label>Other Uploads:</label></div>
    <div class="form-group col-md-12">
        <?php foreach($application['others'] as $img1){?>
            <div class="col-md-4" style="margin-top: 10px;">
                <a href="<?=base_url("uploads/applications/".$img1['image'])?>" target="_new"/><?=$img1['image']?></a>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'common/footer.php'; ?>