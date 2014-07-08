<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
				
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

<!-- 						<a class="navbar-brand" title="<?php //echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
 -->					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

						
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->

		
			<div class="row" id="header">
				<div class="container">
					<figure id="logo">
						<img src="<?php bloginfo('template_directory'); ?>/images/topdeseo/logoTOP.png" alt="" width="300" height="180">
					</figure>
					<h2 class="subtitulo">Consigue estar en la primera página de Google</h2>
				</div>
				
			</div>
		
		
		<div class="container">			
			
			<div class="row col-sm-12 col-md-8 col-md-offset-2 clearfix">
				<div class="col-sm-12 centered" id="boton_container">					
					<button type="button" class="btn btn-lg btn-primary" id="juega">Juega Ya!</button>
				</div>
				<p>TÔP es un juego que además de divertirte, te ayudará a aparecer en Google entre los primeros. Está basado en la antigua cultura egípcia, donde tú eres el faraón y tendrás que construir tu propia pirámide.</p>
				<p>Para poder construir la pirámide, necesitarás ir completando las misiones que te propongan los personajes del juego. Cada nueva misión completada, es un escalón más hacia los primeros puestos en Google. (+)</p>

			</div>

    
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h3 class="titulo_papiro">Ultimas noticias</h3>
					<article>
						<h4>Titulo de la noticia</h4>
						<p>resumen de la noticia extraida del blog</p>
					</article>
					<article>
						<h4>Titulo de la noticia</h4>
						<p>resumen de la noticia extraida del blog</p>
					</article>
					<article>
						<h4>Titulo de la noticia</h4>
						<p>resumen de la noticia extraida del blog</p>
					</article>
				</div>
				<div class="col-lg-8">
					 <section id="sistema_diapo" class="gradient">
					 	<h3 class="titulo_papiro">El Juego</h3>
					 	<article class="diapo diapo_1">
							<h3>Evolución de indicadores</h3>
							<p>Te mantenemos informado acerca de la evolución de los principales indicadores de tu página web. Cada uno de nuestros personajes te ofrecerá información de diferentes aspectos.</p>
							<div class="leyenda">
								<p>Explora TÔP </p>
							</div>
						</article>
					 </section>					
				</div>

			</div>
			<div class="row">
				<section id="sello" class="col-lg-8 col-lg-offset-4 gradient">
					<div class="data-sello">
				        <h3 class="titulo_papiro">TÔP: El Sello</h3>
				        <p style="margin-bottom:10px;">Es un sello de confianza. Este sello demuestra que la empresa que lo tiene en su web está sensibilizada y preocupada por aumentar su presencia en internet, con estrategias claras para captar nuevos clientes, sin olvidar la satisfacción de los actuales.</p>
				        <p>Con el sello TÔP conseguirás:</p>
				        <ul id="list-sello" style="margin-bottom:10px;">
				            <li>Reconocimiento al trabajo de posicionamiento web (SEO).</li>
				            <li>Seguridad, tranquilidad y satisfacción de tus clientes.</li>
				            <li>Imagen de empresa que invierte en su comunidad.</li>
				            <li>Conocer si está funcionando tu estrategia SEO sólo con mirar el sello.</li>
				            <li>Formación contínua en nuevas tecnologías.</li>
				            <li>Mejorar tu posicionamiento web y captar nuevos clientes.</li>
				        </ul>
				        <p>Para obtener tu sello TÔP sólo tienes que darte de alta como cliente y seguir todos los pasos que te indicaremos, es muy sencillo y no olvides que siempre estaremos a tu lado para cualquier cosa que necesites.</p>
				    </div>
				    <div class="show-sellos" style="margin-bottom:20px;">
				    	<div style="width: auto;display:block;float: left;"><img src="<?php bloginfo('template_directory'); ?>/images/topdeseo/sello1.png" width="100px"/></div>
				    	<div style="width: auto;display:block;float: left;"><img src="<?php bloginfo('template_directory'); ?>/images/topdeseo/sello2.png" width="100px"/></div>
				    	<div style="width: auto;display:block;float: left;"><img src="<?php bloginfo('template_directory'); ?>/images/topdeseo/sello3.png" width="100px"/></div>
				    	<div style="width: auto;display:block;float: left;"><img src="<?php bloginfo('template_directory'); ?>/images/topdeseo/sello4.png" width="100px"/></div>
				    	<div style="width: auto;display:block;float: left;"><img src="<?php bloginfo('template_directory'); ?>/images/topdeseo/sello5.png" width="100px"/></div>
				    </div>

				</section>
			</div>
		</div>

			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<!-- <p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p> -->
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>