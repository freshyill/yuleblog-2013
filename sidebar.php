<?php
/**
 * Sidebar
 */
?>

<div class="secondary">

  <?php do_action( 'before_sidebar' ); ?>
  
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

    <aside id="search" class="widget widget_search">
		  <?php get_search_form(); ?>
    </aside>

    <ul class="social-shares">
      <li class="facebook"><a href="http://facebook.com/yuleblog" title="The Yule Blog on Christmas">Like us on Facebook</a></li>
      <li class="twitter"><a href="http:/twitter.com/christmastrivia" title="@christmastrivia on Twitter">Follow @christmastrivia</a></li>
    </ul>

  <?php endif; // end sidebar widget area ?>

</div>