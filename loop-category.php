<?php
/*
  loop-category.php
  This loop is called by category.php to display a list of content
*/
?>

<?php global $do_not_duplicate; ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>   
		
		<?php wp_reset_query(); // This overrides any previous loops ?>
   
    <?php $custom_classes = get_post_meta($post->ID, 'custom_post_class', false);  ?>
    
    <article <?php post_class($custom_classes) ?> id="post-<?php the_ID(); ?>" role="article">
      
      <?php if ( 'feature' == get_post_type()) : // If it's a feature  ?>
      
        <header>
          <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <?php yuleblog_posted_on(); ?>
        </header>
      
        <?php if (get_field('745_banner')) :      // 2011 Banner ?>
          <a href="<?php the_permalink() ?>"><img src="<?php the_field('745_banner'); ?>" alt="<?php the_title(); ?>"></a>
        <?php elseif (get_field('big_feature')) : // 2010 Banner ?>
          <a href="<?php the_permalink() ?>"><img src="<?php the_field('big_feature'); ?>" alt="<?php the_title(); ?>"></a>
        <?php endif; ?>
      
        <div class="entry-excerpt">
          <?php the_excerpt(); ?>
          <p>Continue reading &#8220;<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>&#8221;</p>
          <?php # yuleblog_edit_post(); ?>
        </div>
      
      <?php else : // Not a feature ?>
      
        <header>
          <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <?php yuleblog_posted_on() ?>
        </header>
      
        <div class="entry-text">
          <?php the_content(); ?>
          <?php # yuleblog_edit_post(); ?>
        </div>
        
      <?php endif; ?>
    </article>
    
  <?php endwhile; ?>
<?php endif; ?>
