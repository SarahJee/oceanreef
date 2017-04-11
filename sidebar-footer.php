<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skinny_Minnie
 */

if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
	return;
}
?>

	<aside id="footer-widget-area" class="widget-area footer-widgets" role="complementary">
		<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	</aside><!-- #footer-widgets -->
