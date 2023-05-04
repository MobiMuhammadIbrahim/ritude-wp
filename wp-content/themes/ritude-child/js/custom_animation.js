//blue-borderline-animate-section animation js

jQuery(document).ready(function($) {
    
    function isOnScreen(elem) {
        if( elem.length == 0 ) {
            return;
        }
        var $window = jQuery(window)
        var viewport_top = $window.scrollTop()
        var viewport_height = $window.height()
        var viewport_bottom = viewport_top + viewport_height
        var $elem = jQuery(elem)
        var top = $elem.offset().top
        var height = $elem.height()
        var bottom = top + height

        return (top >= viewport_top && top < viewport_bottom) ||
        (bottom > viewport_top && bottom <= viewport_bottom) ||
        (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
    }

    window.addEventListener('scroll', function(e) {
        if( isOnScreen( jQuery( '.blue-borderline-animate-sec' ) ) ) { 
            $(".blue-borderline-animate-sec").addClass("in-view in-view--partial in-view--top"); 
        } 
        if( isOnScreen( jQuery( '.blue-borderline-animate-sec' ) ) ) { 
            $(".blue-borderline-animate-sec").addClass("in-view--cover");
        } 
        if( isOnScreen( jQuery( '.blue-borderline-animate-sec' ) ) ) { 
            $(".webprod-process__step--1").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__step--1' ) ) ) { 
            $(".webprod-process__step--1").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__illustration--1").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__illustration--1' ) ) ) { 
            $(".webprod-process__illustration--1").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__step--2").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__step--2' ) ) ) { 
            $(".webprod-process__step--2").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__illustration--2").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__illustration--2' ) ) ) { 
            $(".webprod-process__illustration--2").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__step--3").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__step--3' ) ) ) { 
            $(".webprod-process__step--3").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__illustration--3").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__illustration--3' ) ) ) { 
            $(".webprod-process__illustration--3").addClass("in-view--whole in-view--bottom");  
            $(".webprod-process__step--4").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__step--4' ) ) ) { 
            $(".webprod-process__step--4").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__illustration--4").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__illustration--4' ) ) ) { 
            $(".webprod-process__illustration--4").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__step--5").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__step--5' ) ) ) { 
            $(".webprod-process__step--5").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__illustration--6").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__illustration--6' ) ) ) { 
            $(".webprod-process__illustration--6").addClass("in-view--whole in-view--bottom");
            $(".webprod-process__step--6").addClass("in-view in-view--partial in-view--top");
        } 
        if( isOnScreen( jQuery( '.webprod-process__step--6' ) ) ) { 
            $(".webprod-process__step--6").addClass("in-view--whole in-view--bottom");
        }
  
    });


});