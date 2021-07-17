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
    <div class="header-desc">
        <div class="header_top">
            <div class="container">
                <nav class="header-nav_top">
                    <ul class="header-nav_top__list">
                        <?php foreach(get_menu_items('header-top') as $topMenuItem):?>
                            <li class="header-nav_top__item <?php echo $topMenuItem['is_active'] ? 'active' : ''?>">
                                <a href="<?php echo $topMenuItem['url']?>">
                                    <?php echo $topMenuItem['title'] ?>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </nav>
                <div class="header-callback">
                    <a href="tel:+74957818822" class="header-callback__phone">(495) 781-88-22</a>
                    <button class="btn btn_purple" data-show-modal="call-back">Заказать звонок</button>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <a href="/" class="header__logo logo_header logo_rect"></a>
                <nav class="header-nav_bottom">
                    <ul class="header-nav_bottom__list">
                    <?php foreach (get_menu_items('header-main') as $item):?>
                        <li class="header-nav_bottom__item <?php echo $item['is_active'] ? 'active' : ''?> <?php echo !empty($item['children']) ? 'dropdown-li' : ''?>">
                            <a href="<?php echo $item['url']?>"><?php echo $item['title']?></a>
                            <?php if(!empty($item['children'])):?>
                                <ul class="header-nav__dropdown-menu">
                                    <?php foreach ($item['children'] as $child):?>
                                    <li class="header-nav__dropdown-item">
                                        <a href="<?php echo $child['url']?>"><?php echo $child['title']?></a>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            <?php endif;?>
                        </li>
                    <?php endforeach;?>
                    </ul>
                </nav>
                <div class="header-search-block">
                    <div class="header-bookmarks"><span class="header-bookmarks__count">7</span></div>
                    <div class="header-search-form"><input type="search" placeholder="Я ищу..."></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile__container container">
            <a href="<?php site_url() ?>" class="header-mobile__logo header__logo logo_header logo_rect"></a>
            <a href="tel:+74957818822" class="header-mobile__phone">(495) <span>781-88-22</span></a>
            <div class="header-mobile__burger burger"><span></span><span></span><span></span></div>
            <div class="header-mobile__search"></div>
            <div class="header-mobile__bookmarks">
                <div class="header-bookmarks"><span class="header-bookmarks__count">7</span></div>
            </div>
            <div class="header-mobile__hr"></div>
            <ul class="header-mobile-nav__list">
                <li class="header-mobile-nav__item"><a href="#">Недвижимость</a></li>
                <li class="header-mobile-nav__item"><a href="#">Выбрать квартиру</a></li>
                <li class="header-mobile-nav__item header-mobile-nav__item_drop-down">
                    <span>Клиентам</span>
                    <div class="header-mobile-nav__drop-down-container">
                        <ul class="header-mobile-nav__dropdown-menu">
                            <li class="header-mobile-nav__dropdown-item"><a href="#">Выдача ключей</a></li>
                            <li class="header-mobile-nav__dropdown-item"><a href="#">Оформление собственности</a></li>
                            <li class="header-mobile-nav__dropdown-item"><a href="#">Ипотека</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-mobile-nav__item"><a href="#">Медиа</a></li>
            </ul>
            <button class="header-mobile__get-callback btn btn_purple">Заказать звонок</button>
        </div>
    </div>
</header>
<body>