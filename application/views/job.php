<?php include 'common/header.php' ?>
<style>
    .job div ul{
        list-style: unset;
		padding-left:20px;
    }
    .futta_te_text
    {
        word-break:break-word;
        margin-bottom:30px;
    }
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12 col-xs-12 job">
            <div class="h2">
                <div class="head_underline"><strong>Vacancy: <?=$job['Vacancy']?></strong></div>
            </div>
            <div class="col-md-12 btm_block">
                <h3>Description:</h3>
                <div class="col-md-12 col-xs-12"><?=$job['Description']?></div>
            </div>
            <div class="col-md-12 btm_block">
                <h3>Job Role:</h3>
                <div class="col-md-12 col-xs-12"><?=$job['Job_Role']?></div>
            </div>
            <div class="col-md-12 btm_block">
                <h3>Requirements:</h3>
                <div class="col-md-12 col-xs-12"><?=$job['Requirements']?></div>
            </div>
            <div class="col-md-12 btm_block">
                <h3>Working Hours:</h3>
                <div class="col-md-12 col-xs-12"><?=$job['Working_Hours']?></div>
            </div>
            <div class="col-md-12 btm_block">
                <h3>Salary:</h3>
                <div class="col-md-12 col-xs-12"><?=$job['Salary']?></div>
            </div>
            <div class="col-md-12 col-xs-12 futta_te_text">
                <h3>Application Process:</h3>
                <div class="col-md-12 col-xs-12"><?=$job['Application_Process']?></div>
            </div>
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 