<?php
/*
  Template Name Posts: Feature with sidebar
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">
  <div class="main" role="main">
    <div class="content <?php yuleblog_envelope_class(); ?>">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
  
          <?php $custom_classes = get_post_meta($post->ID, 'custom_post_class', false);  ?>
          
          <article <?php post_class($custom_classes); ?> id="post-<?php the_ID(); ?>" role="article">
        
            <header class="entry-header">
              <?php yuleblog_feature_header(); ?>
            </header>
            
            <div class="article-text">
              <div class="utility">
              
                <?php the_content(); ?>
                
                <footer class="feature-footer entry-meta">
                  <?php yuleblog_feature_signature(); ?>
                  <?php if (get_field('image_credits') || get_field('resources') || get_field('footnotes')) : ?>
                    <section class="additional-information">
                      <?php yuleblog_article_footnotes(); ?>
                      <?php yuleblog_image_credits(); ?>
                      <?php yuleblog_article_resources(); ?>
                    </section>
                  <?php endif ?>   
                  <?php yuleblog_edit_post(); ?>
                </footer>
                
              </div>
            </div>
            
          </article>
            
          <?php yuleblog_html_sidebar(); ?>  
    
        <?php endwhile; ?>
      <?php endif; ?>
  
    </div>
  </div>
</div>

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>