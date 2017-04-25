<?php
/**
 * Template Name: Our School
  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oceanreef
 *
 */

get_header(); ?>

	<div class="bg med-bg">	
		<div class="test">		
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			
			<div class="intro-text ourschool">
				<?php the_field( 'banner_intro' ); ?>
			</div><!-- .intro-text -->
		</div>
	</div><!-- .bg -->
	
		<div class="circular-img">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/04/ocean-reef-student.png"/>
		</div>

		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			
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
