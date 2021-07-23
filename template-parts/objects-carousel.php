<?php $records = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'implemented-object',
	'order' => 'date'
));
?>
<div class="container">
	<h2 class="section__title">Объекты</h2>
	<div class="swiper-container news-carousel carousel">
		<div class="swiper-wrapper carousel__list">
			<?php while($records->have_posts()): $records->the_post();?>
              <?php for($i = 0; $i < 10; $i++):?>
				<div class="swiper-slide news-carousel__item">
                    <div class="object-card object-card_yellow">
                        <div class="object-card__cover"><?php the_post_thumbnail()?></div>
                        <div class="object-card__content">
                            <div class="object-card__city"><?php the_excerpt()?></div>
                            <div class="object-card__title"><?php the_title()?></div>
                            <a class="object-card__show-more" href="<?php the_permalink()?>">Подробнее</a>
                        </div>
                    </div>
				</div>
            <?php endfor;?>
			<?php endwhile;?>
		</div>
		<div class="carousel__btn carousel__btn_next news-carousel__btn_next"></div>
		<div class="carousel__btn carousel__btn_prev news-carousel__btn_prev"></div>
	</div>
</div>