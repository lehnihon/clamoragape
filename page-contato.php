<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="small">Contato</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php echo do_shortcode('[contact-form-7 id="23" title="Contato"]'); ?>
				</div>
				<div class="col-md-6 text-left ">
					<br>
					<div class="videoWrapperb">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.393505620972!2d-46.50187428452852!3d-23.590216384668544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6796f72e2a57%3A0x40341fa02351142a!2sR.+Manhumirim%2C+22+-+Jardim+Imperador+(Zona+Leste)%2C+S%C3%A3o+Paulo+-+SP%2C+03934-100!5e0!3m2!1spt-BR!2sbr!4v1489424188101" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		</div>
					<div class="quadro">
					<p>
						Rua Mainhumirim, 22 - Bairro IV Centenário - São Paulo - SP
					</p>
					<p>
						11 1234-5678 
					</p>
					<p>contato@clamoragape.com.br</p>							
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
