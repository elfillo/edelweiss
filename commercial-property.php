<?php
	/*
	Template Name: Коммерческая недвижимость
	*/
?>
<?php get_header(); ?>
<h1>Коммерческая недвижимость</h1>
<div class="container">
    <div class="breadcrumbs">
			<?php the_breadcrumbs(['Недвижимость' => site_url('nedvizhimost'), 'Коммерческая недвижимость' => '']) ?>
    </div>
</div>
<h1>Коммерческая недвижимость</h1>
<section class="section">
    <div class="container">
        <div class="text-image-block text-image-block_reverse">
            <div class="text-image-block__text">
                <div class="text-image-block__content paragraph">
                    <p class="_bold">Разнообразие выбора жилплощади от застройщика</p>
                    <p>Успех в бизнесе во многом зависит от правильного месторасположения коммерческой недвижимости и
                        потребностей жителей этого района. Отдельная новостройка или целый жилой квартал – это
                        прекрасная возможность для открытия собственного дела: салона красоты, продуктового магазина,
                        кафе или ресторана, аптеки. Все вышеперечисленное будет, несомненно, приносить прибыль своим
                        владельцам, ведь жителям новых квартир и прилегающих районов в первую очередь важны качество,
                        сервис и близость к дому.</p>

                    <p>Группа строительных компаний «Эдельвейс» - крупнейший застройщик в Москве и Подмосковье –
                        предлагает своим клиентам коммерческую недвижимость в лучших районах города по выгодной
                        стоимости, начиная от 70 тыс. рублей за м2. Мы предлагаем огромный выбор услуг, таких как аренда
                        и продажа площади в новостройках, работа с вторичной недвижимостью. Все это гарантирует вам:</p>

                    <p>Экономию средств, так как с возведением каждого этажа новостроя стоимость квадратного метра
                        площади увеличивается;
                        Привилегии при выборе планировки помещения.
                        Наши опытные менеджеры грамотно проконсультируют вас по возникающим вопросам, продемонстрируют
                        все варианты готовых к продаже помещений и помогут определиться с выбором.</p>
                </div>
            </div>
            <div class="text-image-block__image">
                <img src="<?php the_img_uri('temp-content/commerce-property-page.png') ?>" alt="" class="_contain">
            </div>
        </div>
    </div>
</section>
<section class="section"><?php include 'template-parts/objects-carousel.php' ?></section>
<section class="section section_grey">
    <div class="container">
        <div class="text-image-block">
            <div class="text-image-block__text">
                <div class="text-image-block__title">Доступная коммерческая недвижимость</div>
                <div class="text-image-block__content paragraph">
                    <p>ООО «Эдельвейс» имеет собственные цеха производства: более десятка цехов по производству
                        строительных бетонных блоков, металлоизделий, столярных и полимерных изделий, пластиковых
                        оконных рам и радиаторов отопления. За счет собственного производства основных компонентов мы
                        существенно снижаем стоимость возводимого объекта.</p>
                </div>
            </div>
            <div class="text-image-block__image image-border image-border_green">
                <img src="<?php the_img_uri('temp-content/photo_7.png') ?>" alt="">
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
                <div class="benefit-card__title">Универсальная <br/> форма оплаты</div>
                <div class="benefit-card__text">Оплата принимается в виде наличных, банковских перечислений, а также
                    существует возможность оформления рассрочки или ипотеки.
                </div>
            </div>
            <div class="benefit-card">
                <div class="benefit-card__icon">
                    <div class="icon icon_vector"></div>
                </div>
                <div class="benefit-card__title">Выгодные условия <br/> совершения сделки</div>
                <div class="benefit-card__text">Любая ваша недвижимость в Москве и Подмосковье может выступать в
                    качестве первоначального взноса по кредиту. Оценка объектов вторичной недвижимости максимально
                    приближена к рыночной стоимости.
                </div>
            </div>
            <div class="benefit-card">
                <div class="benefit-card__icon">
                    <div class="icon icon_checklist"></div>
                </div>
                <div class="benefit-card__title">Гарантии <br/> надежности</div>
                <div class="benefit-card__text">Все объекты недвижимости проходят тщательную проверку и полностью
                    соответствуют требованиям пожарной и санитарной безопасности. Для поддержания безаварийного
                    состояния зданий специалисты компании проводят по графику регламентное обслуживание всех систем.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section"><?php include 'template-parts/news-carousel.php' ?></section>
<?php get_footer() ?>

