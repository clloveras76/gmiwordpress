
	<!-- slider -->
	<section>
	 <div class="slider">
		
		<ul class="slides">
		<?php query_posts('category_name=slider'); ?>	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				  <li class="slideItem">
					<a href="<?php the_permalink(); ?>">
					  <?php if (has_post_thumbnail()) { the_post_thumbnail('slider_thumbs');} ?>
					  <div class="caption left-align">
						<h5><?php the_title(); ?></h5>
						<p class="extract"><?php the_excerpt(); ?></p>
					  </div>
					</a>
				  </li>	
		
		
		<?php endwhile; else: ?>
				<h4>No se encontraron Art&#237;culos</h4>
		<?php endif; ?>
		  
		 
		  
		</ul>
	 </div>
	</section>
	<!-- slider -->