<?php
/**
 * Template Name: Contact
  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oceanreef
 *
 */

get_header(); ?>

	<div class="bg large-bg">			
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		
		<div class="intro-text contact-banner">

			<div id="contact">
				<div class="contact-info">
				
					<h4>Ocean Reef Primary School</h4>
					<p>Kaufman Avenue, Ocean Reef, Western Australia 6017</p>
					<p><span>Phone:</span> 9307 3444 <span>Fax:</span> 9307 4541</p>
					<p><span>Email:</span> oceanreef.ps@education.wa.edu.au</p>
					
					<h4>Dental Therapy Centre:</h4>
					<p><span>Phone:</span> 9307 4775</p>
				</div>
				
				<div class="contact-form">
					<?php echo do_shortcode( '[contact-form-7 id="1806" title="Contact Page Form"]' ); ?>
				</div>
			</div><!--End #contact-->
		</div><!-- .intro-text -->
	</div><!-- .bg -->			

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="googlemap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.168858065552!2d115.73721175157945!3d-31.765880120332042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2bcd54b69e586e9d%3A0xd0a6d0f8b08dc4ac!2sOcean+Reef+Primary+School!5e0!3m2!1sen!2sau!4v1493104618260" width="1080" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
