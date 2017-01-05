$(window).on('load',function() {

  var $body = 'header, #page, footer';
  var tailleEcranX = window.screen.width;
  var tailleEcranY = window.screen.height;
  // alert('x:'+tailleEcranX+' y:'+tailleEcranY);
  if(tailleEcranY>530 ){

// ----------------------------FADE-IN-OUT--------------------------------
 
    $($body).animate({opacity: 1}, 1000, "easeInExpo");
    $('a').not('a[data-fade="false"]').click( function(e) {
        e.preventDefault();
        var $urlToLoad = this.href;
        $($body).animate({opacity: 0}, 1000, "easeInExpo", function() {
            window.location = $urlToLoad;
        });
    });
  }
  else{
    $($body).css({opacity: 1});
  }
});


$('document').ready(function(){ 

  var $body = 'header, #page, footer';
  var tailleEcranX = window.screen.width;
  var tailleEcranY = window.screen.height;
    // alert('x:'+tailleEcranX+' y:'+tailleEcranY);
  if(tailleEcranY>530 ){


// ----------------------------SMOOTH SCROLL--------------------------------
    
    function parallaxMove(direction) {
      if (ticking != true) {
          ticking = true;
          if (direction==='down' && currentSlideNumber !== totalSlideNumber - 1) {
            currentSlideNumber++;
            nextItem();
          }
          else if (direction==='up' && currentSlideNumber !== 0) {
            currentSlideNumber--;
            previousItem();
          }
        slideDurationTimeout(slideDurationSetting);
      }
      scaleCurrentSlideMenu();
      $(".footer-scrolldown-arrow").noVisibleFade("contact");
      $("a[data-target=0]").noVisibleFade("accueil");
    }

    // ------------- ADD EVENT LISTENER ------------- //
    $('body').detectScroll( parallaxMove );
    $('section').detectSwipe( parallaxMove );

       
    // ------------- ADD EVENT CLICK ------------- //
    function loopParallaxMove(direction,n) {
        var slideDuration = 0;
        while ( n != 0){
            setTimeout(function() {
                ticking = false;
                parallaxMove(direction);
            }, slideDuration);
            slideDuration += slideDurationSetting/2;
            if (n>0 && direction==='down') 
              n--;
            else if (n<0 && direction==='up') 
              n++;
        }
    }

    function parallaxTarget(targetSlideNumber){
        var n = targetSlideNumber - currentSlideNumber;
        if ( n>0 )
          loopParallaxMove('down',n);
        else if ( n<0 )
          loopParallaxMove('up',n);
    }

    $('.js-scrollTo').on('click', function(evt) { 
        var targetSlideNumber = $(this).attr('data-target');
        if( targetSlideNumber =='next')
            targetSlideNumber = currentSlideNumber + 1;
        parallaxTarget(targetSlideNumber);
    });


// ----------------------------WOW JS--------------------------------
    
    new WOW().init();

// ------------------------------MODAL--------------------------------
    $('.js-open-legales').click(function(e){
        e.preventDefault();
        $('.legales').fadeIn();
    });
    $('.modal').click(function(e){
        e.preventDefault();
        $('.legales').fadeOut();
    });

// ----------------------------ELSE OLD MOBILE--------------------------------
        
  }else{

  }   
  
});

