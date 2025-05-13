<?php 
/**
 * Template Name: Giới thiệu
 */
get_header();
?>
<div class="page-header text-center" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/page-header-bg.jpg')">
	<div class="container">
		<h1 class="page-title">Giới thiệu<span>Về chúng tôi</span></h1>
	</div>
</div>

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Trang chủ</a></li> 
            <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="container"> 
    <div class="about"> 
        <div class="row align-items-center">
            <div class="col-lg-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_title();
                        the_content();
                        endwhile; else: ?>
                        <p>!Sorry no posts here</p>
                <?php endif; ?>
            </div> 
        </div>
    </div>
</div>
<!-- About End -->

<?php
get_footer();

?>