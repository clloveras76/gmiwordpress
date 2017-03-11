<?php get_header(); ?>

<!-- cuerpo Principal -->
<section id="main">


	<!-- comienza container principal 960 -->
	<div class="container">
	
	<!-- comienza Article list -->
<div class="card-panel grey lighten-5 z-depth-1">
	  <section id="articles_list">	
	    <h2 id="cat_name" class="titleH4"><?php single_cat_title($prefix = '', $display = true); ?></h2>
	
				<article>
		<!-- bucle de articulos -->
					<div class="row">	
		<?php if(have_posts()): while(have_posts()) : the_post();?> 
		
		
					<div class="col s12 m6 l6">

							
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
					</article>	
		<!-- fin bucle de articulos -->

	  
				
				
				

							
		
	  </section>
</div>	  
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