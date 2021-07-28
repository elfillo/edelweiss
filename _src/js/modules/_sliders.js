import Swiper from 'swiper/bundle';

new Swiper(".news-carousel", {
    loop: true,
    navigation: {
        nextEl: ".news-carousel__btn_next",
        prevEl: ".news-carousel__btn_prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        520: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1200:{
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1600: {
            slidesPerView: 5,
            spaceBetween: 30,
        }
    }
});

new Swiper(".i-p-slider", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

new Swiper(".building-gallery-slider", {
    breakpoints: {
        320:{
            slidesPerView: 4,
            slidesPerColumn: 3,
            spaceBetween: 5,
        },
        1200: {
            slidesPerView: 2,
            slidesPerColumn: 3,
            spaceBetween: 14,
        },
        1360:{
            slidesPerView: 4,
            slidesPerColumn: 3,
            spaceBetween: 14,
        }
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});