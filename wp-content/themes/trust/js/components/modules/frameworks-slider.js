$('.frameworks__list')

    .slick({
        infinite: true,
        speed: 300,
        centerMode: false,
        variableWidth: true,
        lazyLoad: 'ondemand',
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev slick-arrow arrow--main" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next slick-arrow arrow--main" aria-label="Next" type="button"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false,
                }
            },
            {
                breakpoint: 9999,
                settings: 'unslick'
            },
        ]

    })

    .on('afterChange', e => {
        $(window).scroll();
    });