<?php
/**
 * Template Name: Gallery
  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oceanreef
 *
 */

get_header(); ?>

	<div class="bg skinny-bg" style="height: 128px; margin-bottom: 10px;">			
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		
		<div class="intro-text gallery-banner" style="height: auto; padding-top: 0px;">
            <div class="photo-gallery-filter-wrap">
              
              <nav id="filters" style="margin-bottom: 0px; background: none;">

                    <?php

                    $terms = get_terms( array(
                        'taxonomy' => 'photo-gallery-categories',
                        'hide_empty' => false,
                    ) );

                   //echo '<pre>'.print_r($terms, true).'</pre>';

                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

                        echo '<span>filter by </span>';

                        echo '<select>';

                        echo '<option value="*">Year</option>';

                        foreach ( $terms as $term ) {
                            echo '<option value=".'.$term->name.'">' . $term->name . '</option>';
                        }

                        echo '</select>';
                    }

                    ?>     
                  
                </nav>

            </div>  
			<?php // the_field( 'banner_intro' ); ?>
		</div><!-- .intro-text -->
	</div><!-- .bg -->	
		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <div class="projects">

            <?php
            
                // WP_Query arguments
                $args = array(
                    'post_type'              => array( 'photo-gallery' ),
                    'posts_per_page'         => '-1',
                ); 

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post(); 
                        
                        $taxonomy = 'photo-gallery-categories';

                        $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                        
                        ?>

                        <div class="project <?php
                                                       $terms = get_the_terms( $post->ID , $taxonomy );
                                                        foreach ( $terms as $term ) {
                                                        $termname = $term->name;
                                                            
                                                        echo $termname . ' ';
                                                        }
                                                       ?>">
                           <a data-fancybox="gallery" href="<?php echo $feat_image_url; ?>"> 
                            
                            <!-- <div class="project-container"> -->
                                <?php the_post_thumbnail(); ?>
                           <!--  </div> -->
                           </a>
                        </div>

                    <?php }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();
            ?>
            
            
        </div><!-- projects -->

	

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
