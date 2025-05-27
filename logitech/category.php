<?php 
/**
* Template Name: vBrand Template One News
*/?>

<?php include 'header.php'; ?>
         
<div class="page-header text-center" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/page-header-bg.jpg')">
	<div class="container">
		<h1 class="page-title">Tin tức<span>Bản tin mới nhát</span></h1>
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
				<?php
				 
					 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $query = new WP_Query(array(
                        'cat' => get_queried_object_id(), // lấy đúng ID của chuyên mục hiện tại
                        'posts_per_page' => 6, // Số bài viết mỗi trang
                        'paged' => $paged
                    ));
  

					if ($query->have_posts()) :
						// Bắt đầu vòng lặp để hiển thị bài viết
						while ($query->have_posts()):
							$query->the_post();

							$content = get_the_content();
							$content = strip_tags($content);
							$shortDescription = substr($content, 0, 100);
							// Hiển thị tiêu đề bài viết và liên kết đến bài viết
							$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // 'thumbnail' là kích thước hình ảnh nhỏ
							?> 
							<article class="entry entry-list">
								<div class="row">
									<div class="col-md-5">
										<figure class="entry-media">
											<a href="<?=get_permalink()?>" class="post-thumbnail"> 
												<?php if ($thumbnail_url): ?>
													<img width="100%" src="<?=esc_url($thumbnail_url)?>" alt="<?=get_the_title()?>" />
												<?php else: ?> 
													<img width="100%" class="border" src="<?=get_template_directory_uri()?>/images/placeholder.svg" alt="<?=get_the_title()?>" />   
												<?php endif ?>
											</a>
										</figure>
									</div>

									<div class="col-md-7">
										<div class="entry-body">
											<div class="entry-meta">
												<span class="entry-author">
													by <strong><?=the_author()?></strong>
												</span>
												<span class="meta-separator">|</span>
												<strong><?=get_the_date()?></strong>
												<span class="meta-separator">|</span>
												<strong> Comments</strong>
											</div><!-- End .entry-meta -->

											<h2 class="entry-title">
												<a href="<?=get_permalink()?>"><?=get_the_title()?></a>
											</h2><!-- End .entry-title -->
											<?php 
											$categories = get_the_category( get_the_ID() );
											if ( ! empty( $categories ) ) {
												echo '<div class="entry-cats">';
												foreach ( $categories as $category ) {
													echo esc_html( $category->name ) . ', ';
												}
												echo '</div>';
											}
											?> 

											<div class="entry-content">
												<p><?php the_excerpt()?></p>
												<a href="<?=get_permalink()?>" class="read-more">Xem thêm</a>
											</div>
										</div>
									</div>
								</div>
							</article> 

							<?php endwhile ?> 

							<?php
								// Pagination
								the_posts_pagination(array(
									'mid_size'  => 2,
									'prev_text' => __('Previous', 'textdomain'),
									'next_text' => __('Next', 'textdomain'),
								));
							?>
							<?php  wp_reset_postdata();?>
							 
						 
					<!-- End Blog Section --> 
					<?php endif ?>
				 
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




 