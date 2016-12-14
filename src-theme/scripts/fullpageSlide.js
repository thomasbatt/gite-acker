// ------------- VARIABLES ------------- //
var ticking = false;
var isFirefox = (/Firefox/i.test(navigator.userAgent));
var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive) 
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background").length;

// ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
function parallaxScroll(evt) {
	
	// console.log('evt', evt);
  if (isFirefox) {
    //Set delta for Firefox
    delta = evt.detail * (-120);
    console.log(evt.detail);
  } else if (isIe) {
    //Set delta for IE
    delta = -evt.deltaY;
    console.log(evt.deltaY);
  } else {
    //Set delta for all other browsers
    delta = evt.wheelDelta;
    console.log(evt.wheelDelta);
  }
    // console.log('delta', delta);

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
  displayNoneScrollarow();
}

// ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}

// ------------- ADD EVENT LISTENER ------------- //
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
window.addEventListener(mousewheelEvent, parallaxScroll, false);

// ------------- SLIDE MOTION ------------- //
function nextItem() {
  var $previousSlide = $(".background").eq(currentSlideNumber - 1);
  $previousSlide.removeClass("up-scroll").addClass("down-scroll");
}

function previousItem() {
  var $currentSlide = $(".background").eq(currentSlideNumber);
  $currentSlide.removeClass("down-scroll").addClass("up-scroll");
}

function displayNoneScrollarow() {
  var $currentSlide = $(".background").eq(currentSlideNumber);
  var $scrolldownarrow = $(".footer-scrolldown-arrow");
  if ( $currentSlide.attr('id') == 'contact')
    $scrolldownarrow.removeClass("display transition-slow").addClass("no-display transition-fast");
  else 
    $scrolldownarrow.removeClass("no-display transition-fast").addClass("display transition-slow");
}