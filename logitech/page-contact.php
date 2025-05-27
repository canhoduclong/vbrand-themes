<?php 
/**
* Template Name: vBrand Template One Conact
*/?>

<?php include 'header.php'; ?>
<div class="page-header text-center" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/page-header-bg.jpg')">
	<div class="container">
		<h1 class="page-title">Liên Hệ<span>Liên hệ cùng chúng tôi</span></h1>
	</div>
</div>
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Trang chủ</a></li> 
            <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
        </ol>
    </div>
</nav>
<div class="product-section">
    <div class="container"> 
        <div class="about"> 
            <div class="row">
                <div class="col-lg-6">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            the_content();
                            endwhile; else: ?>
                        <p>!Sorry no posts here</p>
                    <?php endif; ?>
                </div> 

                <div class="col-lg-6">
                    <h2 class="title mb-1">GỬI LIÊN HỆ</h2>
                    <p class="mb-2">Gửi liên hệ trực tiếp cho chúng tôi </p>
                    <form action="#" class="contact-form mb-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="cname" class="sr-only">Name</label>
                                <input type="text" class="form-control" id="cname" placeholder="Name *" required="">
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <label for="cemail" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="cemail" placeholder="Email *" required="">
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="cphone" class="sr-only">Phone</label>
                                <input type="tel" class="form-control" id="cphone" placeholder="Phone">
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <label for="csubject" class="sr-only">Subject</label>
                                <input type="text" class="form-control" id="csubject" placeholder="Subject">
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <label for="cmessage" class="sr-only">Message</label>
                        <textarea class="form-control" cols="30" rows="4" id="cmessage" required="" placeholder="Message *"></textarea>

                        <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                            <span>SUBMIT</span>
                            <i class="icon-long-arrow-right"></i>
                        </button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>