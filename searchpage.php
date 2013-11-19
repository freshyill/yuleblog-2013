<?php
/*
  Template Name: Search Page
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
          
            <article class="searchresult">
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
              <p><?php echo substr(get_the_excerpt(), 0,200); ?></p>
            </article>
          
          <?php endwhile; ?>
        
        <?php else : ?>
        
          <article class="post no-results not-found">
        
            <header class="entry-header">
          	  <h1>Nothing found for <?php echo get_search_query() ?></h1>
            </header>
        
            <div class="entry-content">
          	  <p>Hmmm, we didn&#8217;t find anything for &#8220;<?php echo get_search_query() ?>&#8221;. Please try another search.</p>
              <?php get_search_form(); ?>
            </div>
          
          </article>
        
        <?php endif; ?>        
        

      </div>
      
      <?php get_sidebar(); ?>
      
    </div>
  </div>
  
</div>
    

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>

