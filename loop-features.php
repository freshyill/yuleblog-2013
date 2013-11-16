<?php
/*
  loop-features.php
  This loop is called by features.php to display the list of features.
*/
?>

<?php # global $do_not_duplicate; ?>

<?php query_posts( $query_string . '&posts_per_page=-1&post_type=feature' ); ?>
 		
<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
			
			<article <?php post_class($custom_classes) ?> id="post-<?php the_ID(); ?>" role="article">
      
        <header class="entry-header">
          <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <?php yuleblog_posted_on(); ?>
        </header>
      
        <?php if (get_field('460_badge')) :           // 2011 Badge ?>
          <a href="<?php the_permalink() ?>"><img src="<?php the_field('460_badge'); ?>" alt="<?php the_title(); ?>"></a>
        <?php elseif (get_field('small_feature')) :   // 2010 Badge ?>
          <a href="<?php the_permalink() ?>"><img src="<?php the_field('small_feature'); ?>" alt="<?php the_title(); ?>"></a>
        <?php endif; ?>
      
        <div class="entry-excerpt">
          <?php the_excerpt(); ?>
          <p>Continue reading &#8220;<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>&#8221;</p>
          <?php yuleblog_edit_post(); ?>
        </div>

    </article>
		
	<?php endwhile; ?>
	
<?php else : ?>
	<h1>Nothing found</h1>
<?php endif; ?>