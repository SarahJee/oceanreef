<?php
/**
 * Template Name: Gallery
  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skinny_Minnie
 *
 */

get_header(); ?>
		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

		<ul id="filters">
		    <?php
		        $terms = get_terms('photo-gallery-categories');
		        $count = count($terms);
		            echo '<li><a href="javascript:void(0)" title="" data-filter=".all" class="active">All</a></li>';
		        if ( $count > 0 ){
		 
		            foreach ( $terms as $term ) {
		 
		                $termname = strtolower($term->name);
		                $termname = str_replace(' ', '-', $termname);
		                echo '<li><a href="javascript:void(0)" title="" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
		            }
		        }
		    ?>
		</ul>
		
		<div id="gallery">
 
		  <?php
		  /* 
		  Query the post 
		  */
		  $args = array( 'post_type' => 'photo-gallery', 'posts_per_page' => -1 );
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post(); 
		 
		     /* 
		     Pull category for each unique post using the ID 
		     */
		     $terms = get_the_terms( $post->ID, 'photo-gallery-categories' );	
		     if ( $terms && ! is_wp_error( $terms ) ) : 
		 
		         $links = array();
		 
		         foreach ( $terms as $term ) {
		             $links[] = $term->name;
		         }
		 
		         $tax_links = join( " ", str_replace(' ', '-', $links));          
		         $tax = strtolower($tax_links);
		     else :	
			 $tax = '';					
		     endif; 
		 
		     /* Insert category name into photo-gallery-item class */ 
		     echo '<div class="all photo-gallery-item '. $tax .'">';;
		     echo '<div class="thumbnail">'. the_post_thumbnail() .'</div>';
		     echo '</div>'; 
		  endwhile; ?>
		 
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
