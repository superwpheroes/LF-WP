<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
					<?php do_action( 'avada_after_main_content' ); ?>

				</div>  <!-- fusion-row -->
			</div>  <!-- #main -->
			<?php do_action( 'avada_after_main_container' ); ?>

			<?php global $social_icons; ?>

			<?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) : ?>
				</div>
			<?php endif; ?>

			<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->fusion_library->get_page_id();
			?>

			<?php
			/**
			 * Only include the footer.
			 */
			?>
			<?php if ( ! is_page_template( 'blank.php' ) ) : ?>

                <?php
                if ( has_action( 'avada_render_footer' ) ) {
                    do_action( 'avada_render_footer' );
                } else {
                    Avada()->template->render_footer();
                }
                ?>
				<?php $footer_parallax_class = ( 'footer_parallax_effect' == Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

				<div class="fusion-footer<?php echo esc_attr( $footer_parallax_class ); ?>">

					<?php
					/**
					 * Check if the footer widget area should be displayed.
					 */
					$display_footer = get_post_meta( $c_page_id, 'pyre_display_footer', true );
					?>
					<?php if ( is_single() || ( Avada()->settings->get( 'footer_widgets' ) && 'no' !== $display_footer ) || ( ! Avada()->settings->get( 'footer_widgets' ) && 'yes' === $display_footer ) ) : ?>
						<?php $footer_widget_area_center_class = ( Avada()->settings->get( 'footer_widgets_center_content' ) ) ? ' fusion-footer-widget-area-center' : ''; ?>
					<?php endif; // End footer wigets check. ?>

					<?php
					/**
					 * Check if the footer copyright area should be displayed.
					 */
					$display_copyright = get_post_meta( $c_page_id, 'pyre_display_copyright', true );
					?>
					<?php if ( ( Avada()->settings->get( 'footer_copyright' ) && 'no' !== $display_copyright ) || ( ! Avada()->settings->get( 'footer_copyright' ) && 'yes' === $display_copyright ) ) : ?>
						<?php $footer_copyright_center_class = ( Avada()->settings->get( 'footer_copyright_center_content' ) ) ? ' fusion-footer-copyright-center' : ''; ?>

						<footer id="footer" class="fusion-footer-copyright-area<?php echo esc_attr( $footer_copyright_center_class ); ?>">
							<div class="fusion-row">
								<div class="fusion-copyright-content">

									<?php
									/**
									 * Footer Content (Copyright area) avada_footer_copyright_content hook.
									 *
									 * @hooked avada_render_footer_copyright_notice - 10 (outputs the HTML for the Theme Options footer copyright text)
									 * @hooked avada_render_footer_social_icons - 15 (outputs the HTML for the footer social icons)..
									 */
									do_action( 'avada_footer_copyright_content' );
									?>

								</div> <!-- fusion-fusion-copyright-content -->
							</div> <!-- fusion-row -->
						</footer> <!-- #footer -->
					<?php endif; // End footer copyright area check. ?>
					<?php
					// Displays WPML language switcher inside footer if parallax effect is used.
					if ( defined( 'ICL_SITEPRESS_VERSION' ) && 'footer_parallax_effect' === Avada()->settings->get( 'footer_special_effects' ) ) {
						global $wpml_language_switcher;
						$slot = $wpml_language_switcher->get_slot( 'statics', 'footer' );
						if ( $slot->is_enabled() ) {
							echo wp_kses_post( $wpml_language_switcher->render( $slot ) );
						}
					}
					?>
				</div> <!-- fusion-footer -->
			<?php endif; // End is not blank page check. ?>
		</div> <!-- wrapper -->

		<?php
		/**
		 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
		 */
		$page_bg_layout = ( $c_page_id ) ? get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) : 'default';
		?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'Top' !== Avada()->settings->get( 'header_position' ) ) : ?>
			</div> <!-- #boxed-wrapper -->
		<?php endif; ?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) && 0 !== intval( Avada()->settings->get( 'margin_offset', 'top' ) ) ) : ?>
			<div class="fusion-top-frame"></div>
			<div class="fusion-bottom-frame"></div>
			<?php if ( 'None' !== Avada()->settings->get( 'boxed_modal_shadow' ) ) : ?>
				<div class="fusion-boxed-shadow"></div>
			<?php endif; ?>
		<?php endif; ?>
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>

		<?php wp_footer(); ?>

		<?php
		/**
		 * Echo the scripts added to the "before </body>" field in Theme Options.
		 * The 'space_body' setting is not sanitized.
		 * In order to be able to take advantage of this,
		 * a user would have to gain access to the database
		 * in which case this is the least on your worries.
		 */
		// @codingStandardsIgnoreLine
		echo Avada()->settings->get( 'space_body' );
		?>

		<!--[if lte IE 8]>
		        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.js"></script>
		<![endif]-->
		<div class="modal fullscreen" id="mobile-menu-modal"  tabindex="-1" role="dialog" aria-labelledby="MobileMenuLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close btn btn-link" data-dismiss="modal" aria-hidden="true"></button>
		            </div>
		            <div class="modal-body text-center">
                        <div class="logoinmenu">
                            <a class="mobile-menu-home-url" href="<?php echo home_url(); ?>"></a>
                        </div>
		                <div class="custom-menu-content"></div>
		            </div>
		        </div>
		    </div>
		</div>
	</body>
</html>
