<?php 

	/**
	 * Wp in Progress
	 * 
	 * @author Yulia.S
	 * Template Name: page-new
	 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
	 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
	 */

	get_header(); 
	
	if ( ( jaxlite_postmeta('jaxlite_header_sidebar') ) && ( jaxlite_postmeta('jaxlite_header_sidebar') <> "none" ) ):
	
		do_action('jaxlite_header_sidebar', jaxlite_postmeta('jaxlite_header_sidebar'));
	
	endif;
	
?> 

<div class="container content">
	
    <div class="row">
       
        <div class="<?php echo jaxlite_template('span') . " " . jaxlite_template('sidebar'); ?>">
        	
            <div class="row">
        
                <article <?php post_class(); ?> >
                
                    <?php 
					
						while ( have_posts() ) : the_post();
						
							do_action('jaxlite_postformat');
							wp_link_pages(array('before' => '<div class="wip-pagination">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>') );
						
						endwhile;
						
					?>
            
                </article>
         
                <?php
				    $args=array(
				      'post_type' => 'Wild_life_News',   //showing our custom post types
				      'post_status' => 'publish',
				      'posts_per_page' => -1,
				      'caller_get_posts'=> 1
				      );
				    $my_query = null;
				    $my_query = new WP_Query($args);
				    if( $my_query->have_posts() ) {
				     
				      while ($my_query->have_posts()) : $my_query->the_post(); ?>
				      <div class="newsItem">
					      <p class="newsTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
				      </div>
				       <?php
				      endwhile;
				    }
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
        
                <?php comments_template(); ?>

			</div>
        
        </div>

		<?php get_sidebar(); ?>

    </div>
    
</div>

<?php 

	if ( ( jaxlite_postmeta('jaxlite_bottom_sidebar') ) && ( jaxlite_postmeta('jaxlite_bottom_sidebar') <> "none" ) ):
	
		do_action('jaxlite_bottom_sidebar', jaxlite_postmeta('jaxlite_bottom_sidebar'));
	
	endif;

	do_action('jaxlite_footer_sidebar', 'footer-sidebar-area' );
	get_footer(); 
	
?>
