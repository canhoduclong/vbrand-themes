
<?php /* Template Name: vBrand Logitech Homepage */ ?>

<?php include 'header.php'; ?>
        
<div class="container pt-5">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile;  ?>
    <?php else: ?>
        <p>!Sorry no posts here</p>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>