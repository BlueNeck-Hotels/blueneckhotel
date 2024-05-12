
$(document).ready(function () {
  $('.product_slider , .categorey_slider').slick({

    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});


$(document).ready(function () {
    $('.testimonial_slider').slick({

      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      // responsive: [
      //   {
      //     breakpoint: 1024,
      //     settings: {
      //       slidesToShow: 3,
      //       slidesToScroll: 3,
      //       infinite: true,
      //     }
      //   },
      //   {
      //     breakpoint: 600,
      //     settings: {
      //       slidesToShow: 2,
      //       slidesToScroll: 2
      //     }
      //   },
      //   {
      //     breakpoint: 480,
      //     settings: {
      //       slidesToShow: 1,
      //       slidesToScroll: 1
      //     }
      //   }
      //   // You can unslick at a given breakpoint now by adding:
      //   // settings: "unslick"
      //   // instead of a settings object
      // ]
    });
  });


  $(document).ready(function () {
    $('.').slick({

      infinite: true,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 376,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  });
  

  
$('.company_slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1,
    speed: 6000,
    pauseOnHover: false,
    pauseOnFocus: false,
    arrows: false,
    dots: false,
    focusOnSelect: false,
    cssEase: 'linear',
    mobileFirst: true,

    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 450,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 270,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});



