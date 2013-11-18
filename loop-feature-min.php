<?php
/*
  loop-features-min.php
  This loop is called by features.php to display the list of features.
*/
?>

<?php global $do_not_duplicate; ?>

<?php

  $args = array(
    'post_type' => 'feature',
    'posts_per_page' => '7'
  );
  
  $features = new WP_Query( $args );
    if( $features->have_posts() ) : ?> 
    
  <ul>
	  <?php while ( $features->have_posts()) : $features->the_post(); ?>
		  <li>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <time><?php the_date('F j, Y'); ?></time>
          <br>
          <?php the_title(); ?>
        </a>
    </li>
    <?php endwhile; ?>
  </ul>
  
<?php else : ?>
	<p>What? There should be some features here!</p>
<?php endif; ?>


