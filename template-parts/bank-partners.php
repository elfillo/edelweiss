<?php $records = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'bank',
	'order' => 'date'
));
?>

<h2 class="section__title">Банки-партнеры</h2>
<div class="bank-partners">
    <div class="bank-partners__list">
	    <?php while($records->have_posts()): $records->the_post();?>
            <div class="bank-card">
                <div class="bank-card__top">
                    <div class="bank-card__title"><?php the_title()?></div>
                    <div class="bank-card__logo">
	                    <?php the_post_thumbnail()?>
                    </div>
                </div>
                <div class="bank-card__description"><?php the_excerpt()?></div>
                <div class="bank-card__show"><a href="<?php the_permalink()?>" class="btn btn_yellow-border">посмотреть</a></div>
            </div>
		<?php endwhile;?>
    </div>
</div>