<?php
/*
  404.php
  Not found.
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">
  
  <div class="main">
    <div class="content">
    
      <div class="notfoundcontent">
      
        <h1>Nothing Found</h1>
       
        <div class="searchblock">
          <p>He sees you when you're sleeping, but Santa couldn't find the page you were looking for.</p>
          <?php get_template_part('searchform'); ?>
        </div> 
        
       <div class="santa-animated">
        <div class="eyes"><img src="<?php echo bloginfo(template_directory); ?>/img/404-santa-eyes.png" class="eyes"></div>
        <div class="face"><img src="<?php echo bloginfo(template_directory); ?>/img/404-santa-face.png" class="face"></div>
      </div>
      
      </div>
      
    </div>
  </div>
  
</div>
    

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>