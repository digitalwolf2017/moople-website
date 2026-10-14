document.addEventListener('DOMContentLoaded', function () {
    new Splide('#banner', {
      type: 'loop',
      perPage: 1,
      perMove: 1,
      gap: "30px",
      pagination: true,
      paginationDirection: 'ttb',
      classes: {
          arrows: 'splide__arrows hidden',
          pagination: 'splide__pagination lg:left-16 right-auto border-l-[1px] border-[#ADAAAA]',
          page : 'splide__pagination__page lg:w-[30px] w-[20px] lg:h-[30px] h-[20px] ms-[4px] my-[15px] rounded-none text-[#FFF] bg-[transparent]',
      },
      breakpoints: {
        1024: {
        perPage: 1,
        },
        767: {
        perPage: 1,
        paginationDirection: 'ltr',
        },
        640: {
        perPage: 1,
        pagination: false,
        paginationDirection: 'ltr',
        },
    },
      autoplay: true,
      rewind: true,
      speed: 2000,
      rewindSpeed: 2000,
      interval: 4000,
    }).mount();
  });
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#testimonials', {
      perPage: 3,
      perMove: 1,
      pagination: false,
      classes: {
        arrows: 'hidden',
      },
      breakpoints: {
          1024: {
          perPage: 3,
          },
          767: {
          perPage: 2,
          },
          640: {
          perPage: 1,
          },
      },
    }).mount();
  });
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#brands', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      pagination: false,
      classes: {
        arrows: 'hidden',
      },
      breakpoints: {
          1024: {
          perPage: 4,
          },
          767: {
          perPage: 3,
          },
          640: {
          perPage: 2,
          },
      },
      autoplay: true,
    }).mount();
  });
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#moople-info', {
      type: 'loop',
      perPage: 4,
      perMove: 1,
      classes: {
        arrows: 'splide__arrows absolute right-0 -top-6 lg:right-20 lg:-top-8 w-[110px]',
        prev  : 'splide__arrow--prev your-class-prev bg-[#B5341D]',
        next  : 'splide__arrow--next your-class-next bg-[#B5341D]',
      },
      breakpoints: {
          1024: {
          perPage: 3,
          },
          767: {
          perPage: 2,
          },
          640: {
          perPage: 1,
          },
      },
      gap: "30px",
      pagination: false,
      
    }).mount();
  });

  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#future-leaders', {
        type: 'loop',
        perPage: 4,
        perMove: 1,
        classes: {
          arrows: 'splide__arrows absolute right-0 -top-6 lg:right-20 lg:-top-8 w-[110px]',
          prev  : 'splide__arrow--prev your-class-prev bg-[#B5341D]',
        next  : 'splide__arrow--next your-class-next bg-[#B5341D]',
        },
        breakpoints: {
            1024: {
                perPage: 3,
            },
            767: {
                perPage: 2,
            },
            640: {
                perPage: 1,
            },
        },
        gap: "30px",
        pagination: false,

    }).mount();
});
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#placement', {
        type: 'loop',
        perPage: 4,
        perMove: 1,
        classes: {
            arrows: 'hidden',
          },
        breakpoints: {
            1024: {
                perPage: 3,
            },
            767: {
                perPage: 2,
            },
            640: {
                perPage: 1,
            },
        },
        gap: "30px",
        pagination: false,

    }).mount();
});
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#internship', {
        type: 'loop',
        perPage: 4,
        perMove: 1,
        breakpoints: {
            1024: {
                perPage: 3,
            },
            767: {
                perPage: 2,
            },
            640: {
                perPage: 1,
            },
        },
        gap: "30px",
        pagination: false,

    }).mount();
});
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#faculties-slide', {
        type: 'loop',
        perPage: 4,
        perMove: 1,
        classes: {
          arrows: 'splide__arrows absolute right-0 -top-6 lg:right-20 lg:-top-8 w-[110px]',
          prev  : 'splide__arrow--prev your-class-prev bg-[#B5341D]',
        next  : 'splide__arrow--next your-class-next bg-[#B5341D]',
        },
        breakpoints: {
            1024: {
                perPage: 3,
            },
            767: {
                perPage: 2,
            },
            640: {
                perPage: 1,
            },
        },
        gap: "30px",
        pagination: false,

    }).mount();
});
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#banner-btn', {
        type: 'loop',
        perPage: 6,
        perMove: 1,
        classes: {
          arrows: 'hidden',
        },
        breakpoints: {
            1024: {
                perPage: 3,
            },
            767: {
                perPage: 3,
            },
            640: {
                perPage: 2,
            },
        },
        gap: "30px",
        pagination: false,

    }).mount();
});
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#career', {
        type: 'loop',
        perPage: 5,
        perMove: 1,
        classes: {
          arrows: 'splide__arrows absolute right-0 -top-6 lg:right-20 lg:-top-8 w-[110px]',
          prev  : 'splide__arrow--prev your-class-prev bg-[#B5341D]',
        next  : 'splide__arrow--next your-class-next bg-[#B5341D]',
        },
        breakpoints: {
            1024: {
                perPage: 3,
            },
            767: {
                perPage: 3,
            },
            640: {
                perPage: 1,
            },
        },
        gap: "30px",
        pagination: false,

    }).mount();
});