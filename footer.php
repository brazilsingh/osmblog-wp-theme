<?php
/**
 * The footer template for the OSM Blog theme.
 *
 * Closes #main and #page, and outputs OSM attribution + credits.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<a class="osm-foot-brand" href="https://www.openstreetmap.org/" rel="noopener">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/osm-logo.png" width="22" height="22" alt="OpenStreetMap logo" />
				<?php _e( 'OpenStreetMap', 'twentytwelve' ); ?>
			</a>

			<span><?php printf( __( 'Content licensed under %s.', 'twentytwelve' ), '<a href="https://creativecommons.org/licenses/by-sa/2.0/" rel="license noopener">CC BY-SA 2.0</a>' ); ?></span>

			<span class="osm-foot-sep">
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '&nbsp;&middot;&nbsp;' );
				}
				do_action( 'twentytwelve_credits' );
				?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwelve' ) ); ?>" class="imprint">
					<?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?>
				</a>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
