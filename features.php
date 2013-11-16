<?php
/*
  Template Name: Feature Articles
  This displays the list of feature articles (probably on /features).
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">

  <div class="main">
    <div class="content">
    
      <div class="primary">

        <h1><?php the_title(); ?></h1>
        
        <?php get_template_part('loop', 'features'); ?>
      </div>
      
      <div class="secondary">
        <?php get_sidebar(); ?>
      </div>
      
    </div>
  </div>
  
</div>
    

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>