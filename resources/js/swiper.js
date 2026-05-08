import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const prefix = 'online_bersama_';

const smallBusinessStory = new Swiper(`.${prefix}small_business_story`, {
    effect: 'coverflow',
    centeredSlides: true,
    slidesPerView: 2,
    slideToClickedSlide: true,
    loop: true,
    spaceBetween: -70,
    coverflowEffect: {
        rotate: 0,
        depth: 450,
        slideShadows: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
});
