<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eva
 */

?>
	
	<?php if( get_field('mostrar_rodape') ): ?>
		<footer id="colophon" class="site-footer">

			<?php if ( is_active_sidebar( 'widget-footer-1' ) ): ?>
				<div id="widget-footer-1" class="widget-area">
					<?php dynamic_sidebar( 'widget-footer-1' ); ?>
				</div><!-- #widget-footer-1 -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'widget-footer-2' ) ): ?>
				<div id="widget-footer-2" class="widget-area">
					<?php dynamic_sidebar( 'widget-footer-2' ); ?>
				</div><!-- #widget-footer-2 -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'widget-footer-3' ) ): ?>
				<div id="widget-footer-3" class="widget-area">
					<?php dynamic_sidebar( 'widget-footer-3' ); ?>
				</div><!-- #widget-footer-3 -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'widget-footer-4' ) ): ?>
				<div id="widget-footer-4" class="widget-area">
					<?php dynamic_sidebar( 'widget-footer-4' ); ?>
				</div><!-- #widget-footer-4 -->
			<?php endif; ?>

		</footer><!-- #colophon -->
	<?php endif;?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
