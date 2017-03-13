<!DOCTYPE html>
<html>
<head>
<title>GMI Argentina</title>
      <!--Import Google Icon Font-->
   <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/materialize.min.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
       <!--Import font awesome.css-->
  	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/font-awesome.min.css" media="screen,projection"/>
		<!--Import font awesome.css-->
    <meta charset="UTF-8">
      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php wp_head(); ?>
	
</head>
<body>



<!-- Encabezado -->
<header>
<div id="menutopPrincipal" class="navbar-fixed">
	  <nav class="" role="navigation">
		<div class="nav-wrapper">
			
			
			
			
			
		
			<nav>
			<!--a id="logo-container" href="#" class="brand-logo "><img class="responsive-img" src="img/logogmi_Big.png" /></a-->
					
			<span class="logo"><a class="linklogo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://localhost/gmiwordpress/wordpress/wp-content/uploads/2016/06/logogmi_Big.png" /></a></span>
			<span class="description-site"><?php bloginfo( 'description' ); ?></span>
			<!-- span class="logo"><a href="<!-- ?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><!-- ?php bloginfo( 'name' ); ?></a></span -->
					
					
			
			<?php wp_nav_menu(
						array(
							'container' => false,
							'items_wrap' => '<ul class="right hide-on-med-and-down" id="menu-top">%3$s</ul>
							<ul id="nav-mobile" class="side-nav "><br> %3$s</ul>',
							'theme_location' => 'menu',		
						));?>
			</nav>	


		
		
			  <!--ul class="right hide-on-med-and-down">
				<li><a class="black-text text-darken-2" href="index.php">Inicio</a> </li>
				<li><a class="black-text text-darken-2" href="productos.php">Productos</a></li>
				<li><a class="black-text text-darken-2" href="cursos-actualizacion.php">Cursos de Actualización</a></li>
				<li><a class="black-text text-darken-2" href="contactenos.html">Contactenos</a></li>
				<li><a class="black-text text-accent-4 lastItemMnu" href="productos-carestream.html">Productos Carestream</a></li>
			  </ul>

		  <ul id="nav-mobile" class="side-nav  teal darken-1">
			<li><a class="white-text" href="index.php">Inicio</a></li>
			<li><a class="white-text" href="productos.php">Productos</a></li>
			<li><a class="white-text" href="cursos-actualizacion.php">Cursos de Actualización</a></li>
			<li><a class="white-text" href="contactenos.html">Contactenos</a></li>
			<li><a class="white-text" href="productos-carestream.html">Productos Carestream</a></li>
		  </ul -->
		  <a href="#" data-activates="nav-mobile " class="button-collapse "><i class="material-icons">menu</i></a>
		  
		  
		</div>
	  </nav>
</div>
</header>
<!-- Encabezado -->