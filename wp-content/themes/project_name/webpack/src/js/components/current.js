document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".mySwiper-button-right",
            prevEl: ".mySwiper-button-left",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        slidesPerView: 3, // Устанавливаем начальное количество видимых слайдов
        slidesPerGroup: 3, // Устанавливаем количество слайдов, которое перелистывается при клике на кнопку
        spaceBetween: 20, // Опциональное расстояние между слайдами
        breakpoints: {
            0: {
                slidesPerView: 1, // Для ширины экрана менее 425px листаем по одному слайду
                slidesPerGroup: 1, // По одному слайду при ширине экрана менее 425px
            },
            650: {
                slidesPerView: 2, 
                slidesPerGroup: 2, 
            },
            930: {
                slidesPerView: 3, 
                slidesPerGroup: 3, 
            },
        },
    });
});