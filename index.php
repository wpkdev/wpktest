<?php get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$today = getdate();
$args = array(

'posts_per_page' => -1,
/*'year' => $today["year"],
'monthnum' => $today["mon"],
'day' => $today["mday"]*/
);


 

$wp_query = new wp_query($args);
$current_page = get_query_var('paged'); 
$counter = 1;
$home_directory = get_site_url();





while ( have_posts() ) : the_post();

//include('incl_page.php');	

$prev_post = get_previous_post();
		if (!empty( $prev_post )): 
			echo '<a href=" '.get_permalink( $prev_post->ID ).' " class="nav-posts nav-prev icon-arrow-right">&nbsp;</a>';
		endif; 

if( have_rows('new_page') ):


	while ( have_rows('new_page') ) : the_row();
	 	
	 	
	 	
	 
		
		
		

	 	

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

break;
endwhile;

	$src = $template_directory.'/img/pixel.gif';
	 echo '<div class="page-element page-element-footer page-'.$counter.'"  data-src="'.$src.'" data-src-1024="'.$src.'" data-src-768="'.$src.'" data-src-480="'.$src.'"><div class="page-content-box"></div></div>';
	include('add_nav.php');
	global $post_url;global $post_title;
	$post_url = get_permalink(); 
	$post_title = get_the_title();

get_footer(); ?>