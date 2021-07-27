import $ from "jquery";
import {autoHeightAnimate} from './_helpers';

$(function (){
    var showMenu = false;
    var mobileNavList = $('.header-mobile-nav__list');
    $('.burger').click(function(){
        showMenu = !showMenu;
        if(showMenu){
            $('.header-mobile').addClass('header-mobile_open-mobile-menu');
            $('.burger').addClass('burger_is-active');
            autoHeightAnimate(mobileNavList, 500);
            $('body').addClass('no-scroll');
        }else{
            autoHeightAnimate(mobileNavList, 500);
            setTimeout(() => {
                $('.header-mobile').removeClass('header-mobile_open-mobile-menu');
                $('.burger').removeClass('burger_is-active');
                $('body').removeClass('no-scroll');
            }, 600);
        }
    });

    $('.close-modal').click(function () {
        $('.modal').css({'display' : 'none'});
    });

    $('.callback').click(function () {
        $('.modal').css({'display' : 'flex'});
    });
});