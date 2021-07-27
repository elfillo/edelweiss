import $ from "jquery";
import {autoHeightAnimate} from './_helpers.js';

$(document).ready(function () {
    $('*[data-has-submenu]').click(function (e) {
        e.preventDefault();
        let rootEl = $(this).closest('*[data-has-submenu]');
        let subContainer = $(rootEl).find('*[data-submenu-container]');
        let rootMenuEl = $(this).closest('*[data-m-m-root-el]');
        let arrow = $(rootEl).find('a.arrow');

        $(rootMenuEl).css('height','auto');
        $(arrow).toggleClass('arrow_toggle');
        autoHeightAnimate(subContainer, 500);
    });
});