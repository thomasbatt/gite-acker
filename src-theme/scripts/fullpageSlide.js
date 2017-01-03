// ------------- VARIABLES ------------- //
var ticking = false;
var isFirefox = (/Firefox/i.test(navigator.userAgent));
var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive) 
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background").length;


$.fn.detectScroll = function(func){
    return this.each(function(){
        var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
        if(typeof func == 'function')
          this.addEventListener(mousewheelEvent, func, false);
    });
}

$.fn.detectSwipe = function(func){
    return this.each(function(){
        // console.log('taagle');    
        swipe_det = new Object();
        swipe_det.sX = 0;
        swipe_det.sY = 0;
        swipe_det.eX = 0;
        swipe_det.eY = 0;
        var min_x = 20;  //min x swipe for horizontal swipe
        var max_x = 40;  //max x difference for vertical swipe
        var min_y = 40;  //min y swipe for vertical swipe
        var max_y = 50;  //max y difference for horizontal swipe
        var direc = "";
        this.addEventListener('touchstart',function(e){
          var t = e.touches[0];
          swipe_det.sX = t.screenX; 
          swipe_det.sY = t.screenY;
        },false);
        this.addEventListener('touchmove',function(e){
          e.preventDefault();
          var t = e.touches[0];
          swipe_det.eX = t.screenX; 
          swipe_det.eY = t.screenY;
        },false);
        this.addEventListener('touchend',function(e){
          //horizontal detection
          if ((((swipe_det.eX - min_x > swipe_det.sX) || (swipe_det.eX + min_x < swipe_det.sX)) && ((swipe_det.eY < swipe_det.sY + max_y) && (swipe_det.sY > swipe_det.eY - max_y)))) {
            if(swipe_det.eX > swipe_det.sX) direc = "r";
            else direc = "l";
          }
          //vertical detection
          if ((((swipe_det.eY - min_y > swipe_det.sY) || (swipe_det.eY + min_y < swipe_det.sY)) && ((swipe_det.eX < swipe_det.sX + max_x) && (swipe_det.sX > swipe_det.eX - max_x)))) {
            if(swipe_det.eY > swipe_det.sY) direc = "d";
            else direc = "u";
          }

          if (direc != "") {
            if(typeof func == 'function') func(direc);
          }
          direc = "";
        },false);  
    });
}

$.fn.noVisibleFade = function(idSlide){
    return this.each(function(){
        var $currentSlide = $(".background").eq(currentSlideNumber);
        if ( $currentSlide.attr('id') == idSlide)
          $(this).removeClass("visible transition-slow").addClass("no-visible transition-fast");
        else 
          $(this).removeClass("no-visible transition-fast").addClass("visible transition-slow");
    });
}

// ------------- SLIDE MOTION ------------- //
function nextItem() {
  var $previousSlide = $(".background").eq(currentSlideNumber - 1);
  $previousSlide.removeClass("up-scroll no-display").addClass("down-scroll");
  var $currentSlide = $(".background").eq(currentSlideNumber);
  $currentSlide.removeClass("no-visible");
}

function previousItem() {
  var $currentSlide = $(".background").eq(currentSlideNumber);
  $currentSlide.removeClass("down-scroll").addClass("up-scroll");
}


function scaleCurrentSlideMenu() {
  $('a.js-scrollTo').removeClass('scale');
  var selectorSlider = 'a[data-target="'+currentSlideNumber+'"].js-scrollTo';
  $(selectorSlider).addClass('scale');
}

function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}
