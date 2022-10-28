import $ from 'jquery';
window.$ = window.jQuery = $;
import 'slick-carousel';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


$(".slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1            
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
    ]
});