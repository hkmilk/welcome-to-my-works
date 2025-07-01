<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $meta_description = 'portfolio';
	if ( is_page([ 'page_project' , 'page_project2']) ) {
		   $meta_description = 'Project';
	    }	elseif	(  is_page( 'allProject') ) {
		 $meta_description = 'allProject';
	 } elseif  ( is_page( 'page_aboutme' ) ) {
	       $meta_description = 'About me';
	 } elseif ( is_page( 'page_contactme' ) ) {
		   $meta_description = 'Contact me';
    }
	?>
	<meta name="description" content="<?php echo esc_attr($meta_description); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
<div class ="l-container">
    <nav class="c-nav">
        <div class="c-nav__item"><a href="<?php echo esc_url ( home_url ('/' ) ); ?>"><img src="<?php echo esc_url (get_template_directory_uri() . '/images/KK_transparent-.png' ); ?>" alt="logo"></a></div>
        <button class="p-hamburger p-gmenu--bt js-hamburger">
            <span>menuボタン</span>
        </button>
    </nav>
    <header class="l-header">
        <div class="l-header__item">
			 <?php
  if ( is_page('page_contactme') ) {
    echo '<h1 class="c-heading--left">Contact</h1>';
  } elseif ( is_page('page_aboutme') ) {
    echo '<h1 class="c-heading--left">About</h1>';
  } else {
    echo '<h1 class="c-heading--left">My&nbsp;</h1>';
  }
  ?>
  			 <?php
  if ( is_page([ 'archive_project' , 'page_project' , 'page_project2' ] ) ) {
    echo '<h1 class="c-heading--right">PROJECTS</h1>';
  } elseif ( is_page( [ 'page_aboutme' , 'page_contactme' ] ) ) {
    echo '<h1 class="c-heading--right">&nbsp;ME</h1>';
  } else {
    echo '<h1 class="c-heading--right">Portfolio</h1>';
  }
  ?>
</div>
       <h2>KK Works</h2>
    </header>
</div>
