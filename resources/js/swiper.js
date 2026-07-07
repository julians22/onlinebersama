import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const prefix = 'online-bersama-';

/* Small Business Story (SLIDER) */

const smallBusinessStory = new Swiper(`.${prefix}small-business-story`, {
    effect: 'coverflow',
    centeredSlides: true,
    initialSlide: 1,
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
        renderBullet: function (index, className) {
            return '<span data-analytics-name="buttons | carousel nav" class="' + className + '" role="button" aria-label="Go to slide ' + (index + 1) + '"> </span>';
        }
    },
    navigation: {
        nextEl: '.custom-swiper-button-next',
        prevEl: '.custom-swiper-button-prev',
    },
    breakpoints: {
        640: {
            spaceBetween: 160,
            slidesPerView: 1.4,
        },
        1024: {
            slidesPerView: 1.75,
        },
        1280: {
            slidesPerView: 2,
            spaceBetween: -70,
            coverflowEffect: {
                depth: 450,
            },
        }
    }
});

/* Explore More Topics (SLIDER) */

const exploreMoreTopics = new Swiper(`.${prefix}explore-more-topics`, {
    initialSlide: 1,
    slidesPerView: 1.375,
    slideShadows: false,
    spaceBetween: 16,
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
            spaceBetween: 32,
            initialSlide: 0,
            centeredSlides: false,
        }
    }
});

/* How to Use (SLIDER - Card Grow) */

const howToUseGrow = new Swiper(`.${prefix}how-to-use-grow`, {
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
            spaceBetween: 32,
            centeredSlides: false,
        }
    }
});

/* How to Use (SLIDER - Card Inside) */

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
            slidesPerView: 3,
            spaceBetween: 32,
            initialSlide: 0,
            centeredSlides: false,
        }
    }
});
