<?php get_header(); ?>
<div class="container">
	<div class="breadcrumbs">
		<?php the_breadcrumbs(['Клиентам' => site_url('klientam'), 'Оформление недвижимости' => site_url('oformlenie-sobstvennosti'), get_the_title() => '']) ?>
	</div>
</div>
<section class="section">
	<div class="container">
		<?php while (have_posts()):the_post(); ?>
			<?php the_content() ?>
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>
