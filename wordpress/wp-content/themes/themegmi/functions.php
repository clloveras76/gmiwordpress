<?php    
	register_nav_menus( array(
	'menu' => 'Menu superior',
	'menu_footer' => 'Menu Footer'
	));

	add_theme_support('post-thumbnails');
	add_image_size('slider_thumbs',1200,400, true);
	add_image_size('list_articles_thumbs',450,370, true);
// Codigo añadido para agregar tamaños especiales de imagenes para posteos
	add_image_size( 'mediumpost-thumb', 9999, 9999 ); // Unlimited Height 
	add_filter('image_size_names_choose', 'hmuda_image_sizes');  
	function hmuda_image_sizes($sizes) {  
		    $addsizes = array(  
		        "mediumpost-thumb" => __( "Tamaño medio Post"),  
		    );  
		    $newsizes = array_merge($sizes, $addsizes);  
		    return $newsizes;  
		}
// Codigo añadido para agregar tamaños especiales de imagenes para posteos	
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<section class="widget col l6 m6 s12">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
		register_sidebar(array(
		'name' => 'Footer',
		'before_widget' => '<section class="widget col l6 m6 s12">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	




	/*  funcion para limitar cantidad de caracteres de excerpt - extracto de los artículos   */
	function longitud_excerpt($length) {
    return 30;
	}
	add_filter('excerpt_length', 'longitud_excerpt');
	/*  funcion para limitar cantidad de caracteres de excerpt - extracto de los artículos   */
	
?>