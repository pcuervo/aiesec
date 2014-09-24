<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script src="//use.typekit.net/faa0xbx.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container ">
			<header class="margin-bottom">
				<div class="width clearfix">
					<h1 class="columna xmall-10 medium-8 large-5 left logo">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php echo THEMEPATH; ?>images/logo.png" alt="" />
						</a>
					</h1>
					<div class="columna xmall-1 right no-large" id="btn-movil">
						<a href="#"><i class="fa fa-bars"></i></a>
					</div>
					<div class="clear margin-bottom"></div>
					<nav class=" width navegacion menu-movil columna no-xmall no-large margin-bottom">
						<ul>
							<li><a href="<?php echo site_url('acerca'); ?>">Acerca</a></li>
							<li><a href="<?php echo site_url('involucramientos'); ?>">Involucramiento</a></li>
							<li><a href="">Noticias <i class="fa fa-caret-down"></i></a>
								<ul>
									<li><a href="<?php echo site_url('tipos-de-noticias/noticias'); ?>">Noticias</a></li>
									<li><a href="<?php echo site_url('tipos-de-noticias/eventos'); ?>">Eventos</a></li>
									<li><a href="https://www.smore.com/ynu26-reporte-final-de-reclutamiento" target="_blank">Newsletter</a></li>
									<li><a href="<?php echo site_url('tipos-de-noticias/oportunidades-de-negocio'); ?>">Oportunidades de negocio</a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url('tipos-de-noticias/galerias'); ?>">Galerías</a></li>
							<li><a href="<?php echo site_url('contacto'); ?>">Contacto </a></li>
							<li><a href="http://aiesec.org.mx/reg_alumni/">Login </a></li>
						</ul>
					</nav><!--MENU MOVIL-->
					<nav class="menu-desktop columna no-xmall no-medium large large-9">
						<ul class="span">
							<li><a href="<?php echo site_url('acerca'); ?>">Acerca </a></li>
							<li class=""><a href="<?php echo site_url('involucramientos'); ?>">Involucramiento</a></li>
							<li><a href="">Noticias <i class="fa fa-caret-down"></i></a>
								<ul class="submenu-200">
									<li><a href="<?php echo site_url('tipos-de-noticias/noticias'); ?>">Noticias</a></li>
									<li><a href="<?php echo site_url('tipos-de-noticias/eventos'); ?>">Eventos</a></li>
									<li><a href="https://www.smore.com/ynu26-reporte-final-de-reclutamiento" target="_blank">Newsletter</a></li>
									<li><a href="<?php echo site_url('tipos-de-noticias/oportunidades-de-negocio'); ?>">Oportunidades de negocio</a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url('tipos-de-noticias/galerias'); ?>">Galerías</a></li>
							<li><a href="<?php echo site_url('contacto'); ?>">Contacto </a></li>
							<li><a href="http://aiesec.org.mx/reg_alumni/">Login </a></li>
						</ul>
					</nav><!--MENU DESKTOP-->
					<form action="/" class="clearfix forma-busqueda columna xmall-8 medium-4 large-3 right margin-bottom">
						<input class="span xmall-10" type="text" placeholder="Buscar">
						<button class="span xmall-2" type="submit"><i class="fa fa-search"></i></button>
					</form>
					<div class="clear no-xmall medium"></div>
					<button class="columna xmall-4 no-medium right" type="submit"><a href="">Log in <i class="fa fa-user"></i></a></button>
				</div>
			</header>

			<div class="width clearfix">