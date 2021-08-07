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

	<!-- CSS customizado -->
	<style>
		:root {
			--cor-conteudo-texto: <?php the_field('cor-conteudo-texto'); ?>;
			--cor-conteudo-fundo: <?php the_field('cor-conteudo-fundo'); ?>;
			--cor-estrutural-texto: <?php the_field('cor-estrutural-texto'); ?>;
			--cor-estrutural-fundo: <?php the_field('cor-estrutural-fundo'); ?>;
		}

		body {

			<?php if(get_field('conteudo-fundo-imagem')) : 
				$imagem = get_field('conteudo-fundo-imagem');
				echo 'background-image: url("' . $imagem . '");';
			endif;?>

			<?php if(get_field('conteudo-fundo-imagem-capa')) : 
				$imagem = get_field('conteudo-fundo-imagem-capa');
				echo 'background-size: cover;';
			endif;?>
		}
	</style>
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
			
			<svg overflow="visible" class="marca" viewBox="0 0 64 38" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
				<path d="m18.1 35c-1.2 1.3-2.7 1.5-4.4 1.4-1.2-0.1-2.3-0.1-3.5 0-2.2 0.2-3.9-0.7-5.3-2.3-1.8-2-3.1-4.3-2.9-7.1 0.1-2.4 1.1-4.4 2.5-6.3 1.1-1.5 2.5-2.6 4.2-3.2 0.8-0.3 0.8-0.6 0.7-1.5-0.5-3.1 0-6 2.4-8.3 2.2-2.2 4.7-3.9 7.8-4.8 1-0.3 2-0.8 3.1-1.1 1.8-0.5 3.6-0.2 3.4 2.7-0.1 1.5-0.6 2.7-1.9 3.6-0.5 0.3-0.7 0.1-0.9-0.2-0.7-1-0.6-1.8 0.3-2.8 0.1-0.1 0.2-0.1 0.2-0.2 0.1-0.1 0.1-0.3 0.2-0.4-0.2 0-0.3-0.1-0.5-0.1-3.2 1-6.5 1.9-8.9 4.3-1.2 1.2-2.6 2.1-2.9 3.9-0.2 0.9-0.4 1.7-0.5 2.6-0.1 1.1 0 1.2 1.1 1.6 0.7 0.3 1.4 0.5 1.6 1.4 0.3 1.2 0.1 1.6-1.1 1.5-1.5 0-2.9 0.4-4.3 1.1-2.5 1.1-3.5 3.2-4.1 5.5-0.4 1.5-0.7 3.1 0.3 4.6 1.1 1.6 2.4 3 4.7 2.8 1.3-0.1 2.7-0.1 4 0 1.2 0.1 2.3-0.2 3.3-0.8 0.7-0.4 1.4-0.8 2.2-1.1 1.7-0.6 2.3-1.9 2.5-3.5 0.1-0.6 0.8-1.3 0-1.8-0.7-0.5-1.1 0.1-1.7 0.4-0.2 0.1-0.9 0.9-1.3 0s-0.5-1.7 0.1-2.1c0.9-0.5 1.4-1.3 2-2.1 1.5-1.9 5-2.3 6.9-0.9 0.7 0.5 1 1.2 1.2 1.9 0.4 1.1 0.8 2.2 0.8 3.3 0.1 1.8 0.8 2.8 2 2.7 1.5 0 3-0.3 4.2-1.5 0.4-0.5 0.4-0.6-0.2-0.9-1.4-0.5-1.4-0.6-1.4-1.8 0-0.7 0.2-1 1-1 1.5 0 3 0 4.5-0.3 2-0.3 4-0.7 5.9-1.3 1.4-0.4 2.9-0.6 4.2-1.4 0.5-0.3 1.1-0.2 1.5 0.3 0.6 0.8 1.3 1.4 2.2 1.9 0.1 0.1 0.2 0.2 0.4 0.3 0.5 0.3 0.3 1.1 0.7 1.2 0.6 0.2 0.5-0.8 1-0.9 0.5 0 0.9-0.1 1.2 0.5 0.7 1.4 2.2 1.5 3.5 1.6 0.6 0.1 1.2-0.3 1.6 0.3 0.4 0.5 0.4 1.3 0 1.7s-1 1-1.9 0.7c-1.3-0.1-2.7-0.2-3.8-1.1-0.4-0.3-0.5-0.3-0.9 0.1-1.2 1.2-2.5 2.2-4.3 2.6-3.1 0.8-3 0.2-5-2-0.4-0.5-0.8-1.1-0.9-1.8-0.1-0.6-0.6-0.9-1.1-0.7-1.5 0.5-3 0.7-4.5 0.8-0.8 0-1.2 0.2-1.3 1.1-0.1 0.6-0.5 1.2-0.6 1.9-0.1 0.5-0.4 0.7-0.8 0.8-1 0.5-2.1 0.9-3.1 1.3-0.8 0.3-1.9 0.4-2.9 0-0.9-0.4-1.6-1-2-1.9-0.6-1.4-1.2-2.8-1.4-4.4-0.2-2.1-1.1-2.6-3.1-2.1-0.2 0-0.3 0.1-0.4 0.2-0.4 0.2-1.1-0.2-1.3 0.3s0.4 0.9 0.5 1.4c0.4 2.2 0.5 4.5-0.6 6.6-0.3 0.6-0.7 1.4-1.7 1.3-0.1 1-1.1 1-1.7 1.5-0.1 0.1-0.3 0-0.5 0 0-0.1-0.1-0.2-0.1-0.2-0.2-0.1-0.2 0.1-0.2 0.2zm32.5-10c-1.5 0.1-2.4 1.1-3.3 2.1-0.2 0.2 0 0.4 0.1 0.6 0.3 0.4 0.7 0.7 1.2 0.7 1.1 0.1 2.2-0.4 3.2-0.7 1.2-0.4 1.3-0.9 0.6-1.9-0.5-0.7-1-0.9-1.8-0.8z"/>
				<path d="m18.4 35c0 0.1 0 0.3-0.2 0.2-0.1 0-0.1-0.2-0.1-0.2h0.3z"/>
			</svg>

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
