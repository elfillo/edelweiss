<?php
	/*
	Template Name: Недвижимость
	*/
?>
<?php get_header(); ?>
	<h1>Недвижимость в ЖК «Эдельвейс»</h1>
    <section class="section">
        <div class="container">
            <div class="real-estate">
                <div class="real-estate__list card-list">
                    <div class="card card_light-blue real-estate-card real-estate__item card-list__item">
                        <div class="real-estate-card__title">Новостройки</div>
                        <div class="real-estate-card__btn"><a href="<?php echo site_url('novostrojki/')?>" class="btn btn_yellow-border">посмотреть</a></div>
                    </div>
                    <div class="card card_light-blue real-estate-card real-estate__item card-list__item">
                        <div class="real-estate-card__title">Коммерческая</div>
                        <div class="real-estate-card__btn"><a href="<?php echo site_url('kommercheskaya-nedvizhimost/')?>" class="btn btn_yellow-border">посмотреть</a></div>
                    </div>
                    <div class="card card_light-blue real-estate-card real-estate__item card-list__item">
                        <div class="real-estate-card__title">Машиноместа</div>
                        <div class="real-estate-card__btn"><a href="<?php echo site_url('mashinomesta/')?>" class="btn btn_yellow-border">посмотреть</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>