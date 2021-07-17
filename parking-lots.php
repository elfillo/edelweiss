<?php
	/*
	Template Name: Машиноместа
	*/
?>
<?php get_header(); ?>
<div class="container">
    <div class="breadcrumbs">
			<?php the_breadcrumbs(['Недвижимость' => site_url('nedvizhimost'), 'Машиноместа' => '']) ?>
    </div>
</div>
<h1>Машиноместа</h1>
<section class="section">
    <div class="container">
        <div class="text-image-block text-image-block_reverse">
            <div class="text-image-block__text">
                <div class="text-image-block__content paragraph">
                    <p class="_bold">Охраняемая автостоянка от ООО «Эдельвейс» - безопасность вашего транспорта</p>
                    <p>Одной из проблем крупных мегаполисов и прилегающих к ним районов является перенасыщенный автомобильный трафик и отсутствие парковочных мест даже на платных стоянках. Оставлять автомобиль под открытым небом в ночное время суток довольно рискованно, вас будет преследовать постоянное волнение за его сохранность и ожидание провокационных действий со стороны злоумышленников.</p>
                    <p>Мы предлагаем оптимальное решение для владельцев недвижимости в своих многоэтажных новостройках – покупка парковочного места в многоуровневых подземных паркингах.</p>
                    <p>Покупая собственное парковочное место, вы всегда будете уверены, что в любое время сможете беспрепятственно выехать с территории парковки. В зимний период подъездные пути всегда расчищены и обработаны специальным составом Анти-Лед. Управляющая компания постоянно следит за чистотой и порядком на всей прилегающей территории.</p>
                </div>
            </div>
            <div class="text-image-block__image">
                <img src="<?php the_img_uri('temp-content/parking-lots-page.png') ?>" alt="" class="_contain">
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <h2 class="section__title">Выберите машиноместо</h2>
        <hr>
        <p style="text-align: center; text-transform: uppercase;">Iframe place</p>
        <hr>
    </div>
</section>
<section class="section">
    <div class="container" style="margin-bottom: 20px;">
        <h2 class="section__title">Преимущества покупки <br/> парковочного места</h2>
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
