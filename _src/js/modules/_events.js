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

    $('.add-to-favorite').click(function (){
        let idsFromStorage = JSON.parse(window.localStorage.getItem('favourite-flats'))
        let flatId = $(this).data('flat-id');

        if(idsFromStorage){
            if(!idsFromStorage.id.includes(flatId)){
                idsFromStorage.id.push(flatId);
            }else{
                const index = idsFromStorage.id.indexOf(flatId);
                if (index > -1) {
                    idsFromStorage.id.splice(index, 1);
                }
            }
        }else{
            idsFromStorage = {id: [flatId]}
        }

        window.localStorage.setItem('favourite-flats', JSON.stringify(idsFromStorage));
        location.reload();
    });

    let favoriteList = JSON.parse(window.localStorage.getItem('favourite-flats'));

    if(favoriteList){
        let count = favoriteList.id.length;
        $('#favourite-flats').val(count);
        $('#favourite-flats-count').val(favoriteList);
        $('.header-bookmarks__count').text(count);
    }

    let flatIdOnPage = $('*[data-flat-id]')[0];
    if(flatIdOnPage){
        let pageId = $(flatIdOnPage).data('flat-id');
        let favoriteList = JSON.parse(window.localStorage.getItem('favourite-flats'));

        if(favoriteList){
            if(favoriteList.id.includes(pageId)){
                $(flatIdOnPage).addClass('active');
            }
        }
    }

    let cook = document.cookie;
    console.log(cook);
});

