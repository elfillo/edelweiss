<?php
	/*
	Template Name: Новостройки
	*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="breadcrumbs">
					<?php the_breadcrumbs(['Недвижимость' => site_url('nedvizhimost/'), 'Новостройки' => '']) ?>
        </div>
    </div>
    <h1>Новостройки</h1>
    <section class="section">
        <div class="container">
            <div class="text-image-block text-image-block_reverse">
                <div class="text-image-block__text">
                    <div class="text-image-block__content paragraph">
                        <p class="_bold">Разнообразие выбора жилплощади от застройщика</p>
                        <p>Приобретение недвижимости в новостройке от ООО «Эдельвейс» – это прекрасная возможность
                            выгодно изменить условия жизни и окружить себя прекрасными соседями. Среди новостроек
                            возведённых нашей компанией в Москве и области представлены 16 и 25-ти этажные
                            монолитно-кирпичные здания, расположенные в элитных районах с удобной транспортной развязкой
                            и развитой инфраструктурой. В г. Реутов представлены лучшие из объектов недвижимости
                            различной планировки, которые принялит своих новых владельцев. Особенно удобным и комфортным
                            проживание в новостройках Эдельвейса делает наличие закрытого дворика с детскими площадками,
                            многоуровневыми подземными автостоянками, наличие магазинов, фитнесс-центров и зон
                            отдыха.</p>
                        <p>Вы можете выбрать квартиру не только с превосходным видом из окна, но и с различной площадью
                            от 55 м2 до 150 м2. Стоимость 1м2 - от 70 000 рублей.</p>
                        <p>Благодаря собственному производству необходимых комплектующих и основных стройматериалов,
                            клиентам предлагается минимальная стоимость жилплощади: среди структурных подразделений
                            компании имеются более десятка цехов по производству необходимых строительных материалов
                            (сыпучие строительные смеси, монолитные стеновые блоки, металлоизделия, системы отопления и
                            вентиляции, столярные изделия) и современный завод кабельной продукции.</p>
                    </div>
                </div>
                <div class="text-image-block__image">
                    <img src="<?php the_img_uri('temp-content/block-of-flats-page.png') ?>" alt="" class="_contain">
                </div>
            </div>
        </div>
    </section>
    <section class="section section_slider"><?php include 'template-parts/corpus-cards-carousel.php' ?></section>
    <section class="section section_grey">
        <div class="container">
            <div class="text-image-block">
                <div class="text-image-block__text">
                    <div class="text-image-block__title">Особенности недвижимости от ООО «Эдельвейс»</div>
                    <div class="text-image-block__content paragraph">
                        <p>Приобретая квартиру в новостройке от строительной компании «Эдельвейс», вы гарантированно
                            получаете высокий сервис обслуживания и качество жизни. Управляющая компания «УК-Центрстрой»
                            - это одно из подразделений холдинга, предоставляющее комплекс услуг по поддержанию порядка
                            на прилегающей территории и обеспечивает санитарное обслуживание и озеленение.
                            Аварийно-диспетчерская служба круглосуточно поддерживает нормальное жизнеобеспечение
                            объектов недвижимости. Для удобства жильцов также предоставляются услуги консьержа и
                            коменданта.</p>
                    </div>
                </div>
                <div class="text-image-block__image image-border image-border_yellow">
                    <img src="<?php the_img_uri('temp-content/photo_6.png') ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container" style="margin-bottom: 20px;">
            <h2 class="section__title">Очевидные выгоды от покупки недвижимости <br/> в новострое от ООО «Эдельвейс»</h2>
            <div class="list-flex list-flex_sb">
                <div class="benefit-card">
                    <div class="benefit-card__icon">
                        <div class="icon icon_online-banking"></div>
                    </div>
                    <div class="benefit-card__title">Разнообразие <br/> форм оплаты</div>
                    <div class="benefit-card__text">Оплата принимается в виде наличных, банковских перечислений, а также существует возможность оформления рассрочки или ипотеки. </div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card__icon">
                        <div class="icon icon_customer-service"></div>
                    </div>
                    <div class="benefit-card__title">Квалифицированная <br/> помощь</div>
                    <div class="benefit-card__text">Вы можете рассчитывать на консультативную помощь при выборе программ и условий кредитования, содействие в ускорении процедур оформления всей необходимой документации. Корректность заполнения всех документов проверяют специалисты нашего юридического отдела.</div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card__icon">
                        <div class="icon icon_checklist"></div>
                    </div>
                    <div class="benefit-card__title">Безопасность на всех <br/> этапах</div>
                    <div class="benefit-card__text">Мы используем только инновационные технологии, современные материалы, оборудование и контролируем качество на всех этапах. Наши специалисты регулярно выполняют технические осмотры несущих конструкций зданий и в случае необходимости выполняют оперативный ремонт.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_slider"><?php include 'template-parts/news-carousel.php' ?></section>
<?php get_footer() ?>