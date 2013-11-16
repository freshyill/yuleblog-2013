<?php
/*
  content-footer.php
  This includes the content that appears at the foot of each page.
  It is separate from footer.php to make it easier to remove from individual templates.
*/
?>

<?php # <canvas id="snowfall-footer" class="canvas-snowfall"></canvas> ?>

<div class="footer-wrap">
  <footer class="footer-main">
    <div class="footer-content">
     
      <div class="social">
        <h3>Holidays Are For Sharing</h3>
        <ul class="social-shares">
          <li class="facebook"><a href="http://facebook.com/yuleblog" title="The Yule Blog on Christmas">Like us on Facebook</a></li>
          <li class="twitter"><a href="http:/twitter.com/christmastrivia" title="@christmastrivia on Twitter">Follow @christmastrivia</a></li>
        </ul>
        
        <h3>About The Yule Blog</h3>
        
        <p>The Yule Blog brings you the stories behind the Christmas traditions that we tend to take for granted.</p>
        
        <p>Whether it&#8217;s the meaning behind a favorite Christmas carol or the forgotten history of an annual tradition, we hope to brighten your holidays by separating the myths from the facts, and hopefully have fun along the way. Merry Christmas and Happy Holidays!</p>
      </div>
      
      <div class="nav">
        <h3>Navigation</h3>
        <?php get_template_part('content', 'nav'); ?>
        <?php get_template_part('searchform'); ?>
      </div>
      
      <div class="features">
        <h3>Recent Features</h3>
        <?php get_template_part('loop', 'features-min'); ?>    
      </div>
      
    </div>
  </footer>
</div>