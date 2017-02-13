<?php
/**
 * Footer
 *
 * @package BuildPress
 */

$footer_widgets_num = (int)get_theme_mod( 'footer_widgets_num', 3 );

?>
	<footer role="contentinfo">
		<?php if ( $footer_widgets_num > 0 ) : ?>
			<div class="footer">
				<div class="container">
					<div class="row">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
				<div class="col-md-4 footer-bottom__left">
					<?php

						if ( has_nav_menu( 'footer-bottom-menu' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'footer-bottom-menu',
								'container'      => false,
								'menu_class'     => 'navigation--footer'
							) );
						}
					?>
				</div>
				<div class="col-md-4 footer-bottom__center">
				
						<?php echo apply_filters( 'buildpress/footer_right_txt', get_theme_mod( 'footer_right_txt', '&copy; ' . date( 'Y' ) . ' <strong>BuildPress, LCC</strong>. All rights reserved.' ) ); ?>
				
				</div>
				<div class="col-md-4 footer-bottom__right">
					<?php
							echo apply_filters( 'buildpress/footer_left_txt', get_theme_mod( 'footer_left_txt', '<a href="https://www.proteusthemes.com/wordpress-themes/buildpress/">BuildPress Theme</a> By ProteusThemes.' ) );
					?>
				</div>
				</div>
			</div>
		</div>
	</footer>
	</div><!-- end of .boxed-container -->


	<?php wp_footer(); ?>
	</body>
</html>