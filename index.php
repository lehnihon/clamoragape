<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<div class="col-md-12">
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<h1 class="small wow fadeInUp">Ministério Evangélico Clamor Ágape</h1>
					<h3 class="wow fadeInUp">Levando a palavra de Deus de uma forma descontraída e edificante.</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="servicos">
		<div class="container">
			<div class="row">
                <div class="col-md-4 wow fadeInLeft">   
                    <a href="<?php echo home_url( '/' )."lideranca"; ?>" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape 01.jpg"; ?>" />
                    </a><br>
                    <h4>Conheça nossa liderança</h4><br>
                    <a href="<?php echo home_url( '/' )."lideranca"; ?>" class="btn-confira" title="#">
                    	saiba mais
                    </a>
                </div>
                <div class="col-md-4 wow fadeInUp">   
                    <a href="<?php echo home_url( '/' )."fotos"; ?>" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape 02.jpg"; ?>" />
                    </a><br>
                    <h4>Fotos da Igreja Clamor Ágape</h4><br>
                    <a href="<?php echo home_url( '/' )."fotos"; ?>" class="btn-confira" title="#">
                    	saiba mais
                    </a>
                </div>
                <div class="col-md-4 wow fadeInRight">   
                    <a href="#" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape 03.jpg"; ?>" />
                    </a><br>
                    <h4>Faça parte dos nossos grupos</h4><br>
                    <a href="#" class="btn-confira" title="#">
                    	saiba mais
                    </a>
                </div>
			</div>
		</div>		
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h2 class="wow fadeInUp">Ministério Evanglélico Clamor Ágape</h2>
					<p class="wow fadeInUp">Conheça a origem do <strong>Ministério Evangélico Clamor Ágape.</strong><br>
						Em abril 2012 ouvi o chamado do Senhor me dizendo: “Davi vai 
						fazer a minha obra”. Em Agosto comecei a fazer culto nos lares, 
						em especial na casa do sr Adhemar e Sra Rosenete, ficamos 
						fazendo cultos durante alguns meses naquele lugar abençoado.
					</p>
					<p class="wow fadeInUp">No final do mês de Setembro de 2013, comecei a fazer os cultos 
					na garagem da casa em que morava na Rua Ecologia, Jardim 
					Imperador. 
					</p>
					<ul class="wow fadeInUp">
						<li>MECA Jovem e MECA Kids</li>
						<li>MECA Louvor</li>
						<li>MECA Artes</li>
						<li>VMECA Mulheres e MECA Homens</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."sobre"; ?>" class="wow fadeInUp btn-confira btn-azul margin-responsivo">saiba mais</a>
				</div>
				<div class="col-md-6 text-left wow fadeInUp">
					<div class="fotos-sobre row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape 04.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape 05.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape 06.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape 07.jpg"; ?>"/>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</section>

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps wow fadeInUp">
				<div class="col-md-12">
					<h2 class="branco">Nossa localização</h2>
					<p>
						Rua Mainhumirim, 22 - Bairro IV Centenário - São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 1234-5678  <strong>Email.: </strong>contato@clamoragape.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid wow fadeIn">
			<div class="row">
				<div class="col-md-12 videoWrapper">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.393505620972!2d-46.50187428452852!3d-23.590216384668544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6796f72e2a57%3A0x40341fa02351142a!2sR.+Manhumirim%2C+22+-+Jardim+Imperador+(Zona+Leste)%2C+S%C3%A3o+Paulo+-+SP%2C+03934-100!5e0!3m2!1spt-BR!2sbr!4v1489424188101" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
