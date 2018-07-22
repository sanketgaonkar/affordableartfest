<?php require 'common/header.php'; ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="i_id" value="<?=$intern_id?>"/>
            <?=$cancel?>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Team</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Vacancy">Vacancy:</label>
            <input type="text" name="Vacancy" class="form-control" id="Vacancy" value="<?=(isset($intern['Vacancy']))?$intern['Vacancy']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Working_Hours">Working Hours:</label>
            <input type="text" name="Working_Hours" class="form-control" id="Working_Hours" value="<?=(isset($intern['Working_Hours']))?$intern['Working_Hours']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Salary">Salary:</label>
            <input type="number" name="Salary" class="form-control" id="Salary" value="<?=(isset($intern['Salary']))?$intern['Salary']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?=(isset($intern['sort_order']))?$intern['sort_order']:""?>" required/>
        </div>
        <div class="form-group col-md-<?=((isset($intern['image']) && !empty($intern['image']))?"3":"6")?>">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-3 <?=((isset($intern['image']) && !empty($intern['image']))?"":"hide")?>">
            <img src="<?=base_url('assets/images/intern/'.(isset($intern['image'])?$intern['image']:""))?>" width="50%"/>
        </div>
        <div class="form-group col-md-12">
            <label for="summernote">Description:</label>
            <textarea id="summernote" class="form-control" name="Description"><?=(isset($intern['Description']))?$intern['Description']:""?></textarea>
        </div>
        <div class="form-group col-md-12">
            <label for="Job_Role">Job Role:</label>
            <textarea id="Job_Role" class="form-control" name="Job_Role"><?=(isset($intern['Job_Role']))?$intern['Job_Role']:""?></textarea>
        </div>
        <div class="form-group col-md-12">
            <label for="Requirements">Requirements:</label>
            <textarea id="Requirements" class="form-control" name="Requirements"><?=(isset($intern['Requirements']))?$intern['Requirements']:""?></textarea>
        </div>
        <div class="form-group col-md-12">
            <label for="Application_Process">Application Process:</label>
            <textarea id="Application_Process" class="form-control" name="Application_Process"><?=(isset($intern['Application_Process']))?$intern['Application_Process']:""?></textarea>
        </div>
    </form>
</section>
<?php require 'common/footer.php'; ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $(document).ready(function () {
        $('#summernote,#Job_Role,#Requirements,#Application_Process').summernote({
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