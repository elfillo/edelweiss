<?php
	/*
	Template Name: Акции
	*/
?>
<?php get_header(); ?>
<?php
	$sales = new WP_Query(array(
		'posts_per_page' => -1,
		'post_type' => 'sale',
		'order' => 'date'
	));
?>
<h1>Акции</h1>
<div class="section">
    <div class="container">
        <div class="sales__list">
	        <?php while($sales->have_posts()): $sales->the_post();?>
                <a href="<?php the_permalink()?>" class="sale__item"><?php the_post_thumbnail()?></a>
	        <?php endwhile;?>
        </div>
    </div>
</div>
<section class="section section_slider"><?php include 'template-parts/news-carousel.php' ?></section>
<?php get_footer(); ?>


