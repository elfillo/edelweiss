<?php $news = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'news',
	'order' => 'date'
));
?>
<div class="container">
	<h2 class="section__title">Объекты</h2>
	<div class="swiper-container news-carousel carousel">
		<div class="swiper-wrapper carousel__list">
			<?php while($news->have_posts()): $news->the_post();?>
				<div class="swiper-slide news-carousel__item">
					<div class="news-card">
						<div class="news-card__cover"><?php the_post_thumbnail()?></div>
						<div class="news-card__content">
							<div class="news-card__date"><?php the_date()?></div>
							<div class="news-card__title"><?php the_title()?></div>
							<a class="news-card__show-more" href="<?php the_permalink()?>">Подробнее</a>
						</div>
					</div>
				</div>
			<?php endwhile;?>
		</div>
		<div class="carousel__btn carousel__btn_next news-carousel__btn_next"></div>
		<div class="carousel__btn carousel__btn_prev news-carousel__btn_prev"></div>
		<a href="<?php echo site_url('news')?>" class="carousel__show-more btn btn_underline">Смотреть все</a>
	</div>
</div>