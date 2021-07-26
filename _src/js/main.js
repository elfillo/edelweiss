import "./modules/NewsSwiperSlider"
//import "./modules/YandexMap"
import "./modules/InfrastructureMap"
import "./modules/ContactPageMap"
import "./modules/Burger"
import "./modules/Helpers"
import MobileDropDownMenu from "./modules/MobileMenu"
import "./modules/Form"
import Modal from "./modules/Modal"

new MobileDropDownMenu();
new Modal();


import $ from "jquery";

$('.document-list__more').click(function () {
    const element = $('.document-list__list');
    element.css('height', 'auto').outerHeight();
    element.height(element.height());
    var autoHeight = element.css('height', 'auto').outerHeight();
    element.stop().animate({ height: autoHeight }, parseInt(500));
    $(this).remove();
});

$('*[data-show-preview]').click(function () {
    const url = $(this).data('show-preview');
    const prevImg = $('.building-gallery__preview').find('img');
    $(prevImg).attr('src', url);
});
