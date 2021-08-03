<?php
    $slides = get_field('слайдер', get_the_ID());
?>
<?php get_header() ?>
    <section class="section section_no-padding section_no-margin">
        <div class="swiper-container i-p-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $slide):?>
                <div class="swiper-slide">
                    <div class="i-p-slider__item container">
                        <div class="i-p-slider__content">
                            <div class="i-p-slider__title">
                                <?php echo $slide['title']?>
                            </div>
                            <div class="i-p-slider__description paragraph">
	                            <?php echo $slide['text']?>
                            </div>
                            <div class="i-p-slider__buttons">
                                <?php if($slide['buttons'][0]):?>
                                    <?php $btn = $slide['buttons'][0]['button']?>
                                    <a href="<?php echo !isModalLink($btn['link']) ? $btn['link'] : '#' ?>"
                                       class="btn btn_yellow"
                                      <?php echo isModalLink($btn['link']) ? 'data-show-modal="'.$btn['link'].'"' : ''?>
                                    >
                                        <?php echo $btn['text']?>
                                    </a>
                                <?php endif;?>
	                            <?php if($slide['buttons'][1]):?>
			                        <?php $btn = $slide['buttons'][1]['button']?>
                                    <a href="<?php echo !isModalLink($btn['link']) ? $btn['link'] : '#' ?>"
                                       class="btn btn_underline"
					                            <?php echo isModalLink($btn['link']) ? 'data-show-modal="'.$btn['link'].'"' : ''?>
                                    >
					                            <?php echo $btn['text']?>
                                    </a>
	                            <?php endif;?>
                            </div>
                        </div>
                        <div class="i-p-slider__image">
                            <img src="<?php echo $slide['image']['url']?>" alt="Фото жил комплекса">
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="container">
                <div class="i-p-slider__navigation">
                    <div class="swiper-button-next i-p-slider__btn i-p-slider__btn_next"></div>
                    <div class="swiper-button-prev i-p-slider__btn i-p-slider__btn_prev"></div>
                    <div class="swiper-pagination i-p-slider__pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_grey">
        <div class="container">
            <div class="text-image-block text-image-block_reverse">
                <div class="text-image-block__text">
                    <div class="text-image-block__title">
                        О ЖК <span class="underline-text underline-text_light-blue">«Эдельвейс»</span>
                    </div>
                    <div class="text-image-block__content paragraph">
                        <p>Приобретая квартиру в новостройке от строительной компании «Эдельвейс», вы гарантированно
                            получаете высокий сервис обслуживания и качество жизни.</p>
                        <p>Управляющая компания «УК-Центрстрой» - это одно из подразделений холдинга, предоставляющее
                            комплекс услуг по поддержанию порядка на прилегающей территории и обеспечивает санитарное
                            обслуживание и озеленение. Аварийно-диспетчерская служба круглосуточно поддерживает
                            нормальное жизнеобеспечение объектов недвижимости. Для удобства жильцов также
                            предоставляются услуги консьержа и коменданта.</p>
                    </div>
                    <div class="text-image-block__buttons">
                        <a href="<?php echo site_url('novostrojki/')?>" class="btn btn_yellow">О жилой недвижимости</a>
                    </div>
                </div>
                <div class="text-image-block__image image-border image-border_pink">
                    <img src="<?php the_img_uri('temp-content/photo_3.png') ?>" alt="Машиноместа">
                </div>
                <div class="text-image-block__title_mobile">
                    О ЖК <span class="underline-text underline-text_light-blue">«Эдельвейс»</span>
                </div>
            </div>
        </div>
    </section>
    <section class="section relative">
        <div class="container">
            <div class="choose-section">
                <div class="choose-section__content">
                    <div class="choose-section__title">
                        Выберите <span class="underline-text underline-text_pink">корпус</span>
                    </div>
                    <div class="choose-section__description">Нажмите на интересующее вас строениеи ниже появится
                        краткая информация о корпусе
                    </div>
                    <div class="choose-section__map_mobile">
                        <img src="<?php the_img_uri('temp-content/choose-section-map.png') ?>" alt="Фото жил комплекса">
                    </div>
                    <div class="choose-section__hr"></div>
                    <div class="choose-section__section-number">Корпус №6</div>
                    <div class="choose-section__section-status">Статус: В стадии строительства</div>
                    <div class="choose-section__section-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Mauris proin pharetra malesuada egestas pellentesque in. Vehicula posuere donec non vestibulum.
                    </div>
                    <ul class="choose-section__info-stats info-stats">
                        <li class="info-stats__item">
                            <div class="info-stats__count"><span
                                        class="underline-text underline-text_light-blue">8</span>
                            </div>
                            <div class="info-stats__desc">этажей</div>
                        </li>
                        <li class="info-stats__item">
                            <div class="info-stats__count"><span
                                        class="underline-text underline-text_light-blue">92</span>
                            </div>
                            <div class="info-stats__desc">квартиры</div>
                        </li>
                        <li class="info-stats__item">
                            <div class="info-stats__count"><span
                                        class="underline-text underline-text_light-blue">4</span>
                            </div>
                            <div class="info-stats__desc">секции</div>
                        </li>
                    </ul>
                    <a href="<?php echo site_url('vybrat-kvartiru/')?>" class="choose-section__link btn btn_underline">На страницу корпуса</a>
                </div>
                <div class="choose-section__map">
                    <img src="<?php the_img_uri('temp-content/choose-section-map.png') ?>" alt="Фото жил комплекса">
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title infrastructure-map__title">Расположение и инфраструктура</h2>
            <div class="infrastructure-map__description infrastructure-map__description_select">Выберите один из пунктов списка, чтобы его расположение отобразилось на карте.</div>
            <ul class="infrastructure-map__list">
                <li class="infrastructure-map__item infrastructure-map__item_school"
                    data-infrastructure-name="школа">Школы
                </li>
                <li class="infrastructure-map__item infrastructure-map__item_kindergarten"
                    data-infrastructure-name="детский сад">Детские сады
                </li>
                <li class="infrastructure-map__item infrastructure-map__item_hospital"
                    data-infrastructure-name="поликлиника">Поликлиники
                </li>
                <li class="infrastructure-map__item infrastructure-map__item_grocery-store"
                    data-infrastructure-name="продоктовый магазин">Продуктовые
                </li>
            </ul>
            <select class="infrastructure-map__list-mobile">
                <option value="школа">Школы</option>
                <option value="детский сад">Детские сады</option>
                <option value="поликлиника">Поликлиники</option>
                <option value="продоктовый магазин">Продуктовые</option>
            </select>
        </div>
        <div id="infrastructure-map" class="infrastructure-map__map"></div>
        <div class="container">
            <div class="infrastructure-map__description infrastructure-map__description_map"><span>Перемещайтесь по карте при помощи двух пальцев</span></div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="text-image-block text-image-block_reverse">
                <div class="text-image-block__text">
                    <div class="text-image-block__title">
                        <span class="underline-text underline-text_green">Коммерческая</span> недвижимость
                    </div>
                    <div class="text-image-block__content paragraph">
                        <p>ООО «Эдельвейс» имеет собственные цеха производства: более десятка цехов по производству строительных бетонных блоков, металлоизделий, столярных и полимерных изделий, пластиковых оконных рам и радиаторов отопления. За счет собственного производства основных компонентов мы существенно снижаем стоимость возводимого объекта.</p>
                    </div>
                    <div class="text-image-block__buttons">
                        <a href="<?php echo site_url('kommercheskaya-nedvizhimost/')?>" class="btn btn_yellow">Посмотреть объекты</a>
                    </div>
                </div>
                <div class="text-image-block__image image-border image-border_green">
                    <img src="<?php the_img_uri('temp-content/photo_3.png') ?>" alt="Коммерческая недвижимость">
                </div>
                <div class="text-image-block__title_mobile">
                    <span class="underline-text underline-text_green">Коммерческая</span> недвижимость
                </div>
            </div>
        </div>
    </section>
    <section class="section section_grey">
        <div class="container">
            <div class="text-image-block">
                <div class="text-image-block__text">
                    <div class="text-image-block__title">
                        <span class="underline-text underline-text_purple">Машиноместа</span>
                    </div>
                    <div class="text-image-block__content paragraph">
                        <p>Мы предлагаем оптимальное решение для владельцев недвижимости в своих многоэтажных новостройках – покупка парковочного места в многоуровневых подземных паркингах.</p>
                        <p>Покупая собственное парковочное место, вы всегда будете уверены, что в любое время сможете беспрепятственно выехать с территории парковки. В зимний период подъездные пути всегда расчищены и обработаны специальным составом Анти-Лед. Управляющая компания постоянно следит за чистотой и порядком на всей прилегающей территории.</p>
                    </div>
                    <div class="text-image-block__buttons">
                        <button class="btn btn_yellow" data-show-modal="parking">Выбрать машиноместо</button>
                    </div>
                </div>
                <div class="text-image-block__image image-border image-border_purple">
                    <img src="<?php the_img_uri('temp-content/photo_4.png') ?>" alt="Коммерческая недвижимость">
                </div>
                <div class="text-image-block__title_mobile">
                    <span class="underline-text underline-text_purple">Машиноместа</span>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_slider">
	    <?php include 'template-parts/form/consultation.php'?>
    </section>
    <section class="section section_slider">
	    <?php include 'template-parts/news-carousel.php'?>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Контакты</h2>
            <div class="contacts-index">
                <div class="contact-card contacts-index__contact-card">
                    <div class="contact-card__title">Центральный офис</div>
                    <div class="contact-card__address">
                        <div class="contact-card__subtitle">Адресс:</div>
                        <div class="contact-card__address-name">г. Реутов, ул. Ашхабадска, д.14.</div>
                        <div class="contact-card__address-description">От метро "Новогиреево": <br/>марш.такси №533, 597,
                            917.
                        </div>
                    </div>
                    <ul class="contact-card__phones">
                        <li class="contact-card__subtitle">Телефоны:</li>
                        <li class="contact-card__phone"><a href="#">(495) 781-88-22</a></li>
                        <li class="contact-card__phone"><a href="#">(495) 781-88-22</a></li>
                        <li class="contact-card__phone"><a href="#">(495) 781-88-22</a></li>
                    </ul>
                    <ul class="contact-card__work-schedule">
                        <li class="contact-card__subtitle">График работы:</li>
                        <li>Пн-Чт: 9:00-18:00,</li>
                        <li>Пт: 9:00-17:00</li>
                        <li>Обед: 13:00-14:00,</li>
                        <li>Выходной: Сб, Вс</li>
                    </ul>
                    <a href="<?php echo site_url('kontakty/')?>" class="btn btn_yellow contacts-index__contacts-link">Другие офисы</a>
                </div>
                <div class="contacts-index__map" id="index-page-contacts-map"></div>
            </div>
        </div>
    </section>
<?php get_footer() ?>