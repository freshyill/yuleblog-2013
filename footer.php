<?php
/*
  Footer
*/
?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo(template_directory)?>/js/libs/jquery-1.8.2.min.js"><\/script>')</script>
  <script src="<?php bloginfo(template_directory)?>/js/plugins.js"></script>
  <script src="<?php bloginfo(template_directory)?>/js/script.js"></script>
  <script src="<?php bloginfo(template_directory)?>/js/ios-orientationchange-fix.js"></script>
  <script src="<?php bloginfo(template_directory)?>/js/snow/rectangleEmitter.js"></script>
  <script src="<?php bloginfo(template_directory)?>/js/snow/snow.js"></script>
  
  <?php yuleblog_custom_jquery(); ?>
  
  <?php yuleblog_custom_inline_script(); ?>

  <script>
    var _gaq=[['_setAccount','UA-140680-7'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  
  <?php wp_footer(); ?>
  
  </body>
</html>