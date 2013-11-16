<article>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
  
  <p><?php echo substr(get_the_excerpt(), 0,200); ?></p>
  
</article>