<?php get_header(); ?>
<div class="container">
	<div class="breadcrumbs">
		<?php the_breadcrumbs(['Недвижимость' => site_url('nedvizhimost/'), get_the_title() => '']) ?>
	</div>
</div>
<h1><?php the_title()?></h1>
<section class="section">
	<div class="container">
		<?php while (have_posts()):the_post(); ?>
			<?php the_content() ?>
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>


