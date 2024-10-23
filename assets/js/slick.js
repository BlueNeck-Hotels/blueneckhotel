(function(loader) {

  window.addEventListener('beforeunload', function(e) {
    activateLoader();
  });

  window.addEventListener('load', function(e) {
    deactivateLoader();
  });

  // window.addEventListener('popstate', function(e) {
  //   activateLoader();
  //   window.addEventListener('load', function(e) {
  //     deactivateLoader();
  //   });
  // });

  function activateLoader() {
    loader.style.display = 'block';
    loader.style.opacity = 1;
  }

  function deactivateLoader() {
    // /**
    //  * ensures that the loading animation plays for at least a second to give the
    //  * appearance of seamless loading on pages that execute and load extremely
    //  * quickly (i.e., intranet pages)
    //  */
    setTimeout(function() {
      deactivate();
    }, 1000);

    function deactivate() {
      loader.style.opacity = 0;
      loader.addEventListener('transitionend',   function() {
        loader.style.display = 'none';
      }, false);
    }
  }

})(document.querySelector('.o-page-loader'));

  

  // ================slick==========================

  
  $(document).ready(function () {
    $('.product_slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true, // Enable autoplay
      autoplaySpeed: 2000, // Set autoplay speed in milliseconds
      dots: true,

      dots: true,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024, // If screen wid2158/*/67uyth is 1024px or less
          settings: {
            slidesToShow: 3, // Show 3 slides
            slidesToScroll: 3, // Scroll 3 slides
            infinite: true,
          }
        },
        {
          breakpoint: 768, // If screen width is 768px or less
          settings: {
            slidesToShow: 2, // Show 2 slides
            slidesToScroll: 2 // Scroll 2 slides
          }
        },
        {
          breakpoint: 480, // If screen width is 480px or less
          settings: {
            slidesToShow: 1, // Show 1 slide
            slidesToScroll: 1 // Scroll 1 slide
          }
        }
      ]
    });
  });

 
  

  $(document).ready(function () {
    $('.mobile-design').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 1,
      speed: 1000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: true,
      dots: true,
      focusOnSelect: false,
      cssEase: 'linear',
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            centerMode: true,
            centerPadding: '40px'
          }
        }
      ]
    });
  });

  $(document).ready(function () {
    $('.gallery').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 1,
      speed: 7000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      dots: false,
      focusOnSelect: false,
      cssEase: 'linear',
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            centerMode: true,
            centerPadding: '40px'
          }
        }
      ]
    });
  });

  $(document).ready(function () {
    $('.galleryOne').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 1,
      speed: 7000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      dots: false,
      focusOnSelect: false,
      cssEase: 'linear',
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            centerMode: true,
          }
        },

        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            centerMode: true,
          }
        },

        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            centerMode: true,
          }
        },
        {
          breakpoint: 390,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            centerMode: true,
          }
        },

        {
          breakpoint: 376,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            centerMode: true,
          }
        },
      ]
    });
  });

  $(document).ready(function () {
    $('.hostag-slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true, // Enable autoplay
      autoplaySpeed: 2000, // Set autoplay speed in milliseconds
    });
  });

  // ===============date-picker-focus===============
 
 
//   document.addEventListener('DOMContentLoaded', function() {
//     document.getElementById('yourdiv').addEventListener('click', function() {
//         document.getElementById('dp1').focus();
//     });

//     document.getElementById('yourdiv2').addEventListener('click', function() {
//         document.getElementById('dp2').focus();
//     });

//     document.getElementById('yourdiv3').addEventListener('click', function() {
//         document.getElementById('where').focus();
//     });
// });




$(document).ready(function () {
  $('.testimunial-slider').slick({
    infinite: true,
    speed: 700,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true, // Enable autoplay
    autoplaySpeed: 2000, // Set autoplay speed in milliseconds
    dots: false,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024, // If screen wid2158/*/67uyth is 1024px or less
        settings: {
          slidesToShow: 2, // Show 3 slides
          slidesToScroll: 3, // Scroll 3 slides
          infinite: true,
        }
      },
      {
        breakpoint: 768, // If screen width is 768px or less
        settings: {
          slidesToShow: 1 , // Show 2 slides
          slidesToScroll: 2 // Scroll 2 slides
        }
      },
      {
        breakpoint: 480, // If screen width is 480px or less
        settings: {
          slidesToShow: 1, // Show 1 slide
          slidesToScroll: 1 // Scroll 1 slide
        }
      }
    ]
  });
});


// ===================details-page============================

$(document).ready(function () {
  $('.photo-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true, // Enable autoplay
    autoplaySpeed: 2000, // Set autoplay speed in milliseconds
    dots: false,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024, // If screen wid2158/*/67uyth is 1024px or less
        settings: {
          slidesToShow: 2, // Show 3 slides
          slidesToScroll: 3, // Scroll 3 slides
          infinite: true,
        }
      },
      {
        breakpoint: 768, // If screen width is 768px or less
        settings: {
          slidesToShow: 2, // Show 2 slides
          slidesToScroll: 2 // Scroll 2 slides
        }
      },
      {
        breakpoint: 480, // If screen width is 480px or less
        settings: {
          slidesToShow: 1, // Show 1 slide
          slidesToScroll: 1 // Scroll 1 slide
        }
      }
    ]
  });
});