<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skinny_Minnie
 */

?>

	</div><!-- #content -->
		<div id="sub-footer">
			
			<div id="enrolments" class="sub-foot-section">
				
				<a href="#" class="sub-foot-link">
					<picture>
						<source media="(min-width: 600px)" srcset="http://www.oceanreef.dev/wp-content/uploads/2017/04/enrol-lge.jpg">
						<img src="http://www.oceanreef.dev/wp-content/uploads/2017/04/enrol-sml.jpg" alt="Enrolment">
					</picture>
					
					<div class="link-text">enrolments</div>
				</a>
			</div>
			
			<div id="term-calendar" class="sub-foot-section">
				
				<a href="#" class="sub-foot-link">
					<picture>
						<source media="(min-width: 600px)" srcset="http://www.oceanreef.dev/wp-content/uploads/2017/04/calendar-large.jpg">
						<img src="http://www.oceanreef.dev/wp-content/uploads/2017/04/calendar-sml.jpg" alt="Term Calendar">
					</picture>
					
					<div class="link-text">term calendar</div>
				</a>
			</div>
			
			<div id="tannoy-news" class="sub-foot-section">
				
				<a href="#" class="sub-foot-link">
					<picture>
						<source media="(min-width: 600px)" srcset="http://www.oceanreef.dev/wp-content/uploads/2017/04/news-lge.jpg">
						<img src="http://www.oceanreef.dev/wp-content/uploads/2017/04/news-sml.jpg" alt="Tannoy Newsletter">
					</picture>
					
					<div class="link-text">tannoy newsletter</div>
				</a>
			</div>
			
			<div id="p-and-c" class="sub-foot-section">				

				<a href="#" class="sub-foot-link">
					<picture>
						<source media="(min-width: 600px)" srcset="http://www.oceanreef.dev/wp-content/uploads/2017/04/pc-lge.jpg">
						<img src="http://www.oceanreef.dev/wp-content/uploads/2017/04/pc-sml.jpg" alt="P&C">
					</picture>
					
					<div class="link-text">P&C</div>
				</a>
			</div>
					
		</div>	<!-- #sub-footer-->

	<?php get_sidebar ( 'footer' ); ?>
 
		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div class="site-info">
				&copy; <?php echo date("Y"); ?>Ocean Reef Primary School

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	
	<?php wp_footer(); ?>

</body>
</html>
