<?php
/**
 * Template Name: Tannoy
  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oceanreef
 *
 */

get_header(); ?>
	<div class="bg std-bg">			
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		
		<div class="intro-text">
			<?php the_field( 'banner_intro' ); ?>
		</div><!-- .intro-text -->
	</div><!-- .bg -->	
	

	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div id="accordion">	
		 <h3>Section 1</h3>
		  <div>
		    <p>
		    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
		    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
		    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
		    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
		    </p>
		  </div>
		  <h3>Section 2</h3>
		  <div>
		    <p>
		    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
		    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
		    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
		    suscipit faucibus urna.
		    </p>
		  </div>
		  <h3>Section 3</h3>
		  <div>
		    <p>
		    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
		    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
		    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
		    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
		    </p>
		  </div>
		  <h3>Section 4</h3>
		  <div>
		    <p>
		    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
		    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
		    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
		    mauris vel est.
		    </p>
		    <p>
		    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
		    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
		    inceptos himenaeos.
		    </p>
		  </div>
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
