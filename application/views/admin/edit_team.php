<?php require 'common/header.php'; ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="team_id" value="<?=$team_id?>"/>
            <?=anchor('Mog_admin/team','
            <button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>
            ')?>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Team</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Name">Name:</label>
            <input type="text" name="Name" class="form-control" id="Name" value="<?=(isset($team['Name']))?$team['Name']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Designation">Designation:</label>
            <input type="text" name="Designation" class="form-control" id="Designation" value="<?=(isset($team['Designation']))?$team['Designation']:""?>" required/>
        </div>
        <div class="form-group col-md-<?=((isset($team['image']) && !empty($team['image']))?"3":"6")?>">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-3 <?=((isset($team['image']) && !empty($team['image']))?"":"hide")?>">
            <img src="<?=base_url('assets/images/team/'.(isset($team['image'])?$team['image']:""))?>" width="50%"/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?=(isset($team['sort_order']))?$team['sort_order']:""?>" required/>
        </div>
        <div class="form-group col-md-12">
            <label for="summernote">Description:</label>
            <textarea id="summernote" class="form-control" name="Description" required><?=(isset($team['Description']))?$team['Description']:""?></textarea>
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