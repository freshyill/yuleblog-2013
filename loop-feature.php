<?php
/*
  loop-feature.php
  This loop is called by features.php to display the list of features.
*/
?>

<?php global $do_not_duplicate; ?>


<?php

  $args = array(
    'post_type' => 'feature',
    'posts_per_page' => '-1'
  );
  
  $features = new WP_Query( $args );
    if( $features->have_posts() ) : ?>

    <?php while ( $features->have_posts()) : $features->the_post(); ?>

    
      <article <?php post_class($custom_classes) ?> id="post-<?php the_ID(); ?>" role="article">
        
        <?php if (get_field('460_badge')) :         // 2011 Badge ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_field('460_badge'); ?>" alt="<?php the_title(); ?>"></a>
        <?php elseif (get_field('small_feature')) : // 2010 Badge ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_field('small_feature'); ?>" alt="<?php the_title(); ?>"></a>
        <?php else :                                // Just use the headine ?>
          <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <div class="excerpt">
            <?php the_excerpt(); ?>
          </div>
        <?php endif; ?>
        
      </article>
    

    <?php endwhile; ?>
  </ul>
  
<?php else : ?>
  <h1>Ho Ho No!</h1>
	<p>There should be some features here! Some Grinch probably stole them or something.
	<p>For what it's worth, this isn't a 404. Something's just broken.</p>
	<p>Maybe you should try heading back to <a href="<?php echo home_url(); ?>">the homepage</a>?</p>
<?php endif; ?>
