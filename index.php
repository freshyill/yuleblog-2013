<?php
/*
  index.php
  Everything starts here.
*/
?>

<?php get_header(); ?>


<?php get_template_part('content', 'header'); ?>

<div class="wrap">
  
  <div class="main">
    <div class="content">
    
      <div class="primary">
        <?php get_template_part('loop', 'index'); ?>      
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
          <?php get_template_part('pagination', 'blog'); ?>
        <?php endif; ?>
      </div>
      
      <div class="secondary">
        <?php get_sidebar(); ?>
      </div>
      
    </div>
  </div>
  
</div>
    

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>