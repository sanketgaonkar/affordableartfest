<?php require 'common/header.php'; ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="ag_id" value="<?=$ag_id?>"/>
            <?=anchor('Mog_admin/Application_guidelines','
            <button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>
            ')?>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating guidelines to apply</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?=(isset($terms_and_conditions['sort_order']))?$terms_and_conditions['sort_order']:""?>" required/>
        </div>
        <div class="form-group col-md-12 desc">
            <label for="summernote">description:</label>
            <textarea id="summernote" class="form-control" name="description"><?=(isset($terms_and_conditions['description']))?$terms_and_conditions['description']:""?></textarea>
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
        
//        $('#level').change(function(){
//            if($(this).val() == 2){
//                $('.desc').removeClass('hide');
//            }else{
//                $('.desc').addClass('hide');
//            }
//        });
    });
</script>