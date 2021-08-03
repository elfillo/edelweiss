<?php
	/*
	Template Name: Медиа
	*/
?>
<?php get_header(); ?>
	<h1>Медиа</h1>
	<section class="section">
		<div class="container">
			<div class="for-clients">
				<div class="for-clients__list">
					<div class="card card_light-blue for-clients-card for-clients__item">
						<div class="for-clients-card__title">Новости</div>
						<div class="for-clients-card__text">Самые последние новости района и ЖК</div>
						<div class="for-clients-card__btn"><a href="<?php echo site_url('news/') ?>" class="btn btn_yellow-border">посмотреть</a></div>
						<div class="for-clients-card__icon icon icon_file-text"></div>
					</div>
					<div class="card card_light-blue for-clients-card for-clients__item">
						<div class="for-clients-card__title">Live</div>
						<div class="for-clients-card__text">Прямые трансляции</div>
						<div class="for-clients-card__btn"><a href="<?php echo site_url('live/') ?>" class="btn btn_yellow-border">посмотреть</a></div>
						<div class="for-clients-card__icon icon icon_video"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer()?>