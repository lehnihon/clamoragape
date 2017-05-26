<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/jpeg" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Ministerio Evangelico Clamor Agape.png"; ?>" />
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-offset-9">
						<ul class="redes_sociais_header">
							<li class="youtube"><a target="_blank" href="https://www.facebook.com/mecagape/?fref=ts"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="https://www.instagram.com/m.e.c.a.insta/"></a></li>
							<li class="facebook"><a target="_blank" href="https://www.youtube.com/channel/UCBJ-iQdlaBPh0i99AAlvn7Q"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.jpg"; ?>" /></a>
					</div>
					<div class="col-md-8 col-md-offset-1">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
							<li><a href="<?php echo home_url( '/' ); ?>">Início</a></li
							><li><a href="<?php echo home_url( '/' )."sobre"; ?>">História</a></li
							><li><a href="<?php echo home_url( '/' )."grupos"; ?>">Grupos</a></li
							><li><a href="<?php echo home_url( '/' )."lideranca"; ?>">Pastores</a></li
							><li><a href="<?php echo home_url( '/' )."eventos"; ?>">Eventos</a></li
							><li><a href="<?php echo home_url( '/' )."fotos"; ?>">Fotos</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">Contato</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">Contato</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."fotos"; ?>">Fotos</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."eventos"; ?>">Eventos</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."lideranca"; ?>">Pastores</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."grupos"; ?>">Grupos</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">Hístória</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Início</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>


