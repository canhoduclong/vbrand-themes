<?php 
/**
 * Template Name: Liên hệ Page
 */
get_header();
?>
   
<div class="page-header text-center" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/page-header-bg.jpg')">
	<div class="container">
		<h1 class="page-title">Liên hệ<span>Gủi liên hệ cho chúng tôi</span></h1>
	</div>
</div>

        
  <div class="container">
         
            <div class="about">
                <div class="section-header text-center">
                    <p>liên hệ</p> 
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
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