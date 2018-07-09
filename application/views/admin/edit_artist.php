<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="team_id" value="<?= $a_id ?>"/>
            <?= $cancel ?>
        </div>
        <?php if (!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Team</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Name">Name:</label>
            <input type="text" name="Name" class="form-control" id="Name" value="<?= (isset($artist['Name'])) ? $artist['Name'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?= (isset($artist['sort_order'])) ? $artist['sort_order'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-6">
            <img alt="No Image" src="<?= base_url('assets/images/artist/' . (isset($artist['image']) ? $artist['image'] : "")) ?>" width="50%"/>
        </div>

    </form>
</section>
<?php require 'common/footer.php'; ?>