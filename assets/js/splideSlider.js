document.addEventListener('DOMContentLoaded', function () {

    const splide1 = new Splide('.splide-1', {
        perPage: 4,
        type: 'loop',
        focus: 'center',
        pagination: false,
        arrows: false,
        drag: false,
        keyboard: false,
        autoplay: true,
        interval: 0,
        easing: "linear",
        speed: 3000,
        pauseOnHover: false,
        gap: "0em",
        breakpoints: {
            1670: {
                gap: "15em"
            },

            1440: {
                gap: "25em"
            },

            1280: {
                perPage: 3,
                gap: "15em"
            },

            1024: {
                perPage: 3,
                gap: "25em"
            },

            876: {
                perPage: 2,
                gap: "5em"
            },

            750: {
                perPage: 2,
                gap: "15em"
            },

            600: {
                perPage: 2,
                gap: "25em"
            },

            420: {
                perPage: 1,
                gap: "2em"
            },

            375: {
                perPage: 1,
                gap: "3em"
            },

            360: {
                gap: "5em"
            }
        }
    }).mount();

    const splide2 = new Splide('.splide-2', {
        perPage: 3,
        type: 'loop',
        focus: 'center',
        pagination: false,
        arrows: false,
        drag: false,
        keyboard: false,
        autoplay: false,
        interval: 0,
        easing: "linear",
        speed: 3000,
        pauseOnHover: false,
        gap: "5em",
        breakpoints: {
            1024: {
                perPage: 3
            },

            700: {
                perPage: 3,
                gap: "20em"
            },

            640: {
                perPage: 2
            },

            420: {
                perPage: 2,
                gap: "17em"
            }
        }
    }).mount();
});
