
var selector = '#cus-faq-sec .vc_tta-panel';
$('#cus-faq-sec .vc_tta-panel:nth-child(1)').addClass('active_faq');

$(selector).on('click', function() {
  var $this = $(this);
  
  if ($this.hasClass('active_faq')) {
    $this.removeClass('active_faq');
    $this.find('.vc_tta-panel-body').slideUp();
  } else {
    $(selector).removeClass('active_faq');
    $this.addClass('active_faq');
    $this.find('.vc_tta-panel-body').slideDown();
  }
});


// // homeslider images animation js
var $=jQuery;
jQuery(document).ready(function () {
  //Items
  var $card_box = $(".card_box");
  var $container_slider_1 = $(".container_slider_1");

  var $card_box_2 = $(".card_box_2");
  var $container_slider_2 = $(".container_slider_2");

  var $card_box_3 = $(".card_box_3");
  var $container_slider_3 = $(".container_slider_3");

  var $card_box_4 = $(".card_box_4");
  var $container_slider_4 = $(".container_slider_4");

  var $card_box_5 = $(".card_box_5");
  var $container_slider_5 = $(".container_slider_5");


  var $bike = $(".bike img");
  var $bike2 = $(".bike2 img");
  var $bike3 = $(".bike3 img");
  var $bike4 = $(".bike4 img");
  var $bike5 = $(".bike5 img");
  var $bike6 = $(".bike6 img");
  var $bike7 = $(".bike7 img");
  var $bike8 = $(".bike8 img");

  var $slide_2_img1 = $(".slide_2_img1 img");
  var $slide_2_img2 = $(".slide_2_img2 img");
  var $slide_2_img3 = $(".slide_2_img3 img");
  var $slide_2_img4 = $(".slide_2_img4 img");
  var $slide_2_img5 = $(".slide_2_img5 img");
  var $slide_2_img6 = $(".slide_2_img6 img");
  var $slide_2_img7 = $(".slide_2_img7 img");
  var $slide_2_img8 = $(".slide_2_img8 img");
  var $slide_2_img9 = $(".slide_2_img9 img");

  var $slide_3_img1 = $(".slide_3_img1 img");
  var $slide_3_img2 = $(".slide_3_img2 img");
  var $slide_3_img3 = $(".slide_3_img3 img");
  var $slide_3_img4 = $(".slide_3_img4 img");
  var $slide_3_img5 = $(".slide_3_img5 img");

  var $slide_4_img1 = $(".slide_4_img1 img");
  var $slide_4_img2 = $(".slide_4_img2 img");
  var $slide_4_img3 = $(".slide_4_img3 img");
  var $slide_4_img4 = $(".slide_4_img4 img");
  var $slide_4_img5 = $(".slide_4_img5 img");
  var $slide_4_img6 = $(".slide_4_img6 img");
  var $slide_4_img7 = $(".slide_4_img7 img");

  var $slide_5_img1 = $(".slide_5_img1 img");
  var $slide_5_img2 = $(".slide_5_img2 img");
  var $slide_5_img3 = $(".slide_5_img3 img");
  var $slide_5_img4 = $(".slide_5_img4 img");
  var $slide_5_img5 = $(".slide_5_img5 img");
  var $slide_5_img6 = $(".slide_5_img6 img");


  //Moving Animation Event
  $container_slider_1.on("mousemove", function (e) {
    let xAxis = (window.innerWidth / 2 - e.clientX) / 25;
    let yAxis = (window.innerHeight / 2 - e.clientY) / 25;
    $card_box.css("transform", `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`);
  });
  $container_slider_2.on("mousemove", function (e) {
    let xAxis = (window.innerWidth / 2 - e.clientX) / 25;
    let yAxis = (window.innerHeight / 2 - e.clientY) / 25;
    $card_box_2.css("transform", `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`);
  });
  $container_slider_3.on("mousemove", function (e) {
    let xAxis = (window.innerWidth / 2 - e.clientX) / 25;
    let yAxis = (window.innerHeight / 2 - e.clientY) / 25;
    $card_box_3.css("transform", `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`);
  });
  $container_slider_4.on("mousemove", function (e) {
    let xAxis = (window.innerWidth / 2 - e.clientX) / 25;
    let yAxis = (window.innerHeight / 2 - e.clientY) / 25;
    $card_box_4.css("transform", `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`);
  });
  $container_slider_5.on("mousemove", function (e) {
    let xAxis = (window.innerWidth / 2 - e.clientX) / 25;
    let yAxis = (window.innerHeight / 2 - e.clientY) / 25;
    $card_box_5.css("transform", `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`);
  });


  //Animate on Hover
  $container_slider_1.hover(function () {
    $card_box.toggleClass("has-transform");
    $bike.toggleClass("has-transform");
    $bike2.toggleClass("has-transform");
    $bike3.toggleClass("has-transform");
    $bike4.toggleClass("has-transform");
    $bike5.toggleClass("has-transform");
    $bike6.toggleClass("has-transform");
    $bike7.toggleClass("has-transform");
    $bike8.toggleClass("has-transform");
  });
  $container_slider_2.hover(function () {
    $card_box_2.toggleClass("has-transform");
    $slide_2_img1.toggleClass("has-transform");
    $slide_2_img2.toggleClass("has-transform");
    $slide_2_img3.toggleClass("has-transform");
    $slide_2_img4.toggleClass("has-transform");
    $slide_2_img5.toggleClass("has-transform");
    $slide_2_img6.toggleClass("has-transform");
    $slide_2_img7.toggleClass("has-transform");
    $slide_2_img8.toggleClass("has-transform");
    $slide_2_img9.toggleClass("has-transform");
  });

  $container_slider_3.hover(function () {
    $card_box_3.toggleClass("has-transform");
    $slide_3_img1.toggleClass("has-transform");
    $slide_3_img2.toggleClass("has-transform");
    $slide_3_img3.toggleClass("has-transform");
    $slide_3_img4.toggleClass("has-transform");
    $slide_3_img5.toggleClass("has-transform");
  });
  
  $container_slider_4.hover(function () {
    $card_box_4.toggleClass("has-transform");
    $slide_4_img1.toggleClass("has-transform");
    $slide_4_img2.toggleClass("has-transform");
    $slide_4_img3.toggleClass("has-transform");
    $slide_4_img4.toggleClass("has-transform");
    $slide_4_img5.toggleClass("has-transform");
    $slide_4_img6.toggleClass("has-transform");
    $slide_4_img7.toggleClass("has-transform");
  });

  $container_slider_5.hover(function () {
    $card_box_5.toggleClass("has-transform");
    $slide_5_img1.toggleClass("has-transform");
    $slide_5_img2.toggleClass("has-transform");
    $slide_5_img3.toggleClass("has-transform");
    $slide_5_img4.toggleClass("has-transform");
    $slide_5_img5.toggleClass("has-transform");
    $slide_5_img6.toggleClass("has-transform");
  });

  //Pop Back on mouseleave
  $container_slider_1.on("mouseleave", function () {
    $card_box.css("transform", `rotateY(0deg) rotateX(0deg)`);
  });

  $container_slider_2.on("mouseleave", function () {
    $card_box_2.css("transform", `rotateY(0deg) rotateX(0deg)`);
  });

  $container_slider_3.on("mouseleave", function () {
    $card_box_3.css("transform", `rotateY(0deg) rotateX(0deg)`);
  });

  $container_slider_4.on("mouseleave", function () {
    $card_box_4.css("transform", `rotateY(0deg) rotateX(0deg)`);
  });

  $container_slider_5.on("mouseleave", function () {
    $card_box_5.css("transform", `rotateY(0deg) rotateX(0deg)`);
  });
});
// home slider animation js end 


