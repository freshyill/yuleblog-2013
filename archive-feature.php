<?php
/*
  Template Name: Feature Articles
  This displays the list of feature articles (on /feature).
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">

  <div class="main">
    <div class="content the-features">
    
      <?php get_template_part('loop', 'feature'); ?>
      
      <p></p>
         
    </div>
  </div>
  
</div>
    
<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>