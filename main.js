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

    /***** autoplay Sound(video)  ****/

    var sound = $('.sound-file')[0];
    var video = $('.video-upload')[0];
    var videoTop = $('.video-file').offset().top;
    var videoBottom = videoTop + $('.video-file').height();
    var maxVolume = sound.volume;

    // Ακούστε το συμβάν scroll και το συμβάν resize.
    $(window).on('scroll resize', function() {
        var windowHeight = $(window).height();
        var windowTop = $(window).scrollTop();
        var windowBottom = windowTop + windowHeight;

        if (videoTop < windowBottom && videoBottom > windowTop) {
            // Αν το video είναι εντός της οθόνης, ξεκινήστε τον ήχο.
            sound.volume = maxVolume;
            video.play(); // Ξεκινήστε το video.
        } else {
            // Όταν το video δεν είναι εντός της οθόνης, σταματήστε τον ήχο.
            sound.volume = 0;
            video.pause(); // Σταματήστε το video.
        }
    });

  


    
});
