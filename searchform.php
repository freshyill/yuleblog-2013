<?php
/**
 * The template for displaying search forms in Yule Blog 2012 theme
 */
?>

<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label for="s" class="assistive-text">Search</label>
  <input type="search" class="field" name="s" id="s" placeholder="Search">
  <input type="submit" class="submit" name="submit" id="searchsubmit" value="a" title="Submit">
</form>