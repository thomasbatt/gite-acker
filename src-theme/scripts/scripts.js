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
    
    function initDirection(evt,direction){
        if(direction==='down')
          var d = -1;
        else if(direction==='up')
          var d = 1;
        evt.detail = d*3;
        evt.deltaY = -d;
        evt.wheelDelta = -d*120;
        return evt;
    }

    function parallaxTouch(el,d){
        evt = new Object();
        var direction ;
        if (d == 'u')
            direction = 'up';
        else if (d == 'd')
            direction = 'down';
        evt = initDirection(evt,direction);
        parallaxScroll(evt);
    }
       
    function loopParallaxScroll(direction,n) {
        evt = new Object();
        evt = initDirection(evt,direction);
        var slideDuration = 0;
        while ( n != 0){
            setTimeout(function() {
                ticking = false;
                parallaxScroll(evt);
            }, slideDuration);
            slideDuration += slideDurationSetting/2;
            if (n>0 && direction==='up') 
              n--;
            if (n<0 && direction==='down') 
              n++;
        }
    }

    function parallaxTarget(targetSlideNumber){
        var n = targetSlideNumber - currentSlideNumber;
        if ( n>0 )
          loopParallaxScroll('up',n);
        else if ( n<0 )
          loopParallaxScroll('down',n);
    }

    $('.js-scrollTo').on('click', function(evt) { // Au clic sur un élément
        var targetSlideNumber = $(this).attr('data-target'); // Page cible
        if( targetSlideNumber =='next')
            targetSlideNumber = currentSlideNumber + 1;
        parallaxTarget(targetSlideNumber);
    });

    detectScroll('body',parallaxScroll);
    detectSwipe('page',parallaxTouch);

// ----------------------------WOW JS--------------------------------
    
    new WOW().init();

// ----------------------------ELSE OLD MOBILE--------------------------------
        
  }else{

  }   
  
});

