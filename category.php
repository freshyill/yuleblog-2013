<?php
/*
  The template for displaying Category Archive pages.

  category.php
  Displays a category archive
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">

  <div class="main">
    <div class="content">
    
      <div class="primary">
        
        <?php get_template_part('loop', 'category'); ?>
        
      </div>
      
      <?php get_sidebar(); ?>
      
    </div>
  </div>
  
</div>
    

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>

