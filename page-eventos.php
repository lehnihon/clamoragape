<?php
get_header(); ?>

<div id="content">
	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="wow fadeInUp small">Eventos</h1>
				</div>
			</div><br>
			<?php
			$query = new WP_Query(array('post_type' => 'post'));
			while ( $query->have_posts() ) : $query->the_post();
			?>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<?php the_post_thumbnail('',array('class' => "e-cinza img-responsive")); ?>
				</div>
			</div><br>
			<?php endwhile; ?>
		</div>	
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
<script>
$('.slider1').bxSlider({
    slideWidth: 2000,
    minSlides: 4,
    maxSlides: 4,
    infiniteLoop: false,
    slideMargin: 10,
    pager: false
});

</script>