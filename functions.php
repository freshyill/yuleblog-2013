<?php
/*
  functions.php
  Functions for Yule Blog 2012 theme
  It would probably be smart to move some of these functions into plugins to make them more reusable.
  Let's just focus on making it work for now.
*/

/*
  Holdovers from 2011. To be honest, I don't necessary remember why I had some of these.
  As we get closer to launch, it would be wise to do some testing and remove them if they don't seem necessary.
*/
foreach ( array( 'the_field', 'the_excerpt' ) as $filter ) {
	remove_filter( $filter, 'esc_html' );
}

add_filter( 'pre_get_posts', 'yuleblog_get_posts' );
function yuleblog_get_posts( $query ) {
	if ( is_home() || is_category() || is_author() )
		$query->set( 'post_type', array( 'post', 'feature' ) );

	return $query;
}

add_shortcode('wp_caption', 'yb_img_caption_shortcode');
add_shortcode('caption', 'yb_img_caption_shortcode');

remove_filter( 'the_field', 'wpautop' );
remove_filter( 'bloginfo', 'wpautop' );
// end holdovers

add_theme_support( 'post-thumbnails' ); 



if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( $post->ID ) ) {
				$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
				$wpfbogp_images[] = $thumbnail_src[0]; // Add to images array
			}


// A nice, SEO-friendly <title> tag
function yuleblog_title_tag() {

  if (function_exists('is_tag') && is_tag()) { 
    single_tag_title("Tag Archive for &#8220;"); echo '&#8221; - '; 
  } elseif (is_archive()) { 
    wp_title(''); 
    echo ' Archive - '; 
  } elseif (is_search()) { 
    echo 'Search for &#8220;'.wp_specialchars($s).'&#8221; - '; 
  } elseif (!(is_404()) && (is_single()) || (is_page())) { 
    wp_title(''); 
    echo ' - ';
  } elseif (is_404()) { 
    echo 'Not Found - '; 
  } if (is_home()) { 
    bloginfo('name'); 
    echo ' - '; bloginfo('description'); 
  } else { 
    bloginfo('name'); 
  }
    
  if ($paged > 1) { 
    echo ' - page '. $paged; 
  }
}

// Custom jQuery script
function yuleblog_custom_jquery() {
  if (get_field('custom_jquery_include')) {
    echo "<script defer src=" . bloginfo(template_directory) . "/js/" . the_field('custom_jquery_include') . "></script>";
  }
}

// Custom inline script
function yuleblog_custom_inline_script()  {
  if (get_field('custom_inline_jquery')) {
    echo "<script defer>" . the_field('custom_inline_jquery') . "</script>";
  }
}

// Posted on
function yuleblog_posted_on() {
  if ( !(in_category( array( 'Link Post' )))) {
	  printf( __( '<p class="posted"><span class="author vcard">By <a class="url fn n" href="%3$s" title="%4$s" rel="author"> %5$s</a></span><br> <time class="entry-date" datetime="%1$s" pubdate>%2$s</time></p>' ),
	  	esc_attr( get_the_date( 'c' ) ),
	  	esc_html( get_the_date() ),
	  	esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
	  	esc_attr( 'View all posts by %s', get_the_author() ),
	  	get_the_author()
	  );
  }
}


// Pagination
function yuleblog_post_pagination() {
  wp_link_pages( array( 
    'before' => '<div class="page-link"><span>Pages:',
    '' . '</span>', 
    'after' => '</div>' 
  ));
}


// Feature Signature
function yuleblog_feature_signature() {
	printf( __( '<div class="signature"><p class="vcard"><a class="url fn n" href="%3$s" title="%4$s" rel="author">%5$s</a></span><br> <time class="entry-date" datetime="%1$s" pubdate>%2$s</time></p></div>' ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date( 'F Y') ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( 'View all posts by %s', get_the_author() ),
		get_the_author()
	);
}


// Edit Post Link
function yuleblog_edit_post() {
 edit_post_link('Edit this post ✍', '<p>', '</p>');   
}


// Link Attribution
function yuleblog_via() {
  if ( get_field('via_url') && get_field('via_site_name')) {
    echo '<p class="via">Via <a href="';
    echo the_field('via_url');
    echo '">';
    echo the_field('via_site_name');
    echo '</a></p>';
  }
}

#function yuleblog_via() {
#  if ( get_field('via_url') && get_field('via_site_name')) {
#    echo '<p class="via">Via <a href="';
#    echo the_field('via_url');
#    echo '">';
#    echo the_field('via_site_name');
#    echo '</a></p>';
#  }
#}


// Direct Link
function yuleblog_linkage() {
  if ( get_field('direct_link_url') && get_field('direct_link_title')) {
    echo '<p class="via"><a href="';
    echo the_field('direct_link_url');
    echo '">';
    echo the_field('direct_link_title');
    echo '</a>';
    if ( get_field('via_url') && get_field('via_site_name')) {
      echo ' (<i>Via <a href="';
      echo the_field('via_url');
      echo '">';
      echo the_field('via_site_name');
      echo '</i></a>)';
    }
    echo '</p>';
  }
  else yuleblog_via();
}


// Include Hero Header
function yuleblog_hero_header() {
  if ( get_field('empty_hero_header') ) {
    echo '<header class="hero-empty"></header>';
  }
}


// Feature Title
function yuleblog_feature_header() {
  if ( get_field('formatted_title') ) {
    echo the_field('formatted_title');
  } else {
    echo '<h1>';
    the_title();
    echo '</h1>';
  }
}


// Image Credits
function yuleblog_image_credits() {
  if (get_field('image_credits')) :
    echo '<section class="credit">';
    echo '<h2>Image Credits</h2>';
    the_field('image_credits');
    echo '</section>';
  endif;
}


// Article Resources
function yuleblog_article_resources() {
  if (get_field('resources')) :
    echo '<section class="resources">';
    echo '<h2>Resources</h2>';
    the_field('resources');
    echo '</section>';
  endif;
}

// Article Footnotes
function yuleblog_article_footnotes() {
  if (get_field('footnotes')) :
    echo '<section class="footnotes">';
    echo '<h2>Notes</h2>';
    the_field('footnotes');
    echo '</section>';
  endif;
}

// Article Footnotes
function yuleblog_envelope_class() {
  if (get_field('custom_post_class')) :
    the_field('custom_post_class');
    echo '-envelope';
  endif;
}

// Feature Sidebar
function yuleblog_html_sidebar() {
  if (get_field('html_sidebar') || get_field('sidebar')) :

    echo '<aside class="feature-sidebar">';

    if (get_field('html_sidebar')) {
      the_field('html_sidebar');
    } 
    else {
      the_field('sidebar');
    }
    
    echo '</aside>';
  endif;
}


// Custom Excerpt Length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Content Nav
if ( ! function_exists( 'yuleblog_content_nav' ) ) :
  function yuleblog_content_nav( $nav_id ) {
  	global $wp_query;
  
  	if ( $wp_query->max_num_pages > 1 ) : ?>
  		<nav id="<?php echo $nav_id; ?>" class="blog-pagination">
  		  <ul>
  			  <li class="nav-previous"><?php next_posts_link('<span class="meta-nav">&larr;</span> Older posts' ); ?></li>
  			  <li class="nav-next"><?php previous_posts_link('Newer posts <span class="meta-nav">&rarr;</span>' ); ?></li>
  		  </ul>
  		</nav><!-- #nav-above -->
  	<?php endif; 
  }
endif;
?>