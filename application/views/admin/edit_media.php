<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="p_id" value="<?=$p_id?>"/>
            <?=$cancel?>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Publication</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Description">Description:</label>
            <input type="text" name="Description" class="form-control" id="Description" value="<?=(isset($media['Description']))?$media['Description']:set_value('Description')?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Link">Link:</label><font color="tomato"> <?=((isset($error_pdf))?$error_pdf:'')?></font>
            <input type="text" name="Link" class="form-control" id="Link" value="<?=(isset($media['Link']))?$media['Link']:set_value('Link')?>" required/>
        </div>
        <div class="form-group col-md-<?=((isset($media['image']) && !empty($media['image']))?"3":"6")?>">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-3 <?=((isset($media['image']) && !empty($media['image']))?"":"hide")?>">
            <img src="<?=base_url('assets/images/media/'.(isset($media['image'])?$media['image']:""))?>" width="50%"/>
        </div>
        <div class="form-group col-md-6">
            <label for="Date">Date:</label>
            <input type="text" name="Date" class="form-control" id="Date" value="<?=(isset($media['Date']))?$media['Date']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?=(isset($media['sort_order']))?$media['sort_order']:set_value('sort_order')?>" required/>
        </div>
    </form>
</section>
<?php require 'common/footer.php'; ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
        $('#Date').datepicker({
            autoclose: true,
            format: "dd/mm/yyyy",
            orientation: "bottom left",
        }).datepicker('update', new Date("<?=$date?>"));
    });
</script>