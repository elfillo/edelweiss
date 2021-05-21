<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Эдельвейс</title>
	<?php wp_head(); ?>
</head>
<header class="header">
    <div class="header_top">
        <div class="container">
            <nav class="header-nav_top">
                <ul class="header-nav_top__list">
                    <li class="header-nav_top__item"><a href="#">О компании</a></li>
                    <li class="header-nav_top__item"><a href="#">Акции</a></li>
                    <li class="header-nav_top__item"><a href="#">Контакты</a></li>
                </ul>
            </nav>
            <div class="header-callback">
                <a href="tel:+74957818822" class="header-callback__phone">(495) 781-88-22</a>
                <button class="btn btn_purple">Заказать звонок</button>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <a href="<?php site_url() ?>" class="header__logo logo_header logo_rect"></a>
            <nav class="header-nav_bottom">
                <ul class="header-nav_bottom__list">
                    <li class="header-nav_bottom__item active"><a href="#">Недвижимость</a></li>
                    <li class="header-nav_bottom__item"><a href="#">Выбрать квартиру</a></li>
                    <li class="header-nav_bottom__item dropdown-li">
                        <a href="#">Клиентам</a>
                        <ul class="header-nav__dropdown-menu">
                            <li class="header-nav__dropdown-item"><a href="#">Выдача ключей</a></li>
                            <li class="header-nav__dropdown-item"><a href="#">Оформление собственности</a></li>
                            <li class="header-nav__dropdown-item"><a href="#">Ипотека</a></li>
                        </ul>
                    </li>
                    <li class="header-nav_bottom__item"><a href="#">Медиа</a></li>
                </ul>
            </nav>
            <div class="header-search-block">
                <div class="header-bookmarks"><span class="header-bookmarks__count">7</span></div>
                <div class="header-search-form"><input type="search" placeholder="Я ищу..."></div>
            </div>
        </div>
    </div>
</header>
<body>