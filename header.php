<?php
/*
  Header
  This is common to all pages, even features
*/
?>

<!doctype html>
<!--[if lt IE 7]>     <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 7]>        <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 8]>        <html class="no-js lt-ie10 lt-ie9" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 9]>        <html class="no-js lt-ie10" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" lang="<?php language_attributes(); ?>"><!--<![endif]-->
  <head profile="http://www.w3.org/2005/10/profile">

    <title><?php yuleblog_title_tag(); ?></title>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  	<?php wp_head(); // Plugins provide Facebook OG and SEO meta tags ?>
  	
  	<? 
  	 /*
    	 Just leaving room for notes.
  	 */
  	?>
  
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<link rel="shortcut icon" rel="icon" type="image/png" href="<?php echo bloginfo(template_directory); ?>/favicon.png">
  	<link rel="apple-touch-icon" href="<?php echo bloginfo(template_directory); ?>/img/apple-touch-icon.png">
  	
  	<link rel="stylesheet" href="<?php echo bloginfo(template_directory); ?>/css/common.css">
  	<?php if ( (is_single()) && get_field('custom_css'))  : ?>
  		<link rel="stylesheet" href="<?php echo bloginfo(template_directory); ?>/css/feature-common.css">
  		<link rel="stylesheet" href="<?php echo bloginfo(template_directory); ?>/css/<?php the_field('custom_css'); ?>">
    <?php else: ?>
  		<link rel="stylesheet" href="<?php echo bloginfo(template_directory); ?>/css/theme.css">
  	<?php endif; ?>
  	
  	<?php if (! has_post_thumbnail() ) { ?>
      	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/default-og.jpg" />
    <?php } ?>
  
  	<script src="<?php bloginfo(template_directory)?>/js/libs/modernizr.custom.13870.js"></script>
  	
  	<!-- hey! -->
  	<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
  	<?php if ($fb_image) : ?>
      <meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
    <?php endif; ?>
  
  </head>
  <body <?php body_class(); ?>>
  
  
  
  