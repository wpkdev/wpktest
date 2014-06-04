<?php get_header(); 

$args = array( 'posts_per_page' => -1 );
$wp_query = new wp_query($args);

$counter = 1;
$home_directory = get_site_url();

while ( have_posts() ) : the_post();
	if( have_rows('new_page') ):
		while ( have_rows('new_page') ) : the_row();
		 	
		 	// include video page
		 	if( get_row_layout() == 'video' ):
		 		include('incl_video.php');
		 		$counter++;
		 	endif;
		 	
		 	// include Large Image
		 	if( get_row_layout() == 'large_image' ):
		 		include('incl_large_image.php');
		 		$counter++;
		 	endif;	 	
		 	
		 	//include normal page
		 	if( get_row_layout() == 'page' ):
		 		include('incl_page.php');
		 		$counter++;
			endif;
			
			// include gallery page
		 	if( get_row_layout() == 'shop' ):
		 		include('incl_gallery.php');
		 		$counter++;
		 	endif;
		 	
		 	// include gallery page
		 	if( get_row_layout() == 'map' ):
		 		include('incl_map.php');
		 		$counter++;
		 	endif;
		 	
		 	// include spotify page
		 	if( get_row_layout() == 'spotify' ):
		 		include('incl_spotify.php');
		 		$counter++;
		 	endif;
		 endwhile;
	endif;
break;
endwhile;

global $post_url;global $post_title; global $post_id;
$post_url = get_permalink(); 
$post_title = get_the_title();
$post_id = $post->ID;




/* NAVIGATION */
$prev_post = get_previous_post();
if (!empty( $prev_post )): 
	echo '<a href=" '.get_permalink( $prev_post->ID ).' " class="icon-nav nav-prev icon-arrow-right">&nbsp;</a>';
endif; 

$next_post = get_next_post();
if (!empty( $next_post )): 
	echo '<a href=" '.get_permalink( $next_post->ID ).' " class="icon-nav nav-next icon-arrow-left">&nbsp;</a>';
endif; 


get_footer(); ?>