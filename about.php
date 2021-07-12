<?php
	/*
	Template Name: О компании
	*/
?>
<?php get_header(); ?>
<h1>О компании</h1>
<section class="section">
    <div class="container">
        <div class="text-image-block text-image-block_reverse">
            <div class="text-image-block__text">
                <div class="text-image-block__content paragraph">
                    <p style="font-weight: 600">Полный производственно-строительный цикл и обслуживание своих строений</p>
                    <p>Непросто найти строительную компанию, предлагающую полный комплекс производственных и строительно-монтажных работ, способную оперативно и качественно возводить объекты в сжатые сроки по объективной цене.</p>
                    <p>Наша компания один из крупнейших застройщиков в городе Реутов Московской области. Холдинг объединил ряд успешных производственных и строительных компаний, и создал, таким образом, замкнутый цикл, включающий производство строительных материалов, все строительно-монтажные работы, обслуживание строений и услуги по благоустройству территории.</p>
                    <p>Наша компания оказывает полный комплекс услуг по строительству и продаже жилья в новостройках, коммерческой недвижимости, объектов культуры и религии. Мы гордимся строительством не только многочисленных кварталов многоэтажных домов, но и возведением нескольких храмов и часовни в Реутове.</p>
                </div>
            </div>
            <div class="text-image-block__image">
                <img src="<?php the_img_uri('icons/about-logo.svg') ?>" alt="Машиноместа" style="object-fit: contain">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-image-block">
            <div class="text-image-block__text">
                <div class="text-image-block__content paragraph">
                    <p>После сдачи объекта в эксплуатацию мы продолжаем заботиться о комфорте наших жильцов. С этой целью создана Служба эксплуатации, сотрудники которой тщательно контролируют все инженерные системы здания, выполняют регламентные ремонтные работы, занимаются озеленением и благоустройством территории.</p>
                    <p>Наши клиенты могут не только приобрести новую квартиру по оптимальной цене, но и выгодно продать свое старое жилье или обменять его на новое.</p>
                    <p>В список наших основных услуг входит долгосрочная аренда недвижимости в различных районах города. Обращайтесь к менеджерам ООО «Эдельвейс»: мы предложим вам самые разнообразные услуги в сфере недвижимости, как на первичном, так и на вторичном рынке по доступным ценам.</p>
                </div>
            </div>
            <div class="text-image-block__image">
                <img src="<?php the_img_uri('temp-content/about-photo_1.png') ?>" alt="" style="object-fit: contain">
            </div>
        </div>
    </div>
</section>
<section class="section section_grey">
    <div class="container" style="margin-bottom: 20px;">
        <h2 class="section__title">Преимущества холдинга</h2>
        <div class="list-flex list-flex_sb">
            <div class="benefit-card">
                <div class="benefit-card__icon">
                    <div class="icon icon_database"></div>
                </div>
                <div class="benefit-card__title">Адекватные <br/> цены</div>
                <div class="benefit-card__text">За счет собственного производства строительных материалов вам предлагаются объекты недвижимости по оптимальным ценам. Мы постоянно совершенствуем производственно-техническую базу и сами реализуем свои построенные объекты, тем самым снижая их стоимость.</div>
            </div>
            <div class="benefit-card">
                <div class="benefit-card__icon">
                    <div class="icon icon_hook"></div>
                </div>
                <div class="benefit-card__title">Современные технологии строительства</div>
                <div class="benefit-card__text">Наша компания применяет нестандартные решения, инновационные методики и технологии в строительстве, благодаря которым процесс возведения объектов проходит в ускоренном режиме и полностью соответствует стандартам безопасной эксплуатации.</div>
            </div>
            <div class="benefit-card">
                <div class="benefit-card__icon">
                    <div class="icon icon_paper"></div>
                </div>
                <div class="benefit-card__title">Юридическая чистота <br/>сделки</div>
                <div class="benefit-card__text">Приобретая недвижимость, вы можете быть уверены в юридически правильном оформлении всех документов и отсутствии скрытых комиссий и платежей. Мы гарантируем максимально быстрое оформление сделки на взаимно выгодных условиях.</div>
            </div>
            <div class="benefit-card">
                <div class="benefit-card__icon">
                    <div class="icon icon_protractor"></div>
                </div>
                <div class="benefit-card__title">Комплексный <br/>подход</div>
                <div class="benefit-card__text">Нами предлагается широкий комплекс услуг от создания проектной документации, инвестирования и выполнения строительства до сдачи готовых объектов «под ключ», их гарантийного сервисного обслуживания. А также широкий перечень услуг на вторичном рынке недвижимости.</div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2 class="section__title">Реализованные объекты</h2>
        <div class="object-list">
	        <?php for ($i = 0; $i < 8; $i++):?>
                <div class="object-card object-card_yellow">
                    <div class="object-card__cover"><img src="<?php the_img_uri('temp-content/news-card-cover.png') ?>" alt="#">
                    </div>
                    <div class="object-card__content">
                        <div class="object-card__city">Москва</div>
                        <div class="object-card__title">ЖК «Эдельвейс» 5«Б»</div>
                    </div>
                </div>
            <?php endfor;?>
        </div>
    </div>
</section>
<section class="section">
    <?php include 'template-parts/news-carousel.php'?>
</section>
<?php get_footer(); ?>


