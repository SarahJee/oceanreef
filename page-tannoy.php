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
		
	<?php if ( have_rows( 'download_newsletters' ) ): ?>
	<?php while ( have_rows( 'download_newsletters' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'news2017' ) : ?>
			
		<div id="accordion">	
		 <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> View 2017 Newsletters <i class="fa fa-chevron-down" aria-hidden="true"></i></h3>
			<div class="accord-section">
				<?php if ( get_sub_field( 'jan2017' ) ) { ?>
					<a href="<?php the_sub_field( 'jan2017' ); ?>">January</a>
				<?php } ?>	
				  <?php if ( get_sub_field( 'feb2017' ) ) { ?>
					<a href="<?php the_sub_field( 'feb2017' ); ?>">February</a>
				<?php } ?>
				<?php if ( get_sub_field( 'mar2017' ) ) { ?>
					<a href="<?php the_sub_field( 'mar2017' ); ?>">March</a>
				<?php } ?>
				<?php if ( get_sub_field( 'apr2017' ) ) { ?>
					<a href="<?php the_sub_field( 'apr2017' ); ?>">April</a>
				<?php } ?>
				<?php if ( get_sub_field( 'may2017' ) ) { ?>
					<a href="<?php the_sub_field( 'may2017' ); ?>">May</a>
				<?php } ?>
				<?php if ( get_sub_field( 'jun2017' ) ) { ?>
					<a href="<?php the_sub_field( 'jun2017' ); ?>">June</a>
				<?php } ?>
				<?php if ( get_sub_field( 'jul2017' ) ) { ?>
					<a href="<?php the_sub_field( 'jul2017' ); ?>">July</a>
				<?php } ?>
				<?php if ( get_sub_field( 'aug2017' ) ) { ?>
					<a href="<?php the_sub_field( 'aug2017' ); ?>">August</a>
				<?php } ?>
				<?php if ( get_sub_field( 'sep2017' ) ) { ?>
					<a href="<?php the_sub_field( 'sep2017' ); ?>">September</a>
				<?php } ?>
				<?php if ( get_sub_field( 'oct2017' ) ) { ?>
					<a href="<?php the_sub_field( 'oct2017' ); ?>">October</a>
				<?php } ?>
				<?php if ( get_sub_field( 'nov2017' ) ) { ?>
					<a href="<?php the_sub_field( 'nov2017' ); ?>">November</a>
				<?php } ?>
				<?php if ( get_sub_field( 'dec2017' ) ) { ?>
					<a href="<?php the_sub_field( 'dec2017' ); ?>">December</a>
				<?php } ?>		   
			</div>
		   

		<?php elseif ( get_row_layout() == 'news2016' ) : ?>
		   
		   	<h3><i class="fa fa-file-text-o" aria-hidden="true"></i> View 2016 Newsletters <i class="fa fa-chevron-down" aria-hidden="true"></i></h3>
		   	
			<div class="accord-section">	 
		   		 <?php if ( get_sub_field( 'jan2016' ) ) { ?>
				<a href="<?php the_sub_field( 'jan2016' ); ?>">January</a>
				<?php } ?>
				<?php if ( get_sub_field( 'feb2016' ) ) { ?>
					<a href="<?php the_sub_field( 'feb2016' ); ?>">February</a>
				<?php } ?>
				<?php if ( get_sub_field( 'mar2016' ) ) { ?>
					<a href="<?php the_sub_field( 'mar2016' ); ?>">March</a>
				<?php } ?>
				<?php if ( get_sub_field( 'apr2016' ) ) { ?>
					<a href="<?php the_sub_field( 'apr2016' ); ?>">April</a>
				<?php } ?>
				<?php if ( get_sub_field( 'may2016' ) ) { ?>
					<a href="<?php the_sub_field( 'may2016' ); ?>">May</a>
				<?php } ?>
				<?php if ( get_sub_field( 'jun2016' ) ) { ?>
					<a href="<?php the_sub_field( 'jun2016' ); ?>">June</a>
				<?php } ?>
				<?php if ( get_sub_field( 'jul2016' ) ) { ?>
					<a href="<?php the_sub_field( 'jul2016' ); ?>">July</a>
				<?php } ?>
				<?php if ( get_sub_field( 'aug2016' ) ) { ?>
					<a href="<?php the_sub_field( 'aug2016' ); ?>">August</a>
				<?php } ?>
				<?php if ( get_sub_field( 'sep2016' ) ) { ?>
					<a href="<?php the_sub_field( 'sep2016' ); ?>">September</a>
				<?php } ?>
				<?php if ( get_sub_field( 'oct2016' ) ) { ?>
					<a href="<?php the_sub_field( 'oct2016' ); ?>">October</a>
				<?php } ?>
				<?php if ( get_sub_field( 'nov2016' ) ) { ?>
					<a href="<?php the_sub_field( 'nov2016' ); ?>">November</a>
				<?php } ?>
				<?php if ( get_sub_field( 'dec2016' ) ) { ?>
					<a href="<?php the_sub_field( 'dec2016' ); ?>">December</a>
				<?php } ?>			
		</div>
		
		<?php elseif ( get_row_layout() == 'news2015' ) : ?>
		   
		    <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> View 2015 Newsletters <i class="fa fa-chevron-down" aria-hidden="true"></i></h3>
		    
		<div class="accord-section">
		    <?php if ( get_sub_field( 'jan2015' ) ) { ?>
				<a href="<?php the_sub_field( 'jan2015' ); ?>">January</a>
			<?php } ?>
			<?php if ( get_sub_field( 'feb2015' ) ) { ?>
				<a href="<?php the_sub_field( 'feb2015' ); ?>">February</a>
			<?php } ?>
			<?php if ( get_sub_field( 'mar2015' ) ) { ?>
				<a href="<?php the_sub_field( 'mar2015' ); ?>">March</a>
			<?php } ?>
			<?php if ( get_sub_field( 'apr2015' ) ) { ?>
				<a href="<?php the_sub_field( 'apr2015' ); ?>">April</a>
			<?php } ?>
			<?php if ( get_sub_field( 'may2015' ) ) { ?>
				<a href="<?php the_sub_field( 'may2015' ); ?>">May</a>
			<?php } ?>
			<?php if ( get_sub_field( 'jun2015' ) ) { ?>
				<a href="<?php the_sub_field( 'jun2015' ); ?>">June</a>
			<?php } ?>
			<?php if ( get_sub_field( 'jul2015' ) ) { ?>
				<a href="<?php the_sub_field( 'jul2015' ); ?>">July</a>
			<?php } ?>
			<?php if ( get_sub_field( 'aug2015' ) ) { ?>
				<a href="<?php the_sub_field( 'aug2015' ); ?>">August</a>
			<?php } ?>
			<?php if ( get_sub_field( 'sep2015' ) ) { ?>
				<a href="<?php the_sub_field( 'sep2015' ); ?>">September</a>
			<?php } ?>
			<?php if ( get_sub_field( 'oct2015' ) ) { ?>
				<a href="<?php the_sub_field( 'oct2015' ); ?>">October</a>
			<?php } ?>
			<?php if ( get_sub_field( 'nov2015' ) ) { ?>
				<a href="<?php the_sub_field( 'nov2015' ); ?>">November</a>
			<?php } ?>
			<?php if ( get_sub_field( 'dec2015' ) ) { ?>
				<a href="<?php the_sub_field( 'dec2015' ); ?>">December</a>
			<?php } ?>
		</div>
		
		
		    <?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?> 
		    
		    
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
