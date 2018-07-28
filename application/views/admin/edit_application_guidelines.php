<?php require 'common/header.php'; ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="ps_id" value="<?=$ag_id?>"/>
            <?=anchor('Mog_admin/Application_guidelines','
            <button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>
            ')?>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Updating application guidliness</div>
        <?php } ?>
        
        <div class="form-group col-md-12 desc">
            <label for="summernote">Description:</label>
            <textarea id="summernote" class="form-control" name="description"><?=(isset($application_guidelines['description']))?$application_guidelines['description']:""?></textarea>
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