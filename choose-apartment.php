<?php
	/*
	Template Name: Выбрать квартиру
	*/
?>
<?php $records = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'corpus',
	'order' => 'date'
));
?>
<?php get_header(); ?>
  <h1>Выбрать квартиру</h1>
  <section class="section">
      <div class="container">
          <div class="object-list">
			      <?php while($records->have_posts()): $records->the_post();?>
                    <div class="object-card object-card_yellow">
                        <div class="object-card__cover"><?php the_post_thumbnail()?></div>
                        <div class="object-card__content">
                            <div class="object-card__city"><?php the_excerpt()?></div>
                            <div class="object-card__title"><?php the_title()?></div>
                            <a class="object-card__show-more" href="<?php the_permalink()?>">Подробнее</a>
                        </div>
                    </div>
			      <?php endwhile;?>
          </div>

      </div>
  </section>
<?php get_footer()?>