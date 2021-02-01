require('./bootstrap');
require('./bootstrap.bundle.min')
import Swiper from './swiper.min'
 const swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
     grabCursor: true,
     keyboard: {
         enabled: true,
     },
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
