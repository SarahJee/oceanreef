<?php
/**
 * Template Name: Home
  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skinny_Minnie
 */
 

get_header(); ?>		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div id="seven-cs-section">
			<div id="seven-cs-title">
				<p>The Seven C's</p>
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/04/sevencs.png">
			</div>
		</div>
			<div id="seven-cs-boxes">
				<div class="seven-cs-box"><p>courage</p></div>
				<div class="seven-cs-box"><p>courtesy</p></div>
				<div class="seven-cs-box"><p>cooperation</p></div>
				<div class="seven-cs-box"><p>commitment</p></div>
				<div class="seven-cs-box"><p>common sense</p></div>
				<div class="seven-cs-box"><p>consideration</p></div>
				<div class="seven-cs-box"><p>care</p></div>
			</div>

		
			<?php/*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			*/?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
