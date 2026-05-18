import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const prefix = 'online-bersama-';

const smallBusinessStory = new Swiper(`.${prefix}small-business-story`, {
    effect: 'coverflow',
    centeredSlides: true,
    slidesPerView: 1.08,
    slideToClickedSlide: true,
    loop: true,
    spaceBetween: 140,
    coverflowEffect: {
        rotate: 0,
        depth: 300,
        slideShadows: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1.25,
            coverflowEffect: {
                depth: 450,
            },
        },
        1024: {
            slidesPerView: 1.75,
        },
        1280: {
            slidesPerView: 2,
            spaceBetween: -70,
        }
    }
});

const howToUse = new Swiper(`.${prefix}how-to-use`, {
    initialSlide: 1,
    slidesPerView: 1.375,
    slideShadows: false,
    spaceBetween: 24,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    breakpoints: {
        500: {
            slidesPerView: 1.5,
        },
        640: {
            slidesPerView: 1.75,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 2.4,
            spaceBetween: 32,
        },
        1280: {
            enabled: false,
            slidesPerView: 3,
            centeredSlides: false,
        }
    }
});

const findHowToUse = new Swiper(`.${prefix}find-how-to-use`, {
    initialSlide: 1,
    slidesPerView: 1.375,
    slideShadows: false,
    spaceBetween: 24,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    breakpoints: {
        500: {
            slidesPerView: 1.5,
        },
        640: {
            slidesPerView: 1.75,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 2.4,
            spaceBetween: 32,
        },
        1280: {
            slidesPerView: 3,
            initialSlide: 0,
            centeredSlides: false,
        }
    }
});
