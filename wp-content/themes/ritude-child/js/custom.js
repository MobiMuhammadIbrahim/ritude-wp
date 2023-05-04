// header menu class add in li navigation 
$(document).ready(function ($) {
  $("nav#site-navigation ul#primary-menu li").click(function () {
    $('nav#site-navigation ul#primary-menu li.menu-item-has-children.focus ul.sub-menu').show();
  });
});

jQuery(function () {
  new WOW().init();
});

// ********************************************************* //
// MAIN MENU SLIDER JQUERY START HERE //
// ********************************************************* //
// header menu fixed js code 
jQuery(window).scroll(function ($) {
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 150) {
    jQuery(".custom_header_3456").addClass("fixed");
  } else {
    jQuery(".custom_header_3456").removeClass("fixed");
  }
});
$(document).ready(function () {
  $("#menu-toggler").click(function () {
    // setTimeout(() => {
      if ($("#masthead nav.navbar").hasClass("toggled")) {
        $(".custom_header_3456.fixed").css("top", "0");
        $(".custom_header_3456.fixed").css("bottom", "0");
      }else {
        $(".custom_header_3456.fixed").css("top", "unset");
        $(".custom_header_3456.fixed").css("bottom", "unset");
      }
    // }, 1000); 
  });
})

// console.log($("#masthead nav.navbar").hasClass("toggled"));
// $(".custom_header_3456.fixed").css("top", "0px");
// $(".custom_header_3456.fixed").css("bottom", "0px");


// Toggle menu on click
document.querySelector('#menu-toggler').addEventListener('click', (e) => {
  toggleBodyClass('menu-active');
});

function toggleBodyClass(className) {
  document.body.classList.toggle(className);
}

// ********************************************************* //
// MAIN MENU SLIDER JQUERY END HERE //
// ********************************************************* //




// ********************************************************* //
// HOME SLIDER SLIDER JQUERY START HERE //
// ********************************************************* //


jQuery(document).ready(function ($) {
  $('#home-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fas fa-angle-left"></i>',
    nextArrow: '<i class="fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 600,
      settings: {
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
});


// ********************************************************* //
// HOME SLIDER JQUERY END HERE //
// ********************************************************* //





// ********************************************************* //
// HOME COMMUNITY SLIDER JQUERY START HERE //
// ********************************************************* //

jQuery(document).ready(function ($) {
  $('#community').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fas fa-angle-left"></i>',
    nextArrow: '<i class="fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 600,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
});



// ********************************************************* //
// HOME COMMUNITY SLIDER JQUERY END HERE //
// ********************************************************* //




// ********************************************************* //
// HOME PARTNERS SLIDER JQUERY START HERE //
// ********************************************************* //


jQuery(document).ready(function ($) {
  $('#our-partners').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fas fa-angle-left"></i>',
    nextArrow: '<i class="fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 600,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }]
  });
});



// ********************************************************* //
// HOME PARTNERS SLIDER JQUERY END HERE //
// ********************************************************* //

// ********************************************************* //
// HOME distributionplatform SLIDER JQUERY START HERE //
// ********************************************************* //


jQuery(document).ready(function ($) {
  $('#distributionplatform').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fas fa-angle-left"></i>',
    nextArrow: '<i class="fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 600,
      settings: {
        arrows: false,
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }]
  });
});



// ********************************************************* //
// HOME distributionplatform SLIDER JQUERY END HERE //
// ********************************************************* //

// ********************************************************* //
//FEATURED ARTIST SLIDER JQUERY START HERE //
// ********************************************************* //


jQuery(document).ready(function ($) {
  $('#featured-artist').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fas fa-angle-left"></i>',
    nextArrow: '<i class="fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 600,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }]
  });
});



// ********************************************************* //
//FEATURED ARTIST SLIDER JQUERY END HERE //
// ********************************************************* //



// ********************************************************* //
//FEATURED ARTIST SLIDER JQUERY START HERE //
// ********************************************************* //


jQuery(document).ready(function ($) {
  $('#our-testimonials').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fas fa-angle-left"></i>',
    nextArrow: '<i class="fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 600,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
});



// ********************************************************* //
//FEATURED ARTIST SLIDER JQUERY END HERE //
// ********************************************************* //



// ********************************************************* //
// FANCY BOX JQUERY START HERE //
// ********************************************************* //

jQuery(document).ready(function () {
  // add all to same gallery
  jQuery(".specializing-video a, .client-testimonials .video-thumbnail a").attr("data-fancybox", "mygallery");
  // assign captions and title from alt-attributes of images:
  jQuery(".specializing-video a, .client-testimonials .video-thumbnail a").each(function () {
    jQuery(this).attr("data-caption", jQuery(this).find("img").attr("alt"));
    jQuery(this).attr("title", jQuery(this).find("img").attr("alt"));
  });
  // start fancybox:
  jQuery(".specializing-video a, .client-testimonials .video-thumbnail a").fancybox();
});


// ********************************************************* //
// FANCY BOX JQUERY END HERE //
// ********************************************************* //



// ****************************************** //
//  ADD CLASS HEADING START  //
// ***************************************** //


jQuery(function () {
  jQuery("a").ready(function () {
    jQuery(this).find(".vc_btn3").addClass("red-btn");
  });
});


// **************************************** //
//  ADD CLASS HEADING END  //
// *************************************** //

// **************************************** //
//  BACK TO TOP JQUERY START  //
// *************************************** //


var height = $(window).height();
$('#top').css('top', height - 0);
$(window).scroll(function () {
  var scroll = $(document).scrollTop();
  $('#top').stop().animate({
    top: height + scroll - 90
  }, 400);
});

$('#top').click(function () {
  $('body').stop().animate({
    scrollTop: 0
  }, 300);
});

// **************************************** //
      //  BACK TO TOP JQUERY END  //
// *************************************** //


