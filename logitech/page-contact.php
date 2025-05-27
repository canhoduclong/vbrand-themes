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
            <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
        </ol>
    </div>
</nav>

 

<div class="page-content pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
                
                <h2 class="title mb-1">Thông Tin Liên Hệ</h2><!-- End .title mb-2 -->
                <p class="mb-3">Chúng tôi luôn sẵn sàng hỗ trợ bạn. Hãy liên hệ nếu bạn có bất kỳ thắc mắc hoặc yêu cầu nào. Đội ngũ của chúng tôi sẽ phản hồi sớm nhất có thể.</p>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contact-info">
                            
                            <h3>Văn Phòng</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-map-marker"></i>
                                    70 Washington Square South, New York, NY 10012, Hoa Kỳ
                                </li>
                                <li>
                                    <i class="icon-phone"></i>
                                    <a href="tel:#">+92 423 567</a>
                                </li>
                                <li>
                                    <i class="icon-envelope"></i>
                                    <a href="mailto:#">info@Molla.com</a>
                                </li>
                            </ul><!-- End .contact-list -->

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                                    the_content();
                                    endwhile; else: ?>
                                <p>!Rất tiếc, hiện chưa có bài viết nào</p>
                            <?php endif; ?>

                        </div><!-- End .contact-info -->
                    </div><!-- End .col-sm-7 -->

                    <div class="col-sm-5">
                        <div class="contact-info">
                            <h3>Giờ Làm Việc</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-clock-o"></i>
                                    <span class="text-dark">Thứ Hai - Thứ Bảy</span> <br>11h sáng - 7h tối (ET)
                                </li>
                                <li>
                                    <i class="icon-calendar"></i>
                                    <span class="text-dark">Chủ Nhật</span> <br>11h sáng - 6h tối (ET)
                                </li>
                            </ul><!-- End .contact-list -->
                        </div><!-- End .contact-info -->
                    </div><!-- End .col-sm-5 -->
                </div><!-- End .row -->
            </div><!-- End .col-lg-6 -->
            <div class="col-lg-6">
                <h2 class="title mb-1">Bạn Có Câu Hỏi Nào Không?</h2><!-- End .title mb-2 -->
                <p class="mb-2">Hãy sử dụng biểu mẫu bên dưới để liên hệ với đội ngũ tư vấn của chúng tôi</p>

                <form action="#" class="contact-form mb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cname" class="sr-only">Tên</label>
                            <input type="text" class="form-control" id="cname" placeholder="Tên *" required="">
                        </div><!-- End .col-sm-6 -->

                        <div class="col-sm-6">
                            <label for="cemail" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="cemail" placeholder="Email *" required="">
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cphone" class="sr-only">Số Điện Thoại</label>
                            <input type="tel" class="form-control" id="cphone" placeholder="Số Điện Thoại">
                        </div><!-- End .col-sm-6 -->

                        <div class="col-sm-6">
                            <label for="csubject" class="sr-only">Chủ Đề</label>
                            <input type="text" class="form-control" id="csubject" placeholder="Chủ Đề">
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->

                    <label for="cmessage" class="sr-only">Nội Dung</label>
                    <textarea class="form-control" cols="30" rows="4" id="cmessage" required="" placeholder="Nội Dung *"></textarea>

                    <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                        <span>GỬI</span>
                        <i class="icon-long-arrow-right"></i>
                    </button>
                </form><!-- End .contact-form -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
 
    </div><!-- End .container -->
    
    <div id="map" style="overflow:hidden;max-width:100%;width:100%;height:500px;">
        <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=ho+chi+minh+city&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
        </div>
        <a class="embed-map-html" href="https://www.bootstrapskins.com/themes" id="get-data-for-map">giao diện bootstrap cao cấp</a>
        <style>#g-mapdisplay img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
    </div>

</div>


 
<?php get_footer(); ?>