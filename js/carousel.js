document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-home-container', {
        speed: 400,
        slidesPerView: 1,
        spaceBetween : 5,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
});