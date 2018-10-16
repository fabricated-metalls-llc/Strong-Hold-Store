<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>
<?php

$shapely_transparent_header         = get_theme_mod( 'shapely_transparent_header', 0 );
$shapely_transparent_header_opacity = get_theme_mod( 'shapely_sticky_header_transparency', 100 );

if ( 1 == $shapely_transparent_header && $shapely_transparent_header_opacity ) {
	if ( $shapely_transparent_header_opacity < 100 ) {
		$style = 'style="background: rgba(255, 255, 255, 0.' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	} else {
		$style = 'style="background: rgba(255, 255, 255, ' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	}
} else {
	$style = '';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>

	<header id="masthead" class="site-header<?php echo get_theme_mod( 'mobile_menu_on_desktop', false ) ? ' mobile-menu' : ''; ?>" role="banner">
		<div class="nav-container">
			<nav <?php echo $style; ?> id="site-navigation" class="main-navigation" role="navigation">
				<div class="container nav-bar">
					<div class="flex-row">
						<div class="module left site-title-container">
							<?php //shapely_get_header_logo(); ?>

							<a href="https://www.strong-hold.com/" class="custom-logo-link" rel="home" itemprop="url"><img width="150" height="60" src="/wp-content/uploads/2018/07/cropped-logo-w-slogan-1-300x120.png" class="custom-logo logo" alt="Strong Hold Store" itemprop="logo" srcset="/wp-content/uploads/2018/07/cropped-logo-w-slogan-1-300x120.png 300w, /wp-content/uploads/2018/07/cropped-logo-w-slogan-1.png 400w" sizes="(max-width: 150px) 100vw, 150px"></a>

						</div>
						<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
							<i class="fa fa-bars"></i>
						</div>
						<div class="module-group right">
							<div class="module left">
								<?php shapely_header_menu(); ?>
							</div>
							<!--end of menu module-->
							<div class="module widget-handle search-widget-handle hidden-xs hidden-sm">
								<div class="search hidden-sm hidden-xs">
									<i class="fa fa-search"></i>
									<span class="title"><?php esc_html_e( 'Site Search', 'shapely' ); ?></span>
								</div>
								<div class="function">
									<?php
									get_search_form();
									//echo do_shortcode('[yith_woocommerce_ajax_search]');
									?>
								</div>
							</div>
						</div>
						<!--end of module group-->
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<div id="content" class="main-container">
		<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>
			<div class="header-callout">
				<?php shapely_top_callout(); ?>
			</div>
		<?php endif; ?>

		<h3 align="center" class="shipping">FREE SHIPPING ON ALL PRODUCTS</h3>
		<section class="content-area <?php echo ( get_theme_mod( 'top_callout', true ) ) ? '' : ' pt0 '; ?>">
			<div id="main" class="<?php echo ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_page_template( 'page-templates/template-widget.php' ) ) ? 'container' : ''; ?>" role="main">
