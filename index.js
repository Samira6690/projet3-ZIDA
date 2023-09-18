var swiper= new Swiper(".blog-slider" , {
    loop:true,
    grabCursor:true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        preEl: ".swiper-button-prev",
    },
    breakpoints: {
        0:{
            slidePerView: 1,
        },
        768: {
            slidePerView: 2,
        },
        991:{
            slidePerView: 3,
        },
    },
});