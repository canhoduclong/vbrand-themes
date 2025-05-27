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
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                        the_content();
                        endwhile; else: ?>
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