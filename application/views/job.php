<?php include 'common/header.php' ?>
<style>
    .job div ul{
        list-style: unset;
    }
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
    <div class="container margin_top_container">
        <div class="col-md-12 job">
            
            <div class="row btm_block">
                <strong>Vacancy: <?=$job['Vacancy']?></strong>
            </div>
            <div class="row btm_block">
                <strong>Description:</strong>
                <div><?=$job['Description']?></div>
            </div>
            <div class="row btm_block">
                <strong>Job Role:</strong>
                <div><?=$job['Job_Role']?></div>
            </div>
            <div class="row btm_block">
                <strong>Requirements:</strong>
                <div><?=$job['Requirements']?></div>
            </div>
            <div class="row btm_block">
                <strong>Working Hours:</strong>
                <div><?=$job['Working_Hours']?></div>
            </div>
            <div class="row btm_block">
                <strong>Salary:</strong>
                <div><?=$job['Salary']?></div>
            </div>
            <div class="row btm_block">
                <strong>Application Process:</strong>
                <div><?=$job['Application_Process']?></div>
            </div>
            
        </div>
    </div>
</div>
<?php include 'common/footer.php' ?>
 