<?php
	/*
	Template Name: Контакты
	*/
?>
<?php get_header(); ?>
    <h1>Контакты</h1>
    <section class="section">
        <div class="container">
            <div class="contacts">
                <div class="contact-card">
                    <div class="contact-card__title">Центральный офис</div>
                    <div class="contact-card__address">
                        <div class="contact-card__subtitle">Адресс:</div>
                        <div class="contact-card__address-name">г. Реутов, ул. Ашхабадска, д.14.</div>
                        <div class="contact-card__address-description">От метро "Новогиреево": <br/>марш.такси №533,
                            597,
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
                        <li> Пт: 9:00-17:00</li>
                        <li> Обед: 13:00-14:00,</li>
                        <li> Выходной: Сб, Вс</li>
                    </ul>
                </div>
                <div class="contact-card">
                    <div class="contact-card__title">Дополнительный офис №1</div>
                    <div class="contact-card__address">
                        <div class="contact-card__subtitle">Адресс:</div>
                        <div class="contact-card__address-name">г. Реутов, ул. Ашхабадска, д.14.</div>
                        <div class="contact-card__address-description">От метро "Новогиреево": <br/>марш.такси №533,
                            597,
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
                        <li> Пт: 9:00-17:00</li>
                        <li> Обед: 13:00-14:00,</li>
                        <li> Выходной: Сб, Вс</li>
                    </ul>
                </div>
                <div class="contact-card">
                    <div class="contact-card__title">Дополнительный офис №2</div>
                    <div class="contact-card__address">
                        <div class="contact-card__subtitle">Адресс:</div>
                        <div class="contact-card__address-name">г. Реутов, ул. Ашхабадска, д.14.</div>
                        <div class="contact-card__address-description">От метро "Новогиреево": <br/>марш.такси №533,
                            597,
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
                        <li> Пт: 9:00-17:00</li>
                        <li> Обед: 13:00-14:00,</li>
                        <li> Выходной: Сб, Вс</li>
                    </ul>
                </div>

            </div>
            <div class="contacts-map">
                <ul class="contacts-map__list">
                    <li class="contacts-map__item active"
                        data-office-name="main">Центральный
                    </li>
                    <li class="contacts-map__item"
                        data-office-name="first">доп. офис №1
                    </li>
                    <li class="contacts-map__item"
                        data-office-name="second">доп. офис №2
                    </li>
                </ul>
                <select class="contacts-map__list-mobile">
                    <option value="Центральный">Центральный</option>
                    <option value="доп. офис №1">доп. офис №1</option>
                    <option value="доп. офис №2">доп. офис №2</option>
                </select>
                <div class="contacts-map__map" id="contacts-map"></div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>