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
											<p>
												GMI es un referente en implantología dental, especializada desde hace más de 15 años en el desarrollo, producción, comercialización y distribución de material médico para el sector dental.
											</p>
											<p>
												La innovación, más que cualquier otro factor, ha dirigido la trayectoria de GMI; ha sido el motor para el crecimiento, el progreso y el éxito de nuestra empresa.
											</p>	
											<p>
												Hoy, nuestro know-how y el gran equipo humano que la integra nos permite estar presentes en cinco continentes, gracias a una amplia red de distribuidores, ofreciendo productos y soluciones odontológicas a pacientes y profesionales de la salud.
											</p>	

											
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
										We did most of the heavy lifting for you to provide defect styles that incorporate our custom components. In addition, we refine animations and transitions to provide a smooth experience for developers.</p>
						              </div>
						            </div>

						            <div class="col s12 m4">
						              <div class="center promo">
						                <i class="medium material-icons">build</i>
						                <h5 class="promo-caption">Instrumental</h5>
						                <p class="light center">By using elements and principles of Material Design, we have been able to create a framework that incorporates components and animations that provide underlying response system across all platforms allows the user a unified experience.</p>
						              </div>
						            </div>

						            <div class="col s12 m4">
						              <div class="center promo">
						                <i class="medium material-icons">settings</i>
						                <h5 class="promo-caption">Tecnología</h5>
						                <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to comments and can answer any questions a user may have about your material.</p>
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
									<?php query_posts('category_name=home&showposts=3'); ?>	
									<!-- ?php query_posts('category_name=home'); ? este es el query original, el otro limita a 3 post  -->	
							

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
	  <!--div id="pagination"> 
		<p><?php next_posts_link('<- Post Siguientes'); ?></p>
		<p><?php previous_posts_link('<- Post Anteriores'); ?></p>
	  </div -->
	<!-- Termina Article list -->
	



<?php get_sidebar(); ?>


	</div>
	<!-- termina container principal 960 -->
</section>

<!-- cuerpo Principal -->






<?php get_footer(); ?>