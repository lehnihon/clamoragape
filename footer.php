	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="branco">MECA Ora</h2>
						<h5>Deixe seu nome e email para nossa oração.</h5>
						<?php echo do_shortcode('[contact-form-7 id="24" title="News"]'); ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; Copyright <?php echo date('Y') ?> -  Ministério Evangélico Clamor Ágape   | 					
						<a target="_blank" href="http://www.facebook.com/seimidigital">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
						</a>
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
