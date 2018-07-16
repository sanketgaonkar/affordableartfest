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
		margin-bottom:50px;
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
	.padding_left_0{
		
		padding-left:0;
	}
	#application_form_dp_upload{
		display:none;
	}
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12">
        <div class="h2">
            <div class="head_underline"><?=$page_heading?></div>
        </div>
        <div class="col-md-12 media_blocks">
			<div class="col-md-2 col-sm-1 col-xs-0"></div>
			<div class="col-md-8 col-sm-10 col-xs-12 catalogue_image application_form_container">
				<form class="form-horizontal col-md-12 col-sm-12 col-xs-12 zero_padding">
					<div class="moon_like_div_in_form"></div>
					<div class="col-md-12 col-sm-12 col-xs-12 zero_padding text-center form_dp_container">
						<label for="application_form_dp_upload"><img src="<?=base_url('assets/images/pic02.jpg')?>" /></label>
						<input type="file" id="application_form_dp_upload" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 padding_left_0">
						<div class="col-sm-12 col-xs-12 form-group">
							<label>First Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="col-sm-12 col-xs-12 form-group zero_padding">
							<label>Last Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 form-group">
						<label>Address</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 padding_left_0">
						<div class="col-sm-12 col-xs-12 form-group">
							<label>Email ID</label>
							<input type="email" class="form-control">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="col-sm-12 col-xs-12 form-group zero_padding">
							<label>Phone Number</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12 padding_left_0">
						<div class="col-sm-12 col-xs-12 form-group">
							<label>Date of Birth</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="col-sm-12 col-xs-12 form-group zero_padding">
							<label>Age</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="col-sm-12 col-xs-12 form-group zero_padding">
							<label>Gender</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 form-group">
						<label>Artist statement</label>
						<textarea class="form-control" rows="4" placeholder="(200 words)" maxlength="200"></textarea>
					</div>
					
				</form>
			</div> 
		</div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 