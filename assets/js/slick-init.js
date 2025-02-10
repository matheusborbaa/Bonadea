jQuery(document).ready(function($) {
    if ($(window).width() <= 768) { // Só ativa o carrossel no mobile
        $('.autoplay-mobile').slick({
            slidesToShow: 1,  
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000, 
            dots: true,  
            arrows: false
        });
    }
});