// Yule Blog Slider

(function($) {
  "use strict";
  $.fn.ybslider = function() {

    var slider         = this,
        sliderwidth    = slider.width(), 
        slideContainer = this.children(":first-child"),
        slideoffset    = this.css('left'),
        slides         = slideContainer.children(),
        slidecount     = slides.length,
        
        tduration      = this.data('duration'),
        tproperty      = this.data('property'),
        ttiming        = this.data('timingfunction'),
        transition     = (tduration + "ms " + tproperty + " " + ttiming);
        
        console.log(transition);

    slides.width(sliderwidth);
    
    slideContainer.width(sliderwidth * slidecount);
    
    slideContainer.css({
      '-webkit-transition' : transition, 
         '-moz-transition' : transition, 
            'o-transition' : transition, 
              'transition' : transition
    });
    
    $("#controls button").on('click', function() {
      var $this = $(this);
      $this.prop('disabled', true);
      setTimeout(function() {
        $this.prop('disabled', false);
      }, tduration);
    });
    
    function slideNext() {
      slideoffset = parseInt($(slideContainer).css(tproperty), 10); 
      if ($(slideContainer).width() <= -(slideoffset - sliderwidth)) {
        $(slideContainer).css(tproperty, '0');
      } else {
        $(slideContainer).css(tproperty, slideoffset - sliderwidth);
      }  
    }
    
    function slidePrev() {
      slideoffset = parseInt($(slideContainer).css(tproperty), 10);       
      if (slideoffset === 0) {
        $.noop();
      } else {
        $(slideContainer).css(tproperty, slideoffset + sliderwidth);
      } 
    }

    $('#slide-right').on('click', function() {
      slideNext();
    });
    
    $('#slide-left').on('click', function() {
      slidePrev();
    });

  };
  
})(jQuery);