<?php
/**
 * The template for each single photo gallery image. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package oceanreef
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );
						
			
			// If comments are open or comment exisits, load the comment template 
			if (comments_open() || get_comments_number() ) :
				comments_template();
				endif;
				

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
