<?php require 'common/header.php'; ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="ps_id" value="<?=$ps_id?>"/>
            <?=anchor('Mog_admin/partners_sponsors','
            <button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>
            ')?>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Parrners / Sponsors</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Title">Tag:</label>
            <input type="text" name="Title" class="form-control" id="Title" value="<?=(isset($partner_sponsor['Title']))?$partner_sponsor['Title']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Name">Name:</label>
            <input type="text" name="Name" class="form-control" id="Name" value="<?=(isset($partner_sponsor['Name']))?$partner_sponsor['Name']:""?>" required/>
        </div>
        <div class="form-group col-md-<?=((isset($partner_sponsor['image']) && !empty($partner_sponsor['image']))?"3":"6")?>">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-3 <?=((isset($partner_sponsor['image']) && !empty($partner_sponsor['image']))?"":"hide")?>">
            <img src="<?=base_url('assets/images/partners_sponsors/'.(isset($partner_sponsor['image'])?$partner_sponsor['image']:""))?>" width="50%"/>
        </div>
        <div class="form-group col-md-6 <?=(($ps_id ==1)?"hide":"")?>">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?=(isset($partner_sponsor['sort_order']))?$partner_sponsor['sort_order']:""?>" required/>
        </div>
        <div class="form-group col-md-6 <?=(($ps_id)?"hide":"")?>">
            <label>Level:</label>
            <select name="level" class="form-control" id="level">
                <!--<option value="2">Level 2</option>-->
                <option value="3">Partner</option>
                <option value="4">Sponsor</option>
            </select>
        </div>
        <div class="form-group col-md-12 desc <?=$desc_class?>">
            <label for="summernote">Description:</label>
            <textarea id="summernote" class="form-control" name="Description"><?=(isset($partner_sponsor['Description']))?$partner_sponsor['Description']:""?></textarea>
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