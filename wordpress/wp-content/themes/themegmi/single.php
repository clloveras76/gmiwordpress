<?php get_header(); ?>





<!-- cuerpo Principal -->
<section id="main">
	
	<!-- comienza container principal 960 -->
	<div class="container">
	
	<!-- comienza Article list -->

	  <section id="articles_list">	

		<!-- bucle de articulos -->
		
		<?php if(have_posts()): while(have_posts()) : the_post();?> 
		
				<article>
					<div class="col s12 m8 offset-m2 l6 offset-l3">
							<div class="card-panel grey lighten-5 z-depth-1">
								<h4 class="titleH4Single"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<div class="date"><?php the_date();?> en <span><?php the_category(); ?></span></div>
								<div class="row valign-wrapper">
										<!-- div class="col s3">
										  <div class="thumb">
											<a href="<!-- ?php the_permalink();?>" -->
											<!-- ?php if(has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs');} ?>	
											</a>
										  </div -->	
										  <!-- img src="img/.jpg" alt="" class="thumb responsive-img" --> <!-- notice the "circle" class -->
										<!-- /div -->
										<div class="col s12">
										  <div class="extract"><span class="black-text"><?php the_content(); ?></span></div>
									    </div>
							     </div>
							   </div>
						  </div>
					</article>	
		
		
		
		<?php endwhile; else: ?>
			<h1>No se encontraron Art&#237;culos</h1>
		<?php endif; ?>
		<!-- fin bucle de articulos -->
		<div id="comentarios">
			<h3>Comentarios</h3>
			<div id="caja_comentarios">
				<?php comments_template(); ?>
			</div>
		</div>
		
		
	  </section>
	
	<!-- Termina Article list -->
	



<?php get_sidebar(); ?>


	</div>
	<!-- termina container principal 960 -->
</section>

<!-- cuerpo Principal -->






<?php get_footer(); ?>