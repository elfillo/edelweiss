<?php $records = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'implemented-object',
	'order' => 'date'
));
?>
<div class="object-list">
	<?php while($records->have_posts()): $records->the_post();?>
	<?php for ($i = 0; $i < 8; $i++):?>
		<div class="object-card object-card_yellow">
			<div class="object-card__cover"><?php the_post_thumbnail()?></div>
			<div class="object-card__content">
				<div class="object-card__city"><?php the_excerpt()?></div>
				<div class="object-card__title"><?php the_title()?></div>
			</div>
		</div>
	<?php endfor;?>
	<?php endwhile;?>
</div>
