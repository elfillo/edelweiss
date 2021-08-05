<?php
	/*
	Template Name: Клиентам
	*/
?>
<?php get_header(); ?>
<h1>Клиентам</h1>
	<section class="section">
		<div class="container">
            <div class="for-clients">
                <div class="for-clients__list card-list">
                    <div class="card card_light-blue for-clients-card for-clients__item card-list__item">
                        <div class="for-clients-card__title">Ипотека</div>
                        <div class="for-clients-card__text">Информация о банках-партнёрах и условиях выдачи ипотеки</div>
                        <div class="for-clients-card__btn"><a href="<?php echo site_url('ipoteka/')?>" class="btn btn_yellow-border">посмотреть</a></div>
                        <div class="for-clients-card__icon icon icon_home"></div>
                    </div>
                    <div class="card card_light-blue for-clients-card for-clients__item card-list__item">
                        <div class="for-clients-card__title">Выдача ключей</div>
                        <div class="for-clients-card__text">Информация о дате и месте получения ключей, перечень документов для выдачи ключей</div>
                        <div class="for-clients-card__btn"><a href="<?php echo site_url('vydacha-kljuchej/')?>" class="btn btn_yellow-border">посмотреть</a></div>
                        <div class="for-clients-card__icon icon icon_key"></div>
                    </div>
                    <div class="card card_light-blue for-clients-card for-clients__item card-list__item">
                        <div class="for-clients-card__title">Оформление собственности</div>
                        <div class="for-clients-card__text">Перечень документов и сроки заключения актов долевого участия, режим работы отдела оформления актов</div>
                        <div class="for-clients-card__btn"><a href="<?php echo site_url('oformlenie-sobstvennosti/')?>" class="btn btn_yellow-border">посмотреть</a></div>
                        <div class="for-clients-card__icon icon icon_documents"></div>
                    </div>
                </div>
            </div>
        </div>
	</section>
<?php get_footer()?>