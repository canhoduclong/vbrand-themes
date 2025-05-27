<?php
/**
 * Template Name: vBrand emplate One About Us
 */
?> 
<?php
	get_header();
?>
<?php
    $themeData = vbrand_load_theme_data();
?>
<div class="page-header text-center" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/page-header-bg.jpg')">
	<div class="container">
		<h1 class="page-title">Giới thiêu<span>Về chúng tôi</span></h1>
	</div>
</div>
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Trang chủ</a></li> 
            <li class="breadcrumb-item active" aria-current="page">Giới thiêu</li>
        </ol>
    </div>
</nav>
<?php if ($themeData->get('about_us_show') == 'true') { ?>
<div class="page-content pb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
                <div class="about-text text-center mt-3">

                    <h2 class="title text-center mb-2">Chúng tôi là ai</h2>
                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>
                    <img src="assets/images/about/about-2/signature.png" alt="signature" class="mx-auto mb-5">

                    <img src="<?=get_template_directory_uri()?>/assets/images/about-2.jpg" alt="image" class="mx-auto mb-6">
               
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post();?>
                            <?php the_content(); ?>
                        <?php endwhile;  ?>
                    <?php else: ?>
                        <p>!Sorry no posts here</p>
                    <?php endif; ?>

                </div>
			</div>
		</div>
	</div>
</div>
	
 
<?php } ?>
<?php
	get_footer();
?>