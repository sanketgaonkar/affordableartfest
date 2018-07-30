<?php include 'common/header.php' ?>
<style>
    .application_form_container{

        height:auto;

    }
    .application_form_container form{

        padding:220px 0px 30px 30px;
        position:relative;
        background:white;
    }
    .application_form_container form .moon_like_div_in_form{

        position:absolute;
        background:rgb(43,222,227);
        top:0;
        left:0;
        height:320px;
        width:100%;
        border-bottom-left-radius: 520px;
        border-bottom-right-radius: 520px;
    }
    .application_form_container form .form_dp_container{
        margin-bottom:120px;
    }
    .application_form_container form .form_dp_container img{

        height:170px;
        width:170px;
        box-shadow:none;
        border-radius:50%;
        cursor:pointer;

    }
    .application_form_container form label{
        font-weight:300;
        font-size:13px;
        letter-spacing:0.8px;
    }
    .application_form_container form textarea{
        resize:none;
    }
    .application_form_container form .attachments_block{

        margin-top:20px;
    }
    .padding_left_0{

        padding-left:0;
    }
    .light_color_btn{

        width:100%;
        padding:10px;
        border-radius:25px;
        background:rgb(236,236,236);
        color:rgb(153,153,153);
        border-bottom:2px solid rgb(199,199,199);
        cursor:pointer;
    }
    .dark_color_btn{

        width:100%;
        padding:10px;
        border-radius:25px;
        background:rgb(57,190,225);
        color:#fff;
        border-bottom:2px solid rgb(61,154,187);
        cursor:pointer;
    }
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12">
            <div class="h2">
                <div class="head_underline"><?= $page_heading ?></div>
            </div>
            <div class="col-md-12">
                <?=((isset($success))?"<div class='alert alert-success'>".$success."</div>":"")?>
                <?=((isset($error))?"<div class='alert alert-danger'>".$error."</div>":"")?>
            </div>
            <div class="col-md-12 media_blocks">
                <div class="col-md-2 col-sm-1 col-xs-0"></div>
                <div class="col-md-8 col-sm-10 col-xs-12 catalogue_image application_form_container">
                    <?= form_open('', 'class="form-horizontal col-md-12 col-sm-12 col-xs-12 zero_padding" enctype="multipart/form-data"') ?>
                    <div class="moon_like_div_in_form"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12 zero_padding text-center form_dp_container">
                        <!--label for="application_form_dp_upload"><img src="<?= base_url('assets/images/pic02.jpg') ?>" /></label>
                        <input type="file" id="application_form_dp_upload" class="hidden"/-->
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 padding_left_0">
                        <div class="col-sm-12 col-xs-12 form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" value="<?=set_value('firstname')?>" class="form-control" required>
                            <?=form_error('firstname')?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="col-sm-12 col-xs-12 form-group zero_padding">
                            <label>Last Name</label>
                            <input type="text" name="lastname" value="<?=set_value('lastname')?>" class="form-control" required>
                            <?=form_error('lastname')?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" rows="3" required><?=set_value('address')?></textarea>
                        <?=form_error('address')?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 padding_left_0">
                        <div class="col-sm-12 col-xs-12 form-group">
                            <label>Email ID</label>
                            <input type="email" name="emailid" value="<?=set_value('emailid')?>" class="form-control" required>
                            <?=form_error('emailid')?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="col-sm-12 col-xs-12 form-group zero_padding">
                            <label>Phone Number</label>
                            <input type="text" name="phone" value="<?=set_value('phone')?>" class="form-control" required>
                            <?=form_error('phone')?>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 padding_left_0">
                        <div class="col-sm-12 col-xs-12 form-group">
                            <label>Date of Birth</label>
                            <input type="text" name="dob" value="<?=set_value('dob')?>" class="date form-control" required readonly>
                            <?=form_error('dob')?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="col-sm-12 col-xs-12 form-group zero_padding">
                            <label>Age</label>
                            <input type="text" name="age" value="<?=set_value('age')?>" onkeyup='if(!validnum(this.value)) this.value="";' class="form-control" required>
                            <?=form_error('age')?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="col-sm-12 col-xs-12 form-group zero_padding">
                            <label>Gender</label>
                            <input type="text" name="gender" value="<?=set_value('gender')?>" class="form-control" required>
                            <?=form_error('gender')?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <label>Artist statement</label>
                        <textarea class="form-control" name="artist_statement" rows="4" placeholder="(200 words)" maxlength="200" required><?=set_value('artist_statement')?></textarea>
                        <?=form_error('artist_statement')?>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center attachments_block">
                        <div class="col-md-4 col-sm-4 col-xs-12 padding_left_0">
                            <label for="application_form_attach_cv" class="light_color_btn">Attach CV</label>
                            <input type="file" name="cv" id="application_form_attach_cv" style="opacity:0;" required/>
                            <?=((!empty($cv_error))?$cv_error:"")?>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label for="application_form_attach_artwork" class="dark_color_btn">Attach Artwork</label>
                            <input type="file" name="images[]" id="application_form_attach_artwork" style="opacity:0;" multiple required/>
                            <?=((!empty($images_error))?implode("", $images_error):"")?>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 padding_right_0">
                            <label for="application_form_attach_other" class="light_color_btn">Other Attachments</label>
                            <input type="file" name="others[]" id="application_form_attach_other" multiple class="hidden" />
                            <?=((!empty($others_error))?implode("", $others_error):"")?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group attachments_block">
                        <button type="submit" class="btn btn-primary btn-lg col-sm-12 col-xs-12">Apply</button>
                    </div>
                    <?= form_close() ?>
                </div> 
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css">
<script>
$(document).ready(function(){
    $('.date').datepicker({format: "yyyy/mm/dd"}); 
});
</script>
<script>
function validnum(a) {
    return ((a >= 1) && (a <= 99));
}
</script>
