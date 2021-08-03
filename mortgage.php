<?php
	/*
	Template Name: Ипотека
	*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="breadcrumbs">
					<?php the_breadcrumbs(['Клиентам' => site_url('klientam/'), get_the_title() => '']) ?>
        </div>
    </div>
    <div class="container">
        <h1>Ипотечный калькулятор</h1>
        <h2 class="mortgage__subtitle">Выберите один из видов подсчёта и внесите необходимые данные, чтобы увидеть
            приблизительные данные по ипотечному кредитованию</h2>
    </div>
    <section class="section">
        <div class="container" style="text-align:center;">
            <hr>
            IFRAME PLACE
            <hr>
        </div>
    </section>
    <section class="section">
        <div class="container"><?php include "template-parts/bank-partners.php";?></div>
    </section>
    <section class="section section_grey">
        <div class="container">
            <div class="text-image-block text-image-block_reverse">
                <div class="text-image-block__text">
                    <div class="text-image-block__title">
                        Особенности сотрудничества с компанией «Эдельвейс»
                    </div>
                    <div class="text-image-block__content paragraph">
                        <p>Группа строительных компаний, объединенных в холдинг «Эдельвейс», является официально аккредитованной организацией, поэтому с получением ипотечного кредита проблем и сложностей у Клиентов не возникает. Вы можете рассчитывать на помощь наших менеджеров:</p>
                        <p>— При выборе банка и лояльной программы кредитования;</p>
                        <p>— Консультативного характера при выборе валюты ипотеки; — По ускорению процесса получения ответа из банка.</p>
                        <p>Наши специалисты могут предложить Вам различные варианты процентных ставок: плавающая, комбинированная, фиксированная.</p>
                    </div>
                    <div class="text-image-block__buttons">
                        <button class="btn btn_yellow" data-show-modal="call-back">Получить консультацию</button>
                    </div>
                </div>
                <div class="text-image-block__image image-border image-border_purple">
                    <img src="<?php the_img_uri('temp-content/photo_8.png') ?>" alt="">
                </div>
                <div class="text-image-block__title_mobile">
                    Особенности сотрудничества с компанией «Эдельвейс»
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Почему стоит выбрать ООО «Эдельвейс»?</h2>
            <div class="list-flex list-flex_sb">
                <div class="benefit-card">
                    <div class="benefit-card__icon">
                        <div class="icon icon_customer-service"></div>
                    </div>
                    <div class="benefit-card__title benefit-card__title_black">Оперативная <br> помощь</div>
                    <div class="benefit-card__text">Обратившись к нам, вы можете рассчитывать на оперативную грамотную консультацию по всем условиям ипотечного кредитования недвижимости от застройщика. Наши менеджеры доступно расскажут обо всех особенностях и нюансах ипотечного кредитования.</div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card__icon">
                        <div class="icon icon_vector"></div>
                    </div>
                    <div class="benefit-card__title benefit-card__title_black">Лояльная <br> ценовая политика</div>
                    <div class="benefit-card__text">С нашей компанией возможность экономии удваивается: холдинг обладает собственными цехами по производству столярных, металлопластиковых, сыпучих материалов, стеновых блоков, функционирует собственный кабельный завод, - все это позволяет демпинговать цены на рынке недвижимости и делать жилье более доступным.</div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card__icon">
                        <div class="icon icon_home_black"></div>
                    </div>
                    <div class="benefit-card__title benefit-card__title_black">Дополнительная <br> экономия и возможности</div>
                    <div class="benefit-card__text">Если вы хотите дополнительно сэкономить порядка 20-30% от стоимости жилья, планируйте покупку недвижимости на начальном этапе строительства. Приобретая жилье на этапе строительства, вы имеете возможность заказать индивидуальную планировку и выбрать оптимальную по размеру жилплощадь.</div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card__icon">
                        <div class="icon icon_tools"></div>
                    </div>
                    <div class="benefit-card__title benefit-card__title_black">Комплексный <br> подход</div>
                    <div class="benefit-card__text">Мы осуществляем постоянный контроль технического состояния оборудования (лифт, коммуникации, освещение прилегающей территории), сантехники, выполняем работы по озеленению и уборке общественных зон отдыха.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container"><?php include "template-parts/news-carousel.php";?></div>
    </section>
<?php get_footer(); ?>