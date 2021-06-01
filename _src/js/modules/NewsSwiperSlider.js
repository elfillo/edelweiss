import Swiper from 'swiper/bundle';

new Swiper(".news-carousel", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 5,
    loop: true,
    navigation: {
        nextEl: ".news-carousel__btn_next",
        prevEl: ".news-carousel__btn_prev",
    },
});