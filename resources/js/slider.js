import { tns } from 'tiny-slider/src/tiny-slider';

if (document.querySelector('.planets-slider') !== null) {
    tns({
        container: '.planets-slider',
        gutter: 15,
        loop: true,
        autoplay: true,
        autoHeight: true,
        responsive: {
            "480": {
                items: 1,
            },
            "768": {
                items: 3,
            }
        },
        controlsText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>'
        ]
    });

}