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

// ------------------------AJAX---------------------------


// ----------------------------SMOOTH SCROLL--------------------------------
    
    $('.js-scrollTo').on('click', function(evt) { // Au clic sur un élément
        var page = $(this).attr('target'); // Page cible
        var direction = 1;
        if( page=='prev')
          direction = -1;
        // console.log(evt);
        evt.detail = direction*3;
        evt.deltaY = -direction;
        evt.wheelDelta = -direction*120;
        parallaxScroll(evt);
        // var speed = 1500; // Durée de l'animation (en ms)
        // $('html, body').animate( { scrollTop: $(page).offset().top }, speed , "easeInOutCubic" ); // Go
        // return false;
    });
    // window.addEventListener("touchmove", function(evt){
    //     evt.preventDefault() 
    //     var direction = 1;
    //     evt.detail = direction*3;
    //     evt.deltaY = -direction;
    //     evt.wheelDelta = -direction*120;

    //     // alert('taagle');
    //     // console.log('taagle');
    //     console.log('evt', evt);
    //     parallaxScroll(evt);
    // }, false)

// ----------------------------WOW JS--------------------------------
    
    new WOW().init();

// ----------------------------ELSE OLD MOBILE--------------------------------
        
  }else{

  }   
  
});

