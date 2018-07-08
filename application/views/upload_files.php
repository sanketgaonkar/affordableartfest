<?php include 'common/header.php' ?>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 artist_art">
        <div class="row">

<!-- display status message -->
<p><?php echo $this->session->flashdata('statusMsg'); ?></p>

<!-- file upload form -->
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" />
    </div>
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" />
    </div>
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" />
    </div>
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" />
    </div>
    <div class="form-group">
        <input type="submit" name="fileSubmit" value="UPLOAD"/>
    </div>
</form>


        </div>
        <!-- display uploaded images -->
<div class="row">
    <ul class="gallery">
        <?php if(!empty($files)){ foreach($files as $file){ ?>
        <li class="item">
            <img src="<?php echo base_url('assets/images/upload/'.$file['file_name']); ?>" >
            <p>Uploaded On <?php echo date("j M Y",strtotime($file['uploaded_on'])); ?></p>
        </li>
        <?php } }else{ ?>
        <p>Image(s) not found.....</p>
        <?php } ?>
    </ul>
</div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 