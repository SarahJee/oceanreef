<?php
/**
 * Template Name: Drumcorp
  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oceanreef
 *
 */

get_header(); ?>
		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="image_text_row">
				<div class="one-third_img">
					<?php $secondaryimg = get_field( 'secondaryimg' ); ?>
					<?php if ( $secondaryimg ) { ?>
						<img src="<?php echo $secondaryimg['url']; ?>" alt="<?php echo $secondaryimg['alt']; ?>" />
					<?php } ?>
				</div>
				<div class="two-thirds_text">
					<h4><?php the_field( 'drumcorp_heading' ); ?></h4>
					<p><?php the_field( 'right_side_text' ); ?></p>
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
