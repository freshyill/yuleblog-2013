<?php
/*
  loop-features-min.php
  This loop is called by features.php to display the list of features.
*/
?>


<?php query_posts( $query_string . '&posts_per_page=7&post_type=feature' ); ?>

<?php if (have_posts()) : ?>
  <ul>
	<?php while (have_posts()) : the_post(); ?>
  
		<li <?php post_class($custom_classes) ?>>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <time><?php the_date('F j, Y') ?></time><br>
        <?php the_title(); ?>
      </a>
    </li>
	<?php endwhile; ?>
  </ul>
  
<?php else : ?>
	<p>What? There should be some features here!</p>
<?php endif; ?>