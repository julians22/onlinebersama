// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

const swiper_prefix = 'online_bersama_';


const howToUseDomain = new Swiper(`.${swiper_prefix}how_to_use_domain`, {
    slidesPerView: 2,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
});
