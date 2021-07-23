<?php $records = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'issuing-keys',
	'order' => 'date'
));
?>

<div class="issuing-key">
	<div class="issuing-key__list">
		<?php while($records->have_posts()): $records->the_post();?>
		<?php for($i = 0; $i < 7; $i++):?>
			<div class="issuing-key__item news-card news-card_big">
				<div class="news-card__cover issuing-key__item-cover"><?php the_post_thumbnail()?></div>
				<div class="news-card__content">
					<div class="news-card__title"><?php the_title()?></div>
					<div class="news-card__description"><?php the_excerpt()?></div>
					<a class="news-card__more btn btn_underline" href="<?php the_permalink()?>">Подробнее</a>
				</div>
			</div>
		<?php endfor;?>
		<?php endwhile;?>
	</div>
</div>