jQuery(document).ready(function ($) {
  if (window.matchMedia('(max-width: 768px)').matches) {
    $('button#menu-toggler').on('click', function () {
      // Check if the navigation menu has the 'toggled' class
      if ($('nav#site-navigation').hasClass('toggled')) {
        // If the menu is toggled, show the primary-menu
        $('ul#primary-menu').css('opacity', '1');
        $('ul#primary-menu').css('visibility', 'visible');
        $('body').css('overflow', 'hidden');
      } else {
        // If the menu is not toggled, hide the primary-menu
        $('ul#primary-menu').css('opacity', '0');
        $('ul#primary-menu').css('visibility', 'hidden');
        $('body').css('overflow', 'auto');
      }
    });
  }
});

jQuery(function () {
  new WOW().init();
});



// ********************************************************* //
// MAIN MENU fixed and sticky JQUERY START HERE //
// ********************************************************* //
    // jQuery(window).on('scroll', function() {
    //   var scroll = jQuery(window).scrollTop();
    
    //   if (scroll >= 150) {
        
    // //jQuery(".custom_header_3456").removeClass("animate__animated")
    //  // jQuery(".custom_header_3456").removeClass("animate__fadeOutUp")

    //  // jQuery(".custom_header_3456").addClass("animate__animated")
    //   //jQuery(".custom_header_3456").addClass("animate__fadeInDown")
      
    //    // jQuery(".custom_header_3456").css("position", "fixed");
    //     /*jQuery(".site-branding a img").css({
    //       'transition' : 'all 0.4s ease-in-out',
    //       'width' : '100px',
    //       'height' : '43px'
    //    });*/
    //   } else {

        
    //   //jQuery(".custom_header_3456").removeClass("animate__animated")
    //   //jQuery(".custom_header_3456").removeClass("animate__fadeInDown")

    //   //jQuery(".custom_header_3456").addClass("animate__animated")
    //   //jQuery(".custom_header_3456").addClass("animate__fadeOutUp")
        
    //     //jQuery(".custom_header_3456").addClass("animate__fadeOutUp")
    //     //jQuery(".custom_header_3456").removeClass("animate__fadeInDown")
    //     //jQuery(".custom_header_3456").css("position", "sticky");
    //     //jQuery(".custom_header_3456").css("top", "");
    //   /*  jQuery(".site-branding a img").css({
    //       'transition' : 'all 0.4s ease-in-out',
    //       'width' : '125px',
    //       'height' : '50px'
    //    });*/
    //   }
    // });


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

$(window).scroll(function () {
  if ($(this).scrollTop()) {
    $('#bottom_to_Top').fadeIn();
  } else {
    $('#bottom_to_Top').fadeOut();
  }
});

$("#bottom_to_Top").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 500);
});


// **************************************** //
      //  BACK TO TOP JQUERY END  //
// *************************************** //


