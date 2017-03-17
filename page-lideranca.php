<?php
get_header(); ?>

<div id="content">
	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="wow fadeInUp small">Liderança</h1>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-7">
					<img class="img-responsive img-principal" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape Pastores 01.jpg"; ?>">
					<div class="slider1">
						<div class="slide"><img class="img-slide img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape Pastores 01.jpg"; ?>"></div>
						<div class="slide"><img class="img-slide img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape Pastores 02.jpg"; ?>"></div>
						<div class="slide"><img class="img-slide img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape Pastores 03.jpg"; ?>"></div>
						<div class="slide"><img class="img-slide img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape Pastores 04.jpg"; ?>"></div>
						<div class="slide"><img class="img-slide img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape Pastores 05.jpg"; ?>"></div>
						<div class="slide"><img class="img-slide img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape Pastores 06.jpg"; ?>"></div>
					</div>
				</div>
				<div class="col-md-5 text-left">
					<h4>Conheça nossa liderança</h4><br>
					<p>
						<strong>Pastores (a):</strong><br>
						David Freitas Salgado<br>
						Maria Anunciata de Freitas Salgado<br>
						(Nany)
					</p>
					<p>
						<strong>Presbíteros:</strong><br>
						Reginaldo<br>
						Marcelo<br>
						Francisco<br>
						Rogério
					</p>
					<p>
						<strong>Evangelistas:</strong><br>
						Sidney<br>
						Rosemary<br>
						Sandra<br>
						Vânia
					</p>
					<p>
						<strong>Cooperadores (a):</strong><br>
						Jean<br>
						Juliana<br>
						Sônia
					</p>
					<p>
						<strong>Diácono (a):</strong><br>
						Luiz<br>
						Rose<br>
						Alessandra
					</p>
				</div>
			</div>	
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