jQuery(document).ready(function($) {
    $('html').removeClass('no-js');

  scrollToTop();
  animatedCss();

    function scrollToTop() {
      // Scroll (in pixels) after which the "To Top" link is shown
      var offset = 300,
        //Scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //Duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //Get the "To Top" link
        $back_to_top = $('.to-top');

      //Visible or not "To Top" link
      $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('top-is-visible') : $back_to_top.removeClass('top-is-visible top-fade-out');
        if( $(this).scrollTop() > offset_opacity ) { 
          $back_to_top.addClass('top-fade-out');
        }
      });

      //Smoothy scroll to top
      $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body, html').animate({
          scrollTop: 0 ,
          }, scroll_top_duration
        );
      });

      //Smooth scrolling of hash
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });

    }

    function animatedCss() {

        jQuery('.slidesDown').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInDown',
          offset: 100
        });

        jQuery('.slidesFadeIn').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeIn',
          offset: 100
        });

        jQuery('.slidesFlip').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated flipInX',
          offset: 100
        });

    }

    //parallax on works page
    function parallax(){
      var scrolled = $(window).scrollTop();
      $('.header-section').css('backgroundPositionY', -(scrolled * 1.1) + 'px');

    }

    $(window).scroll(function(e){
      parallax();
    });

});








