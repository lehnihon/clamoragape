<?php
get_header(); ?>

<div id="content">
	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="wow fadeInUp small">Fotos</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
					?>
				</div>
			</div>	
		</div>	
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
