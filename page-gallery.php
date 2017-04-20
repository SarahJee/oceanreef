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
		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		
		 <nav>
            <ul>
                <li class="filter"><a href="#">Filter Projects</a>
                    <ul id="project-navbar"></ul>
                </li>
            </ul>
        </nav>	
        
        <ul class="projects">
            
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
                        
						?>

                        <li class="project" data-tags="<?php
                                                       $terms = get_the_terms( $post->ID , $taxonomy );
                                                        foreach ( $terms as $term ) {
                                                        $termname = $term->name;
                                                            
                                                        echo $termname . ',';
                                                        }
                                                       ?>">
                            <a href="<?php the_permalink(); ?>">
                            
                            <div class="project-container">
	                            <?php the_post_thumbnail(); ?>
                            </div>
                            </a>
                        </li>

                    <?php }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();
            ?>
            
        </ul><!-- projects -->

	

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
