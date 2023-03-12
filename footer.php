<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Global_Machinery
 */

?>
	<!--====== Start Footer ======-->
	<footer id="colophon" class="footer-area footer-area-v1 bg_cover site-footer">
		<div class="footer-widget pt-120 pb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="widget about-widget mb-40">
							<p>Lorem ipsum lipsum as is sometimes
								known dummy text used laying the
								century who is thought.</p>
							<ul class="social-link">
								<li><a href="#"><i class="icofont-facebook"></i></a></li>
								<li><a href="#"><i class="icofont-twitter"></i></a></li>
								<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								<li><a href="#"><i class="icofont-skype"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="widget widget-categories mb-40">
							<h4 class="widget-title">Quick Link</h4>
							<ul class="widget-link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Blog Post</a></li>
								<li><a href="#">Guidelines</a></li>
								<li><a href="#">Contact </a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="widget newsletter-widget mb-40">
							<h4 class="widget-title">Subscribe Now</h4>
							<div class="newsletter-form mb-20">
								<form>
									<div class="form_group">
										<input type="email" class="form_control" placeholder="support24@gmail.com" name="email">
										<button class="newsletter-btn"><i class="icofont-arrow-right"></i></button>
									</div>
								</form>
							</div>
							<div class="newsletter-info">
								<h5>Give us a free call:</h5>
								<p><a href="tel:+1800456324">(+1) 800 456324</a> or <a href="tel:+1555456325">(+1) 555 456325</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="widget instragram-widget mb-40">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="row justify-content-center text-white">
					<div class="col-md-6 text-center text-md-left mb-3 mb-md-0 copyright-text">
						<span><?php echo _e( 'Derechos reservados por', 'global-machinery' ); ?> @<a href="<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo( );  ?></a> 2009 - 
						<?php
							echo date_i18n(
									/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
									_x( 'Y', 'copyright date format', 'global-machinery' )
							);
						?></span>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
						<span><?php echo _e( 'Diseño realizado por', 'global-machinery' ); ?> <a href="https://devitm.com/">DevITM</a></span>
                    </div>
				</div>
			</div>
		</div>
	</footer><!--====== End Footer ======-->
	<!--====== back-to-top ======-->
	<a href="#" class="back-to-top" ><i class="flaticon-up-arrow-angle"></i></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
