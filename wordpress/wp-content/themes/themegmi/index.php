<?php get_header(); ?>





<!-- cuerpo Principal -->
<section id="main">
	
	<?php include(TEMPLATEPATH. '/slideshow.php'); ?>
	<!-- Include de Slider -->

	<!-- comienza container principal 960 -->
	<div class="container">
	
	<!-- comienza Article list -->

	  <section id="articles_list">	
	  
	  
	  
	  
	  
	  		<!-- presentacion est?tica   -->

				<article class="contmisionhome">
					<div class="col s12 m8 offset-m2 l6 offset-l3">
							<div class="card-panel grey lighten-5 z-depth-1">
								<h4 class="titleH4 center"><a href="#">Nos preocupamos sus Pacientes y su Consultorio</a></h4>
								
								  <div class="row">
										<!-- div class="col s12">
										  <img class="logopresntacionHome" src="http://localhost/gmiwordpress/wordpress/wp-content/themes/themegmi/img/logogmi_Big.jpg" alt="" class="thumb responsive-img" --> <!-- notice the "circle" class -->
										<!--/div -->
										<div class="col s12">
											<h5 class="marginbottom0 borderBottomGreen">Mísión</h5>
										  	<p class="extract">
											  <span class="black-text">
												Nuestro principal objetivo es explorar a fondo todas las soluciones odontológicas y aportar la más idónea para las necesidades de cada caso en concreto, dado que la finalidad última es aumentar la calidad de vida de los pacientes.				
											  </span>
											</p>

											<h5 class="marginbottom0 borderBottomLightBlue">Visión</h5>
										  	<p class="extract">
											  <span class="black-text">
												En base a ello, la compañía siempre ha mantenido una firme apuesta por la investigación científica y tecnológica, invirtiendo en la formación continuada y exigiendo una alta cualificación a sus profesionales.
											  </span>
											</p>
											    

											<h5 class="marginbottom0 borderBottomSilver">Valores</h5>
										  	<p class="extract">
											  <span class="black-text">
												Compromiso con el Cliente, calidad de nuestros productos, prioridad de un buen Servicio.
												Eficiencia de nuestras soluciones, profesionalidad, trabajo en Equipo, innovación y Tecnología.
											  </span>
											</p>
											    
										</div>
									  </div>
							   </div>
						  </div>
					</article>
						


	  		<!-- ventajas competitivas est?ticas   -->
				<article class="contVentajashome">
						<div class="row">
						            <div class="col s12 m4">
						              <div class="center promo">
						                <i class="medium  material-icons">play_for_work</i>
						                <h5 class="promo-caption">Implantes</h5>
						                <p class="light center">
						Hicimos la mayor parte del trabajo pesado para que usted proporcione a estilos de defecto que incorporan nuestros componentes personalizados . Además, refinamos animaciones y transiciones para proporcionar una experiencia suave para los desarrolladores.</p>
						              </div>
						            </div>

						            <div class="col s12 m4">
						              <div class="center promo">
						                <i class="medium material-icons">build</i>
						                <h5 class="promo-caption">Instrumental</h5>
						                <p class="light center">Mediante la utilización de elementos y principios de Material Design, hemos sido capaces de crear un framework que incorpora componentes y animaciones que proporcionan sistema de respuesta subyacente en todas las plataformas permite al usuario una experiencia  unificada.</p>
						              </div>
						            </div>

						            <div class="col s12 m4">
						              <div class="center promo">
						                <i class="medium material-icons">settings</i>
						                <h5 class="promo-caption">Tecnología</h5>
						                <p class="light center">Hemos proporcionado la documentación detallada, así como ejemplos específicos de código para ayudar a los nuevos usuarios a empezar. También estamos siempre abiertos a comentarios y podemos responder a cualquier pregunta que un usuario pueda tener acerca de Materialize.</p>
						              </div>
						            </div>
						</div>

				</article>
	  		<!-- presentacion est?tica   -->		



				<div class="row">
						<div class="col s12">
							<h4 class="titleH4">Novedades</h4> 
						</div>
				</div>
				
				<!-- presentacion est?tica   -->	
				
		  

	  
	  
	  
	  
	  

		<!-- bucle de articulos -->
		
				<!-- ?php query_posts('category_name=home'); ? -->	
		<!-- ?php query_posts("paged=$paged"); ?  Esto muestra todos los ultimos articulos de todas las categorias pero solo mostrare los que yo quiero en home-->
		<!-- ?php if(have_posts()): while(have_posts()) : the_post();? --> 
		

				<!-- article>
					<div class="col s12 m8 offset-m2 l6 offset-l3">
							<div class="card-panel grey lighten-5 z-depth-1">
								<h2 class="titleH4"><a href="<!-- ?php the_permalink(); ?>"><!-- ?php the_title(); ?></a></h2>
								<div class="date"><!-- ?php the_date();?> en <span><!-- ?php the_category(); ?></span></div>
								<div class="row valign-wrapper">
										<div class="col s3">
										  <div class="thumb">
											<a href="<!-- ?php the_permalink();?>">
											<!-- ?php if(has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs');} ?>	
											</a>
										  </div>	
										  
										</div>
										<div class="col s9">
										  <div class="extract"><span class="black-text"><!-- ?php the_excerpt(); ?></span></div>
									    </div>
							     </div>
							   </div>
						  </div>
					</article  -->	
		
		
		
		
					<div class="row">
									<?php query_posts('category_name=home'); ?>	
											<?php if(have_posts()): while(have_posts()) : the_post();?> 
									
									
						<!-- div class="col s12 m6 l6">
								  <div class="card">
											<div class="card-image">
											  <a href="<?php the_permalink();?>">
											<!-- ?php if(has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs');} ?>	
											 </a>
											  <span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
											 </div>
											<div class="card-content">
											  <p><?php the_excerpt(); ?></p>
											</div>
											<div class="card-action">
											  <a href="<?php the_permalink(); ?>">Ver m&aacute;s</a>
											</div>
									</div>
						</div -->
						
		
						<div class="col s12 m6 l4">
								  <div class="card">
											<div class="card-image">
											  <a href="<?php the_permalink();?>">
											<?php if(has_post_thumbnail()){ the_post_thumbnail('mediumpost-thumb');} ?>	
											 </a>
											  
											 </div>
											<div class="card-content">
											  <span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
											</div>
											<div class="card-action">
											  <a href="<?php the_permalink(); ?>">Ver m&aacute;s</a>
											</div>
									</div>
						</div>	
		
		
		<?php endwhile; else: ?>
			<h4>No se encontraron Art&#237;culos</h4>
		<?php endif; ?>
						</div>
		
		<!-- fin bucle de articulos -->

	  
				
				
				

							
		
	  </section>
	  <div id="pagination"> 
		<p><?php next_posts_link('<- Post Siguientes'); ?></p>
		<p><?php previous_posts_link('<- Post Anteriores'); ?></p>
	  </div>
	<!-- Termina Article list -->
	



<?php get_sidebar(); ?>


	</div>
	<!-- termina container principal 960 -->
</section>

<!-- cuerpo Principal -->






<?php get_footer(); ?>