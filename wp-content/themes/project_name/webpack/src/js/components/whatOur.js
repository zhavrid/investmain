document.addEventListener("DOMContentLoaded", function () {
    var swiper2 = new Swiper(".what", {
        pagination: {
            el: ".swipers-pagination", 
        },
        slidesPerView: 1, // Устанавливаем начальное количество видимых слайдов
        slidesPerGroup: 1, // Устанавливаем количество слайдов, которое перелистывается при клике на кнопку
        spaceBetween: 0, // Опциональное расстояние между слайдами
        breakpoints: {
            650: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
        },
    });
});