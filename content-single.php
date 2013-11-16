<?php
/*
  content-single.php 
  The template for displaying content in single.php
*/
?>

<div class="post-content">
  <article <?php post_class($custom_classes); ?> id="post-<?php the_ID(); ?>" role="article">

    <header class="entry-header">
  		<h1><?php the_title(); ?></h1>
  		
  		<?php if ( 'post' == get_post_type() ) : ?>
  		  <div class="entry-meta">
    		  <?php yuleblog_posted_on(); ?>
    		</div>
  		<?php endif; ?>
  		
  	</header>
  
  	<div class="entry-content">
  		<?php the_content(); ?>
  		<?php yuleblog_linkage(); ?>
  		<?php yuleblog_post_pagination() ?>
  	</div>
  	
  	<footer class="entry-meta">
      <?php if ( 'feature' == get_post_type() ) : ?>
        <?php yuleblog_feature_signature(); ?>
  		<?php endif; ?>
  	</footer>
  	
  </article>
</div>
