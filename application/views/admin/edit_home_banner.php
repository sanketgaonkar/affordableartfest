<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="b_id" value="<?= $b_id ?>"/>
            <?= $cancel ?>
        </div>
        <?php if (!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Banner</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Link">Link:</label>
            <input type="text" name="Link" class="form-control" id="Link" value="<?= (isset($banner['Link'])) ? $banner['Link'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?= (isset($banner['sort_order'])) ? $banner['sort_order'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Active:</label>
            <select name="Active" class="form-control">
                <option value="1">Active</option>
                <option value="0">In-Active</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-6">
            <img alt="No Image" src="<?= base_url('assets/images/home_banners/' . (isset($banner['image']) ? $banner['image'] : "")) ?>" width="50%"/>
        </div>
    </form>
</section>
<?php require 'common/footer.php'; ?>