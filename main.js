$(document).ready(function() {
	
    /***** Scroll to Top ****/

    scrollToTop = function(){
        $("html , body ").animate({
            scrollTop: 0
            
        }, 700);   
        // scroll στην κορυφή της σελίδας με μια smooth
        // ανελκυστική κίνηση διάρκειας 700 ms.

    };

     /***** Scroll to next  ****/
     $('.scroll_to_next').click (function() {
        $('html, body').animate({scrollTop: $('.hero-banner + section').offset().top }, 500 ,'linear');
        return false;
      });

    /***** Fade Header When I scroll Down   ****/
      $(window).scroll(function () {
        if ($(this).scrollTop() < 80) {
            $('.header').fadeIn(500); //500ms
        } else {
            $('.header').fadeOut(500);
        }
    });

    



});