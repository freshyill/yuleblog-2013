<?php
/*
  Template Name Posts: Feature with sidebar, header on top
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<?php yuleblog_hero_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  
    <?php $custom_classes = get_post_meta($post->ID, 'custom_post_class', false);  ?>
    
    <div class="wrap">
    
      <div class="<?php yuleblog_envelope_class(); ?>">
      
        <div class="main" role="main">
        
          <header class="entry-header">
            <?php yuleblog_feature_header(); ?>
          </header>
          
          <div class="content">
          
            <article id="post-<?php the_ID(); ?>" role="article">
              
              <div class="article-text">
                <?php the_content(); ?>
              </div>
              
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
              
            </article>
            
            <?php yuleblog_html_sidebar(); ?>
            
          </div>
        </div>
      </div>
    </div>
    
  <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>