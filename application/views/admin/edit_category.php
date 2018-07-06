<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="c_id" value="<?= $c_id ?>"/>
            <?= $cancel ?>
        </div>
        <?php if (!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Team</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Name">Name:</label>
            <input type="text" name="Name" class="form-control" id="Name" value="<?= (isset($category['Name'])) ? $category['Name'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?= (isset($category['sort_order'])) ? $category['sort_order'] : "" ?>" required/>
        </div>
    </form>
</section>
<?php require 'common/footer.php'; ?>