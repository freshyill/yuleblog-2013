<?php
/*
  search.php
  The template for displaying Search Results pages.
*/ ?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<div class="wrap">

  <div class="main">
    <div class="content">
    
      <div class="primary">


      <?php if ( have_posts() ) : ?>
    
    	  <header class="page-header">
    		  <h1>Search results for &#8220;<?php echo get_search_query() ?>&#8221;</h1>
    	  </header>
    	
    	
    	<?php while ( have_posts() ) : the_post(); ?>
    		<?php get_template_part( 'content', 'search' ); ?>
    	<?php endwhile; ?>
  
    	<?php yuleblog_content_nav( 'nav-below' ); ?>
  
    <?php else : ?>
  
    	<article id="post-0" class="post no-results not-found">
    	
    		<header class="entry-header">
    			<h1>Nothing found for <?php echo get_search_query() ?></h1>ddd
    		</header>
  
    		<div class="entry-content">
    			<p>Hmmm, we didn&#8217;t find anything for &#8220;<?php echo get_search_query() ?>&#8221;. Please try another search.</p>
    			<?php get_search_form(); ?>
    		</div>
    		
    	</article>
  
    <?php endif; ?>        
        

      </div>
      
      <div class="secondary">
        <?php get_sidebar(); ?>
      </div>
      
    </div>
  </div>
  
</div>
    

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>

