import $ from "jquery";
import {autoHeightAnimate} from './_helpers.js';

$(document).ready(function () {
    $('*[data-has-submenu]').click(function (e) {
        e.preventDefault();
        let self = e.target;

        if(self.hasAttribute('data-link')){
            window.location = $(self).attr('href');
            return;
        }

        let rootEl = $(this).closest('*[data-has-submenu]');
        let subContainer = $(rootEl).find('*[data-submenu-container]');
        let rootMenuEl = $(this).closest('*[data-m-m-root-el]');
        let arrow = $(rootEl).find('a.arrow');

        $(rootMenuEl).css('height','auto');
        $(arrow).toggleClass('arrow_toggle');
        autoHeightAnimate(subContainer, 500);
    });
});