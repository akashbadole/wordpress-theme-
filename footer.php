<footer role="contentinfo bg-light py-5">
			
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
						<?php //wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="pull-right"><a href="#" id="credit320" title="">Akash Badole</a></p>
			
					<div class="small text-center text-muted"><p class="attribution">&copy; <?php bloginfo('name'); ?></p></div>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->

  

</body>

</html>