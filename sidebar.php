<?php
/**
 * The sidebar containing the main widget area.
 *
 * The OSM logo and RSS link now live in the site header, so this template
 * only renders the widget area. Hidden completely when no widgets are active.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
