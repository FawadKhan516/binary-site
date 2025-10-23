
$(document).ready(function () {
  $(".portfolio-slider").slick({
    infinite: true,
    autoplay: true,
    centerPadding: "0px",
    centerMode: true,
    dots: true,
    arrows:false,
    autoplaySpeed: 1500,
    speed: 1000,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          centerPadding: "30px",
          dots: true,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          autoplay: true,
          slidesToScroll: 1,
        },
      },
    ],
  });
// Pricing Slider 
  $("#pricing_slider").slick({

    dots: true,

    arrows: false,

    autoplay: false,

    infinite: true,

    adaptiveHeight: false,

    mobileFirst: true,

    slidesToShow: 3,

    slidesToScroll: 1,

    speed: 1800,

    centerMode: true,

    nextArrow:

      '<div class="arrow-right"><i class="ri-arrow-right-line"></i></div>',

    prevArrow:

      '<div class="arrow-left"><i class="ri-arrow-left-line"></i></div>',

    responsive: [

      {

        breakpoint: 1280,

        settings: {

          slidesToShow: 3,

          slidesToScroll: 1,

        },

      },

      {

        breakpoint: 1000,

        settings: {

          slidesToShow: 2,

          slidesToScroll: 1,

        },

      },

      {

        breakpoint: 850,

        settings: {

          slidesToShow: 2,

          slidesToScroll: 1,

        },

      },

      {

        breakpoint: 600,

        settings: {

          slidesToShow: 1,

          slidesToScroll: 1,

          arrows: false,

        },

      },

      {

        breakpoint: 300,

        settings: {

          slidesToShow: 1,

          slidesToScroll: 1,

          arrows: false,

        },

      },

    ],

  });

  $(".testiNew").slick({

    infinite: true,

    slidesToShow: 3,

    slidesToScroll: 1,

    draggable: true,

    centerMode: true,

    autoplay: true,

    speed: 800,

    centerPadding: "0px",

    dots: false,

    arrows: false,

    responsive: [

      {
        breakpoint: 1025,

        settings: {

          slidesToShow: 2,

          centerPadding: "0px",

          slidesToScroll: 1,

        },

      },
      {

        breakpoint: 992,

        settings: {

          slidesToShow: 1,

          centerPadding: "0px",

          slidesToScroll: 1,

        },

      },

      {

        breakpoint: 768,

        settings: {

          slidesToShow: 1,

          centerPadding: "0px",

          slidesToScroll: 1,

        },

      },

    ],

  });
  $(".testiNew2").slick({

    infinite: true,

    slidesToShow: 4,

    slidesToScroll: 1,

    draggable: true,

    // centerMode: true,

    autoplay: true,

    speed: 800,

    centerPadding: "0px",

    dots: false,

    arrows: false,

    responsive: [
      {
        breakpoint: 1025,

        settings: {

          slidesToShow: 2,

          centerPadding: "0px",

          slidesToScroll: 1,

        },

      },

      {

        breakpoint: 992,

        settings: {

          slidesToShow: 1,

          centerPadding: "0px",

          slidesToScroll: 1,

        },

      },

      {

        breakpoint: 768,

        settings: {

          slidesToShow: 1,

          centerPadding: "0px",

          slidesToScroll: 1,

        },

      },

    ],

  });
  if ($(".counter").length > 0) {

    var t = 0;

    $(window).scroll(function () {

      var e = $(".counter-box").offset().top - window.innerHeight;

      0 == t &&

        $(window).scrollTop() > e &&

        ($(".counter").each(function () {

          var e = $(this),

            i = e.attr("data-number");

          $({ countNum: e.text() }).animate(

            { countNum: i },

            {

              duration: 2e3,

              easing: "swing",

              step: function () {

                e.text(Math.ceil(this.countNum));

              },

              complete: function () {

                e.text(Math.ceil(this.countNum));

              },

            }

          );

        }),

        (t = 1));

    });

  }
});
// function customAnimation() {
//   console.log($(window).width());
//   $(window).width() <= 767

//     ? $(".ani-a").removeClass("animated")

//     : $(".ani-a").each(function () {

//         var e = $(this).offset().top,

//           i = $(this).offset().top + $(this).outerHeight(),

//           t = $(window).scrollTop() + $(window).innerHeight(),

//           o = $(window).scrollTop();

//         t > e && o < i

//           ? $(this).addClass("animated")

//           : $(this).removeClass("animated");

//       });

// }
function customAnimation() {
  const windowWidth = $(window).width();
  // console.log("Window Width:", windowWidth);

  // Stop animation for screens 767px or smaller
  if (windowWidth <= 768) {
    $(".ani-a").removeClass("animated");
    return; // Exit the function
  }

  // Add or remove animation for larger screens
  $(".ani-a").each(function () {
    const elementTop = $(this).offset().top;
    const elementBottom = $(this).offset().top + $(this).outerHeight();
    const viewportBottom = $(window).scrollTop() + $(window).innerHeight();
    const viewportTop = $(window).scrollTop();

    if (viewportBottom > elementTop && viewportTop < elementBottom) {
      $(this).addClass("animated");
    } else {
      $(this).removeClass("animated");
    }
  });
}


  // (window.onload = function () {

  //   customAnimation();

  // }),

  // $(window).on("scroll", function () {

  //   customAnimation();

  // });

  
  window.addEventListener("load", customAnimation);

  window.addEventListener("scroll", customAnimation);
  $(function() {

  $(".globalForm").submit(function(event) {
    var formData = {
        name: $(this).find("#name").val(),
        email: $(this).find("#email").val(),
        phone: $(this).find("#phone").val(),
        message: $(this).find("#message").val(),
        packageCategory: $(this).find("#package-category").val(),
        packageName: $(this).find("#package-name").val(),
        packagePrice: $(this).find("#package-price").val(),
    };
    $(".globalForm").removeClass('active-from');
    $(this).addClass('active-from');

    $.ajax({
        type: "POST",
        url: "ajax/dmail.php",            
        data: formData,
    }).done(function(data) {
        // $(".active-from .header-status").show().html(data);

        // Resetting the form fields
        $('.active-from')[0].reset();
        
        // setTimeout(function() {
        //     $(".header-status").html(data).hide();
        // }, 5000);
        
        setTimeout(function() {
            $('body').removeClass('open-side-form');
        }, 2000);

        // Delay the redirection to thank-you.php by 3 seconds (3000 milliseconds)
        setTimeout(function() {
            window.location.href = "thank-you";
        }, 1000); // 3000 ms = 3 seconds
    });

    event.preventDefault();
});



});
  
