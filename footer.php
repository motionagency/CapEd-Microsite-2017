<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CapEd
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 caped-footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="swoop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/caped-logo.svg" alt="Capital Education"></a>
				</div>
				<div class="col-lg-6">
					<nav class="footer-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
				</div>
				<div class="col-lg-3">
					<div class="social-media">
						<ul>
							<li><a href="https://www.facebook.com/pages/Capital-Education-LLC/602760526488330?rf=641595789229559" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
							<li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
							<li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
							<li><a href="https://www.linkedin.com/company/capital-education-llc" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></a></i></li>
							<li><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<small class="copyright">&copy; <?php echo date('Y'); ?> by Capital Education, LLC. All rights reserved.</small>
				</div>

			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
