

<!-- footer -->

 <footer class="page-footer">
 <section id="ft_widgets">
          <div class="container">
            <div class="row">
              <div class="col l12 m12 s12">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
			  </div>
              <!-- div class="col l4 offset-l2 s12">
					<section class="widget">
						<h3>Widget2</h3>
						<ul>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
						</ul>
						
					</section>
              </div -->
            </div>
          </div>
		  
          <div class="footer-copyright">
            <div class="container">
            <p id="copyright">GMI Argentina 2016</p>
            <!-- a class="grey-text text-lighten-4 right" href="#!">More Links</a -->
            </div>
          </div>
 </section>		  
 </footer>


<!-- footer -->








<script src="<?php bloginfo('template_url')?>/js/modernizr.custom.js"></script>
     <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/scripts.js"></script>
	  
	  
 <?php wp_footer(); ?>  
 
</body>
</html>