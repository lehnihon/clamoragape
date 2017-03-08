	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="branco">MECA Ora</h2>
						<h5>Deixe seu nome e email para nossa oração.</h5>
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); } ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; Copyright <?php echo date('Y') ?> -  Ministério Evangélico Clamor Ágape   | <a target="_blank" href="https://www.facebook.com/seimidigital/?ref=ts&fref=ts">Site desenvolvido pela Seimi Digital</a>
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
