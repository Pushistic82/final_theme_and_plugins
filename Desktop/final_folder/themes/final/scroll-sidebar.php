<div id="sidebar-wrapper">
	
	<div id="scroll-sidebar" class="clearfix">
    
		<div class="navigation"><i class="fa fa-times open"></i></div>	

		<div class="post-article">

            <div class="title-container"><h3 class="title">Navigation</h3></div>
    
            <nav id="widget-menu" class="custommenu">
            
                <?php wp_nav_menu( array('menu' => 'main-menu', 'container' => 'false','depth' => 3, 'menu_id' => 'widgetmenus' )); ?>
            
            </nav>                
		
        </div>

		<?php 

			if ( is_active_sidebar( jaxlite_sidebar_name('scroll')) ) : 
	        
				dynamic_sidebar( jaxlite_sidebar_name('scroll') );	
			
			endif;
			
		?>
	    
		<div class="post-article">

			

			<?php do_action('jaxlite_socials'); ?>

		</div>
	    
	</div>

</div>