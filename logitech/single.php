<?php 
/**
* Template Name: vBrand Template One News
*/?>

<?php include 'header.php'; ?>
         
<div class="page-header text-center" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/page-header-bg.jpg')">
	<div class="container">
		<h1 class="page-title"><?php echo  the_title();?></h1>
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

 <div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
 

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<article class="entry single-entry">
					<figure class="entry-media">
						<?php
						if ( has_post_thumbnail() ) {
							$img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
							echo '<img src="' . esc_url($img_url) . '" alt="">';
						}
						?>
					</figure>
					<div class="entry-body">
						<div class="entry-meta">
							<span class="entry-author">
								by <a href="#"><?php echo get_the_author(); ?></a>
							</span>
							<span class="meta-separator">|</span>
							<a href="#"><?php echo get_the_date(); ?></a>
							<span class="meta-separator">|</span>
							<a href="#">
								<?php
									comments_number( 
										'No Comments', 
										'1 Comment', 
										'% Comments' 
									); 
								?>
							</a>
						</div>
						<h1 class="entry-title">
							<?php the_title();?>
						</h1>
						<div class="entry-cats">
							<?php
								$categories = get_the_category();
								if ( ! empty( $categories ) ) {
									foreach ( $categories as $category ) {
										echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="post-category">';
										echo esc_html( $category->name );
										echo '</a> ';
									}
								}
								?> 
						</div>
						<div class="entry-content editor-content">
							<?php the_content();?>
						</div>
						 <div class="entry-footer row no-gutters flex-column flex-md-row">
							<div class="col-md"> 
								<?php the_tags( '<div class="entry-tags">Tags: ', ', ', '</div>' ); ?> 
							</div><!-- End .col -->

							<div class="col-md-auto mt-2 mt-md-0">
								<div class="social-icons social-icons-color">
									<?php
										$post_url   = urlencode( get_permalink() );
										$post_title = urlencode( get_the_title() );
										$post_img   = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
										$post_img   = urlencode( $post_img );
									?> 
									<span class="social-label">Chia sẻ bài viết:</span>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
									<a href="https://pinterest.com/pin/create/button/?url=<?php echo $post_url; ?>&media=<?php echo $post_img; ?>&description=<?php echo $post_title; ?>" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
									<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url; ?>&title=<?php echo $post_title; ?>" class="social-icon social-linkedin" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
								</div><!-- End .soial-icons -->
							</div><!-- End .col-auto -->
						</div>
					</div> 
					<div class="related-posts">
						<h3 class="title">Related Posts</h3>
						<div class="owl-carousel owl-simple owl-loaded owl-drag" data-toggle="owl" data-owl-options="{
                                        &quot;nav&quot;: false, 
                                        &quot;dots&quot;: true,
                                        &quot;margin&quot;: 20,
                                        &quot;loop&quot;: false,
                                        &quot;responsive&quot;: {
                                            &quot;0&quot;: {
                                                &quot;items&quot;:1
                                            },
                                            &quot;480&quot;: {
                                                &quot;items&quot;:2
                                            },
                                            &quot;768&quot;: {
                                                &quot;items&quot;:3
                                            }
                                        }
                                    }">
                                    <!-- End .entry -->

                                    <!-- End .entry -->

                                    <!-- End .entry -->

                                    <!-- End .entry -->
                                <div class="owl-stage-outer">
									<div class="owl-stage">
										 
										<div class="owl-item active">
											<article class="entry entry-grid">
												<figure class="entry-media">
													<a href="single.html">
														<img src="assets/images/blog/grid/3cols/post-2.jpg" alt="image desc">
													</a>
												</figure><!-- End .entry-media -->

												<div class="entry-body">
													<div class="entry-meta">
														<a href="#">Nov 21, 2018</a>
														<span class="meta-separator">|</span>
														<a href="#">0 Comments</a>
													</div><!-- End .entry-meta -->

													<h2 class="entry-title">
														<a href="single.html">Vivamus ntulla necante.</a>
													</h2><!-- End .entry-title -->

													<div class="entry-cats">
														in <a href="#">Lifestyle</a>
													</div><!-- End .entry-cats -->
												</div><!-- End .entry-body -->
											</article>
										</div>

									</div>
								</div>
								<div class="owl-nav disabled">
									<button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button>
									<button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button>
								</div>
								<div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button>
								<button role="button" class="owl-dot"><span></span></button>
							</div>
						</div>
					</div> 

				</article>
				<?php endwhile; else: ?>
						<p>!Sorry no posts here</p> 
				<?php endif; ?>
			</div>
			<aside class="col-lg-3">
				<div class="sidebar">
					<div class="widget widget-search">
						<form action="#">
							<label for="ws" class="sr-only">Tìm trong bài viết</label>
							<input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
							<button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Tìm kiếm</span></button>
						</form>
					</div><!-- End .widget -->

					<div class="widget widget-cats">
						<h3 class="widget-title">Chuyên mục</h3>
						<ul>
						<?php
							$categories = get_categories();
							if ( ! empty( $categories ) ) {
								foreach ( $categories as $category ) {
									echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . ' ('.$category->category_count .')</a></li>';
								}
							}
						?>
						</ul>
					</div>

					<div class="widget widget-cats">
						<h3 class="widget-title">Sản phẩm</h3>
						<ul>
							<?php
							function render_product_cat_tree($parent_id = 0) {
								$args = array(
									'taxonomy'     => 'product_cat',
									'hide_empty'   => false, // true nếu chỉ lấy category có sản phẩm
									'parent'       => $parent_id,
									'orderby'      => 'name',
									'order'        => 'ASC',
								);

								$categories = get_terms($args);

								if (!empty($categories) && !is_wp_error($categories)) {
									echo '<ul>';
									foreach ($categories as $category) {
										echo '<li>';
										echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';

										// Gọi lại hàm đệ quy để hiển thị chuyên mục con
										render_product_cat_tree($category->term_id);

										echo '</li>';
									}
									echo '</ul>';
								}
							}

							// Gọi function để hiển thị menu
							render_product_cat_tree();
							?>
						</ul>
					</div>

					<div class="widget">
						<h3 class="widget-title">Từ khóa</h3><!-- End .widget-title -->

						<div class="tagcloud">
							<?php
							$tags = get_tags();
							if ( ! empty( $tags ) ) {
								foreach ( $tags as $tag ) {
									echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a><br>';
								}
							}
							?>
						</div><!-- End .tagcloud -->
					</div><!-- End .widget --> 

				</div><!-- End .sidebar -->
			</aside>
		</div>
	</div>
</div>
		
<?php
	get_footer();
?>