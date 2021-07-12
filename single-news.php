<?php get_header(); ?>
    <div class="breadcrumbs">
      <?php the_breadcrumbs(['Медиа' => site_url(), 'Новости' => site_url('news'), get_the_title() => '']) ?>
    </div>
    <section class="section">
        <div class="container">
	        <?php while (have_posts()):the_post(); ?>
			    <?php the_content() ?>
	        <?php endwhile; ?>
        </div>
    </section>
<?php get_footer(); ?>