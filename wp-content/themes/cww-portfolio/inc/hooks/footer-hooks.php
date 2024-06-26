<?php 
/**
* Functions & definations for theme footer
*
*
*/

add_action('cww_portfolio_footer','cww_portfolio_copyright', 10 );

if( ! function_exists('cww_portfolio_copyright')):
	function cww_portfolio_copyright(){

		$cww_footer_text = get_theme_mod('cww_footer_text');

		?>
		<footer id="colophon" class="site-footer">
			<div class="container cww-flex">
			<?php do_action('cww_portfolio_social_icons'); ?>
			<div class="site-info cww-flex">
				<?php if($cww_footer_text){ ?>
					<div class="footer-copyright"><?php echo wp_kses_post($cww_footer_text);?></div>
				<?php }else{ ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cww-portfolio' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'cww-portfolio' ), 'WordPress' );
					?>
				</a>
				<?php } ?>
			</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->
		<?php 
	}
endif;