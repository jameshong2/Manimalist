			<div class="container">
				<div class="row main-bottom">

					<div class="col-md-6 bottom-widget">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
					</div>
					<div class="col-md-6 social-links">
						<p>
							<h3>Follow us</h3>
							<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
							<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
							<a href="https://www.instagram.com/manimalistau/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
							<i class="fa fa-tumblr fa-2x" aria-hidden="true"></i>
						</p>
					</div>

				</div>
			</div>

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container">
					<div class="row">

						<div class="footer-menu col-sm-12 text-right"><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></div>

						<!-- copyright -->
						<p class="copyright col-sm-12 text-right">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
						</p>
						<!-- /copyright -->

					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-90707798-1', 'auto');
			ga('send', 'pageview');

		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

	</body>
</html>
