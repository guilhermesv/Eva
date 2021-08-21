<?php
/**
 * Template para exibir os arquivos das edições
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eva
 */

get_header();
?>

	<main id="primary" class="site-main">

	<nav id="archive-navigation" class="archive-navigation">
			<button class="menu-toggle" aria-controls="arquivo-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'eva' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'arquivo-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<?php if ( have_posts() ) : ?>

      <div class="fichas-lista">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'ficha' );

			endwhile; ?>

      </div><!-- .fichas-lista -->

      <?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
