<?php
/*
  content-header.php
  This includes content that appears at the top of each page.
  It is separate from header.php to make it easier to remove from individual templates.
*/
?>

<canvas id="snowfallheader" class="canvas-snowfall snowfall-header"></canvas>

<header class="header-wrap">
  <div class="header-container">
    
    <div class="site-logo">
      <a href="<?php site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/yuleblog-logo.svg"></a>
    </div>
      
    <nav class="site-nav">
      <?php get_template_part('content', 'nav'); ?>
    </nav>
    
    <div class="site-snow-toggle">
      <label class="snow-control" id="snow-control">
        <span for="snowfall-toggle" class="snowfall-toggle">
          <input type="checkbox" id="snowfall-toggle" checked />
          <span class="switch" />
        </span>
      </label>
    </div>
      
  </div>
</header>


