<?php
/*
  single.php
  Displays a single post. Needs content-single.php to do anything useful.
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">

  <div class="main">
    <div class="content">
    
      <div class="primary">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', 'single' ); ?>
          <?php # comments_template( '', true ); // Ugh, no comments, please? ?>
        <?php endwhile; // end of the loop. ?>
          
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

