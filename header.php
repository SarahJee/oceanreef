<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oceanreef
 */

?><!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'oceanreef' ); ?></a>

	<nav id="utility-navigation" class="utility-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'utility-nav', 'menu_id' => 'utility-navigation' ) ); ?>	
	</nav><!--#utility-navigation-->

	
	<header id="masthead" class="site-header" role="banner">
				
		<div class="site-branding">
			
			<?php /* Output logo added in customiser */ the_custom_logo();?>
				<div class="site-branding-text">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;
	
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
				</div><!-- .site-branding-text -->
		</div><!-- .site-branding -->
		
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				
					<div id="nav-icon1">
					  <span></span>
					  <span></span>
					  <span></span>
					</div><!-- #nav-icon1 -->
				
				<span class="menu"><?php esc_html_e( '', 'oceanreef' ); ?></span></button>


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'header-nav', 'menu_id' => 'main-navigation' ) ); ?>
		</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	
		
		<div id="deco-banner"><?php//decorative banner?></div>
	
		<figure class="featured-image">
			<?php // Use featured image for hero banner - max image size for featured image on posts 1080x376
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail( 'oceanreef-hero'); 
				} else {
			?>
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/04/default-hero1.jpg" alt="<?php the_title(); ?>" />
			<?php } ?>
		</figure><!-- .featured-image .full-bleed -->

</div>	
	
	<div id="content" class="site-content">