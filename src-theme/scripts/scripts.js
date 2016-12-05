$(window).on('load',function() {

  var $body = 'header, #page, footer';
  var tailleEcranX = window.screen.width;
  var tailleEcranY = window.screen.height;
  // alert('x:'+tailleEcranX+' y:'+tailleEcranY);
  if(tailleEcranY>530 ){

// ----------------------------FADE-IN-OUT--------------------------------
 
    $($body).animate({opacity: 1}, 1000, "easeInExpo");
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
    
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1500; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed , "easeInOutCubic" ); // Go
        return false;
    });

// ----------------------------WOW JS--------------------------------
    
    new WOW().init();

// ----------------------------ELSE OLD MOBILE--------------------------------
        
  }else{

  }   
  
});

