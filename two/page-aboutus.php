<?php 
/**
* Template Name: vBrand Logitech About Us 
*/?>
<?php
    $themeData = vbrand_load_theme_data();
?> 
<?php include 'header.php'; ?>
 
<div class="container p-4 mt-4">
    <?php if ($themeData->get('about_us_show')) { ?>  
        <div class="row">
            <?php
                $title = $themeData->get('about_us_title');
                $content = $themeData->get('about_us_content');
            ?>
            <div class="col col-md-12">
                <h1><?= $title?></h1>
                <div class="my-4"><?= $content?></div>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>