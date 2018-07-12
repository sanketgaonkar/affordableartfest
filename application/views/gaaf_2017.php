<?php include 'common/header.php' ?>
<style>
    .margin_top_20
    {
        margin-top:20px;
    }
    .margin_top_30
    {
        margin-top:30px;
    }
    .highlights_ul
    {
       list-style:unset;
    }
    .highlights_ul li
    {
       margin-left:30px;
    }
    @media (max-width:768px){
        
        .margin_top_20
        {
            margin-top:-20px;
            font-size:13px;
        }
    }
    @media (max-width:425px){
        
        .highlights_container .image_container img
        {
            height:200px;   
        }
    }
</style>
<div class="col-sm-12 col-xs-12 min_height_container">
<div class="container margin_top_container">
    <div class="col-md-12 artist_gallery highlights_container">
        <div class="row">
            <div class="h2">
                <div class="head_underline">GAAF 2017 Highlights</div>
            </div>
        </div>
        <div class="row">
            <ul class="col-sm-12 col-xs-12 highlights_ul margin_top_20">
                <li>The exhibition was curated by Dr.Subodh Kerkar and Mr. Peter Muller (Director – Galerie Muller & Plate – Munich, Germany)</li>
            </ul>
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="col-md-6 col-sm-12 col-xs-12 margin_top_30">
                    <div class="col-md-12 col-sm-12 col-xs-12 image_container">
                        <img src="<?= base_url("assets/images/folder_2/Image_3.jpg") ?>" />
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 margin_top_20">
                        The first edition of the Goa Affordable Art Fest was inaugurated by eminent author Padmashri Amitav Ghosh.
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 margin_top_30">
                    <div class="col-md-12 col-sm-12 col-xs-12 image_container">
                        <img src="<?= base_url("assets/images/folder_2/Image_4.jpg") ?>" />
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 margin_top_20">
                        The opening had more than 500 people visiting the museum with an evening full of performances, acts and feasting on art.
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 margin_top_30">
                    <div class="col-md-12 col-sm-12 col-xs-12 image_container">
                        <img src="<?= base_url("assets/images/folder_2/Image_3.jpg") ?>" />
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 margin_top_20">
                        GAAF 2017 has had a footfall of over 15000 people visiting including art collectors, art enthusiasts and a sizeable percentage of first time collectors
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'common/footer.php' ?>
 