<?php
/*
  Template Name: Archives Template
  archives.php
  Displays an archive of posts
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">

  <div class="main">
    <div class="content">
    
      <div class="primary">
      
        <h1><?php the_title(); ?></h1>

        <?php get_search_form(); ?>
        
        <h2>Archives by Month</h2>
        
        <?php wp_get_archives('type=monthly'); ?>
        
        <h2>Archives by Subject</h2>        
        
        <?php wp_list_categories(); ?>
        
      </div>
      
      <div class="secondary">
        <?php get_sidebar(); ?>
      </div>
      
    </div>
  </div>
  
</div>
    

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>

