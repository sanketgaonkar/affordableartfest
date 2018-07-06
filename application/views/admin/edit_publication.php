<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" title="Save"><i class="fa fa-save"></i></button>
            <input type="hidden" name="p_id" value="<?=$p_id?>"/>
            <?=anchor('Mog_admin/publications','
            <button type="button" class="btn btn-default" title="Cancel"><i class="fa fa-reply"></i></button>
            ')?>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="col-md-12 alert alert-danger">Error Adding / Updating Publication</div>
        <?php } ?>
        <div class="form-group col-md-6">
            <label for="Description">Description:</label>
            <input type="text" name="Description" class="form-control" id="Description" value="<?=(isset($publication['Description']))?$publication['Description']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="Link">Link:</label>
            <input type="text" name="Link" class="form-control" id="Link" value="<?=(isset($publication['Link']))?$publication['Link']:""?>" required/>
        </div>
        <div class="form-group col-md-<?=((isset($publication['image']) && !empty($publication['image']))?"3":"6")?>">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" id="image"/>
        </div>
        <div class="form-group col-md-3 <?=((isset($publication['image']) && !empty($publication['image']))?"":"hide")?>">
            <img src="<?=base_url('assets/images/publication/'.(isset($publication['image'])?$publication['image']:""))?>" width="50%"/>
        </div>
        <div class="form-group col-md-6">
            <label for="Date">Date:</label>
            <input type="text" name="Date" class="form-control" id="Date" value="<?=(isset($publication['Date']))?$publication['Date']:""?>" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="sort_order">Sort order:</label>
            <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?=(isset($publication['sort_order']))?$publication['sort_order']:""?>" required/>
        </div>
    </form>
</section>
<?php require 'common/footer.php'; ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
        $('#Date').datepicker({
            format: "dd/mm/yyyy",
            orientation: "bottom left",
        });
    });
</script>