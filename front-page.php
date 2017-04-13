<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skinny_Minnie
 */

get_header(); ?>
<?php // Use featured image for hero banner
	if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image full-bleed">
	<?php //max image size for featured image on posts 2000x1200
		the_post_thumbnail( 'oceanreef-full-bleed'); 
	?>
	<div id="intro-section">

		<div class="bg">			
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>
		
		<div class="intro-text">
			<?php the_field( 'banner_intro' ); ?>
		</div><!-- .intro-text -->
	</div><!-- .intro-section -->
	
	</figure><!-- .featured-image .full-bleed -->
	<?php } ?>
		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div id="seven-cs-title">
			<p>The Seven C's</p>
			<img src="http://www.oceanreef.dev/wp-content/uploads/2017/04/sevencs.png">
		</div>
		<div id="seven-cs-boxes">
			<div class="seven-cs-box"><p>courage</p></div>
			<div class="seven-cs-box"><p>courtesy</p></div>
			<div class="seven-cs-box"><p>cooperation</p></div>
			<div class="seven-cs-box"><p>commitment</div>
			<div class="seven-cs-box"><p>common sense</p></div>
			<div class="seven-cs-box"><p>consideration</p></div>
			<div class="seven-cs-box"><p>care</div>
		</div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
