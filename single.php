<?php 



get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


$current_page = get_query_var('paged'); 
$counter = 1;
$home_directory = get_site_url();





echo '<h1>HIER KOTM DE HEADER</h1>';


while ( have_posts() ) : the_post();

//include('incl_page.php');	



if( have_rows('new_page') ):


	while ( have_rows('new_page') ) : the_row();
	 	
	 	$prev_post = get_previous_post();
		if (!empty( $prev_post )): 
			echo '<a href=" '.get_permalink( $prev_post->ID ).' " class="nav-posts nav-prev">></a>';
		endif; 
		
		$next_post = get_next_post();
		if (!empty( $next_post )): 
			echo '<a href=" '.get_permalink( $next_post->ID ).' " class="nav-posts nav-next"><</a>';
		endif; 
	 	
	 	
	 	

	 	// include video page
	 	if( get_row_layout() == 'video' ):
	 		include('incl_video.php');
	 		include('add_nav.php');
	 		
	 		$counter++;
	 	endif;
	 	
	 	//include normal page
	 	if( get_row_layout() == 'page' ):
	 		include('incl_page.php');
	 		include('add_nav.php');
	 		$counter++;
		endif;
		
		// include gallery page
	 	if( get_row_layout() == 'shop' ):
	 		include('incl_gallery.php');
	 		include('add_nav.php');
	 		$counter++;
	 	endif;
	 	
	 	// include gallery page
	 	if( get_row_layout() == 'map' ):
	 		include('incl_map.php');
	 		include('add_nav.php');
	 		$counter++;
	 	endif;
	 	
		
	  endwhile;
endif;


endwhile;


	
	



get_footer(); ?>