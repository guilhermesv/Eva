<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eva
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eva' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'eva' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/imagens/eva-logo-temp.jpg') ?>" alt="Logo eva">
			</a>
		</div><!-- .site-branding -->

		<?php if ( is_active_sidebar( 'widget-header-1' ) ): ?>
			<div id="widget-header-1" class="widget-area">
				<?php dynamic_sidebar( 'widget-header-1' ); ?>
			</div><!-- #widget-header-1 -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'widget-header-2' ) ): ?>
			<div id="widget-header-2" class="widget-area">
				<?php dynamic_sidebar( 'widget-header-2' ); ?>
			</div><!-- #widget-header-2 -->
		<?php endif; ?>

	</header><!-- #masthead -->
