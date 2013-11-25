/* Yule Blog 2013 Scripts */


//FitVids
jQuery('article, .feature-sidebar').fitVids({
  customSelector: "iframe[src^='https://archive.org'], iframe[src^='http://archive.org'], iframe[src^='https://funnyordie.com'], iframe[src^='http://funnyordie.com']" });



// Dress up videos a bit to match images
jQuery('.fluid-width-video-wrapper').wrap('<div class="video-wrapper" />');
jQuery('embed:not(.fitvid)').wrap('<div class="video-wrapper inline" />');



// Modernizr
if (Modernizr.input.placeholder) {
  jQuery('html').addClass('input-placeholder');
} else {
  jQuery('html').addClass('no-input-placeholder');
}


// Old-New Toggle
//jQuery(".postid-1037 .feature-sidebar span").each(function() {
//  jQuery(this).width( jQuery(this).width() );
//  
//});

jQuery(".postid-1037 .feature-sidebar .new").hide();

jQuery('.postid-1037 .feature-sidebar').click(function(){
  jQuery('.postid-1037 .feature-sidebar .new').fadeToggle('slow', 'linear').setTimeout(
  jQuery('.postid-1037 .feature-sidebar .old').fadeToggle('slow', 'linear') , 700);
});


// Snowfall
var snowfallheader = document.getElementById("snowfallheader");
// Sets the size and position of the snowfall element
function snowfallSize() {


    snowfallheader.width = window.innerWidth;
    snowfallheader.height = window.innerHeight;
  
}

jQuery(document).ready(function(){
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

jQuery('#snowfall-toggle').on('click',
  (function() {
    if( jQuery(this).is(':checked')) {
      jQuery("#snowfallheader").fadeIn('slow');
    }
    else {
      jQuery("#snowfallheader").fadeOut('slow');
    }
  })
);