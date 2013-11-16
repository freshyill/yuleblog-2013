<?php
/*
  loop-features.php
  This loop is called by features.php to display the list of features.
*/
?>

<?php global $do_not_duplicate; ?>

<?php query_posts( $query_string . '&posts_per_page=-1&post_type=feature' ); ?>
 		
<?php if (have_posts()) : ?>

  <ul>
	
	<?php while (have_posts()) : the_post(); ?>
			
			
      

         
          <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

      
              
    
 

  
		
	<?php endwhile; ?>
	
          </ul>
	
  <?php else : ?>
<?php endif; ?>