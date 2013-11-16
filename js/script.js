/* Yule Blog 2012 Scripts */

//FitVids
$('article').fitVids({ 
  customSelector: "iframe[src^='https://archive.org'], iframe[src^='http://archive.org'], iframe[src^='https://funnyordie.com'], iframe[src^='http://funnyordie.com']" });


// Dress up videos a bit to match images
//$('.fluid-width-video-wrapper').wrap('<div class="video-wrapper" />');
$('embed:not(.fitvid)').wrap('<div class="video-wrapper inline" />');



// Modernizr
if (Modernizr.input.placeholder) {
  $('html').addClass('input-placeholder');
} else {
  $('html').addClass('no-input-placeholder');
}



// Snowfall
var snowfallheader = document.getElementById("snowfallheader");
// Sets the size and position of the snowfall element
function snowfallSize() {

  if ($('body').is('.post-template-feature-freeform-php, .post-template-columns-php, .post-template-feature-sidebar-header-php, .post-template-feature-sidebar-php, .post-template-feature-2010-visit-from-st-nicholas-php')) {
   snowfallheader.width = $('.hrail-bar').width();
   snowfallheader.height = $('.hrail-bar').height();
   
  }
  
  else {
    snowfallheader.width = window.innerWidth;
    snowfallheader.height = window.innerHeight;
  } 
}

$(document).ready(function(){
  // Resize the canvas
  snowfallSize();
  // Now the emitter
  var emitter = Object.create(rectangleEmitter);
  emitter.setCanvas(snowfallheader);
  emitter.setBlastZone(0, -10, snowfallheader.width, 1);
  emitter.particle = snow;
  emitter.runAhead(60);
  emitter.start(30);
});

$('#snowfall-toggle').on('click',
  (function() {
    if( $(this).is(':checked')) {
      $("#snowfallheader").fadeIn('slow');
    } 
    else {
      $("#snowfallheader").fadeOut('slow');
    }
  })
);



// Media queries in jQuery
var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();

$(function() {

  var pause = 100;

  $(window).resize(function() {
  
    snowfallSize();
    
    delay(function() {
    
      var width = $(window).width();

             if ( width >= 1140 ) {                   // desktop-wide

      } else if ( width >= 1024 && width <= 1039 ) {  // desktop-small



      } else if ( width >= 768 && width <= 1023 ) {   // tablet-portrait



      } else if ( width >= 568 && width <= 767 ) {    // phone-wide-landscape

        $('#snow-control').insertBefore('.site-title');

      } else if ( width >= 480 && width <= 567 ) {    // phone-landscape

        $('#snow-control').insertBefore('.site-title');


      } else if ( width <= 479 ) {                    // phone-portrait

        $('#snow-control').insertBefore('.site-title');

      }

    }, pause );
  });

  $(window).resize();
});