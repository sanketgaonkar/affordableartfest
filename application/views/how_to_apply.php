<?php include 'common/header.php' ?>
<style>
	.application_form_container{
		
		height:auto;
	}
	.application_form_container form{
		
		background:#fff;
		padding:50px;
		
	}
	.cyan_color_step{
		
		margin-bottom:10px;
		height:200px;
		position:relative;
		background:rgb(23,196,200);
		z-index:222;
		padding:20px;
		border-radius:100px 0 0 100px;
	}
	.cyan_color_step .rounded_outer_div{
		
		position:absolute;
		background:#fff;
		border-radius:50%;
		height:80%;
		width:25%;
	}
	.cyan_color_step .rounded_outer_div .rounded_inner_div{
		
		color:rgb(33,33,33);
		font-size:18px;
		padding-top:37%;
		position:absolute;
		left:12px;
		top:8px;
		background:rgb(23,196,200);
		height:90%;
		border-radius:50%;
		width:92%;
		z-index:444;
	}
	.cyan_color_step .content, .black_color_step .content{
		
		box-shadow: 0 10px 0px 0px white, 0 -10px 0px 0px white, 12px 0 35px -15px rgba(33, 33, 33, 0.8), -20px 0 35px -15px rgba(33, 33, 33, 0.8);
		position:absolute;
		width:80%;
		z-index:333;
		background:rgb(245,245,245);
		height:100%;
		top:0;
		left:15%;
		font-size:18px;
		padding-top:10%;
	}
	.cyan_color_step .content strong, .black_color_step .content strong{
		
		text-transform:uppercase;
		font-weight:600;
	}
	.cyan_color_step .content .cyan_color_btn{
		
		border:none;
		text-transform:uppercase;
		font-size:12px;
		padding:10px;
		border-radius:25px;
		background:rgb(57,190,225);
		color:#fff;
		border-bottom:2px solid rgb(61,154,187);
		letter-spacing:0.8px;
		margin-top:20px;
		outline:none;
	}
	.black_color_step{
		
		height:200px;
		position:relative;
		background:rgb(33,33,33);
		z-index:222;
		padding:20px;
		border-radius:100px 0 0 100px;
	}
	.black_color_step .rounded_outer_div{
		position:absolute;
		background:#fff;
		border-radius:50%;
		height:80%;
		width:25%;
	}
	.black_color_step .rounded_outer_div .rounded_inner_div{
		
		color:#fff;
		font-size:18px;
		padding-top:37%;
		position:absolute;
		left:12px;
		top:8px;
		background:rgb(33,33,33);
		height:90%;
		border-radius:50%;
		width:92%;
		z-index:444;
	}
	.application_form_container .margin_top_50{
		
		margin-top:50px;
	}
	
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12">
        <div class="h2">
            <div class="head_underline"><?=$page_heading?></div>
        </div>
        <div class="col-md-12 media_blocks">
			<div class="col-lg-2 col-md-1 col-sm-0 col-xs-0"></div>
			<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 catalogue_image application_form_container">
				<form class="form-horizontal col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-12 col-xs-12 cyan_color_step">
						<div class="rounded_outer_div">
							<div class="text-center rounded_inner_div">
								Step 1
							</div>
						</div>
						<div class="text-center content">
							<div class="col-sm-12 col-xs-12 zero_padding">Click Here</div>
							<?=anchor('home/Application_Guidelines','<button class="btn btn-default btn-md cyan_color_btn" type="button">Application Guidelines</button>')?>
						</div>
					</div>
					<div class="col-sm-12 col-xs-12 black_color_step">
						<div class="rounded_outer_div">
							<div class="text-center rounded_inner_div">
								Step 2
							</div>
						</div>
						<div class="text-center content">
							Go through <br><strong>Application Guidelines</strong>
						</div>
					</div>
					<div class="col-sm-12 col-xs-12 cyan_color_step">
						<div class="rounded_outer_div">
							<div class="text-center rounded_inner_div">
								Step 3
							</div>
						</div>
						<div class="text-center content">
							<div class="col-sm-12 col-xs-12 zero_padding">Click Here</div>
							<?=anchor('home/Application_Form','<button class="btn btn-default btn-md cyan_color_btn" type="button">Application Form</button>')?>
						</div>
					</div>
					<div class="col-sm-12 col-xs-12 black_color_step">
						<div class="rounded_outer_div">
							<div class="text-center rounded_inner_div">
								Step 4
							</div>
						</div>
						<div class="text-center content">
							Fill out the application <br>and hit <strong>Apply</strong>
						</div>
					</div>
					<div class="col-sm-12 col-xs-12 margin_top_50">
						We will get back to you if your works gets selected for GAAF 2018 <br><b>Good Luck!</b>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 