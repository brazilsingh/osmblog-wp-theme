<?php
/**
 * The Header template for the OSM Blog theme.
 *
 * Renders <head>, the modern sticky site header (OSM logo + title + primary
 * menu + RSS) and, on the blog home/front page, a short hero band.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script>
/* Set the colour theme before paint to avoid a flash. */
(function(){try{var t=localStorage.getItem('osm-theme');document.documentElement.setAttribute('data-theme',(t==='dark'||t==='light')?t:'auto');}catch(e){document.documentElement.setAttribute('data-theme','auto');}})();
</script>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link assistive-text" href="#content"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>

<div id="page" class="hfeed site">

	<header class="osm-site-header" role="banner">
		<div class="osm-header-inner">

			<a class="osm-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/osm-logo.png" width="40" height="40" alt="OpenStreetMap logo" />
				<span class="osm-title">
					<?php bloginfo( 'name' ); ?>
					<?php $desc = get_bloginfo( 'description', 'display' ); if ( $desc ) : ?><span><?php echo esc_html( $desc ); ?></span><?php endif; ?>
				</span>
			</a>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php _e( 'Menu', 'twentytwelve' ); ?>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'nav-menu',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<button id="osm-theme-toggle" class="osm-theme-toggle" type="button" aria-pressed="false" aria-label="<?php esc_attr_e( 'Switch to dark mode', 'twentytwelve' ); ?>" title="<?php esc_attr_e( 'Switch to dark mode', 'twentytwelve' ); ?>">
				<svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4.2"/><path d="M12 2v2.5M12 19.5V22M2 12h2.5M19.5 12H22M4.9 4.9l1.8 1.8M17.3 17.3l1.8 1.8M19.1 4.9l-1.8 1.8M6.7 17.3l-1.8 1.8"/></svg>
				<svg class="icon-moon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M21 12.8A8.5 8.5 0 1 1 11.2 3a6.8 6.8 0 0 0 9.8 9.8Z"/></svg>
			</button>

			<?php if ( wp_count_posts()->publish > 0 ) : ?>
			<a class="osm-rss" href="<?php echo esc_url( get_bloginfo( 'rss2_url' ) ); ?>" title="<?php esc_attr_e( 'Subscribe via RSS', 'twentytwelve' ); ?>">
				<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 11a9 9 0 0 1 9 9h2.5A11.5 11.5 0 0 0 4 8.5V11Zm0 4a5 5 0 0 1 5 5h2.5A7.5 7.5 0 0 0 4 12.5V15Zm1.5 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/></svg>
				<span class="label"><?php _e( 'RSS', 'twentytwelve' ); ?></span>
			</a>
			<?php endif; ?>

		</div><!-- .osm-header-inner -->
	</header><!-- .osm-site-header -->

	<?php if ( ( is_home() || is_front_page() ) && ! is_paged() ) : ?>
	<section class="osm-hero" aria-label="<?php esc_attr_e( 'Welcome', 'twentytwelve' ); ?>">
		<div class="osm-hero-inner">
			<span class="osm-eyebrow"><?php _e( 'OpenStreetMap', 'twentytwelve' ); ?></span>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php if ( get_bloginfo( 'description', 'display' ) ) : ?>
				<p><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<?php endif; ?>

	<div id="main" class="wrapper">
