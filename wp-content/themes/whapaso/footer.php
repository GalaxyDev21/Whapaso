<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center bg-white text-muted">

		<section class="footer-widgets text-left">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-1-area mb-2">
								<?php dynamic_sidebar( 'footer-1' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-2-area mb-2">
								<?php dynamic_sidebar( 'footer-2' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-3-area mb-2">
								<?php dynamic_sidebar( 'footer-3' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-4-area mb-2">
								<?php dynamic_sidebar( 'footer-4' ); ?>
							</aside>
						</div>
					<?php endif; ?>
				</div>
				<!-- /.row -->
			</div>
		</section>

		<div class="footer text-center">
			<img src="/wp-content/uploads/2018/11/logo_sm_wh.png" alt="logo" class="mt-5 mb-3">
			<div class="social">
				<a href="https://twitter.com/whapaso" target="_blank"><i class="icofont-twitter"></i></a> 
				<a href="https://www.facebook.com/Whapaso-2191910221027232/" target="_blank"><i class="icofont-facebook"></i></a> 
				<a href="https://www.instagram.com/whapaso/" target="_blank"><i class="icofont-instagram"></i></a> 
			</div>
			<p class="text-muted m-0 p-2">© Copyright 2018 - Whapaso. All Rights Reserved </p>
		</div>
		</div>
		<!-- /.container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
