<?php require 'common/header.php'; ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="a_id" value="<?= $a_id ?>"/>
            <?= $cancel ?>
        </div>
        <?php if (!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Team</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Name">Name:</label>
            <input type="text" name="Name" class="form-control" id="Name" value="<?= (isset($arts['Name'])) ? $arts['Name'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Name">Artist:</label>
            <select name="artist_id" class="form-control" required>
                <option value="">--Select--</option>
                <?php foreach ($artists as $v) { 
                    if(isset($arts['artist_id']) && $arts['artist_id'] == $v['id'])
                        echo '<option value="'.$v['id'].'" selected>'.$v['Name'].'</option>';
                    else
                        echo '<option value="'.$v['id'].'">'.$v['Name'].'</option>';
                } ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="Name">Category:</label>
            <select name="category_id" class="form-control" required>
                <option value="">--Select--</option>
                <?php foreach ($categories as $v1) {
                    if(isset($arts['category_id']) && $arts['category_id'] == $v1['id'])
                        echo '<option value="'.$v1['id'].'" selected>'.$v1['Name'].'</option>';
                    else
                        echo '<option value="'.$v1['id'].'">'.$v1['Name'].'</option>';
                } ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?= (isset($arts['sort_order'])) ? $arts['sort_order'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Price">Price:</label>
            <input type="number" name="Price" class="form-control" id="Price" value="<?= (isset($arts['Price'])) ? $arts['Price'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Medium">Medium:</label>
            <input type="text" name="Medium" class="form-control" id="Medium" value="<?= (isset($arts['Medium'])) ? $arts['Medium'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Size">Size:</label>
            <input type="number" name="Size" class="form-control" id="Size" value="<?= (isset($arts['Size'])) ? $arts['Size'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Weight">Weight:</label>
            <input type="text" name="Weight" class="form-control" id="Weight" value="<?= (isset($arts['Weight'])) ? $arts['Weight'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Year">Year:</label>
            <input type="number" name="Year" class="form-control" id="Year" value="<?= (isset($arts['Year'])) ? $arts['Year'] : "" ?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-6">
            <img alt="No Image" src="<?= base_url('assets/images/artist_gallery/' . (isset($arts['image']) ? $arts['image'] : "")) ?>" width="50%"/>
        </div>
        <div class="col-md-12">
            <label for="image">Description:</label>
            <textarea name="Description" class="form-control" id="summernote"><?= (isset($arts['Description'])) ? $arts['Description'] : "" ?></textarea>
        </div>
    </form>
</section>
<?php require 'common/footer.php'; ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['fontname','strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script>