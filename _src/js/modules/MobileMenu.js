import $ from "jquery";
import autoHeightAnimate from './Helpers.js';

class MobileDropDownMenu{
    constructor(){
        this.dropDownItems = document.querySelectorAll('.header-mobile-nav__item_drop-down');
        this.mobileNav = document.querySelector('.header-mobile-nav__list');
        this.events();
    }

    events(){
        this.dropDownItems.forEach(el => {
            el.addEventListener("click", e => {
                e.preventDefault();
                let menu = $(el).find('.header-mobile-nav__drop-down-container');
                $(el).toggleClass('show-drop-down-menu');
                $('.header-mobile-nav__list').css('height','auto');
                autoHeightAnimate(menu, 500);
            });
        });
    }
}

export default MobileDropDownMenu;
