<?php
/*
  content-header.php
  This includes content that appears at the top of each page.
  It is separate from header.php to make it easier to remove from individual templates.
*/
?>

<canvas id="snowfallheader" class="canvas-snowfall"></canvas>

<div class="hrail-bar">

  <div class="hrail-container">
  
    <div class="hrail-content">
    
      <div class="header-wrap">
      
        <h1 class="site-title"><a href="/" title="The Yule Blog" data-fallback="<?php echo bloginfo(template_directory); ?>/img/logo.png">The Yule Blog</a></h1>
        
        <label class="snow-control" id="snow-control">
          <span for="snowfall-toggle" class="snowfall-toggle">
            <input type="checkbox" id="snowfall-toggle" checked />
            <span class="switch" />
          </span>
        </label>
        
        <?php get_template_part('content', 'nav'); ?>
      
      </div>
      
   
      
    </div>
  </div>
  
</div>


