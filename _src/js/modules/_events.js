import $ from "jquery";
import {autoHeightOpenAnimate} from "./_helpers";

/*разнородные эвенты*/

$(document).ready(function () {
    $('.document-list__more').click(function () {
        const element = $('.document-list__list');
        autoHeightOpenAnimate(element, 500);
        $(this).remove();
    });

    $('*[data-show-preview]').click(function () {
        const url = $(this).data('show-preview');
        const prevImg = $('.building-gallery__preview').find('img');
        $(prevImg).attr('src', url);
    });

    $('*[data-link]').click(function (){
       let link = $(this).data('link');
       if(link.length) window.location = link;
    });
});

