<?php /* Template Name: Page Preview */
get_header(); 
global $post; setup_postdata($post);

	
	// Show Black or white logo
	$post_id = get_the_id();
	 
	
	$logo_color = get_field('logo_color', $_GET["id"]);
	if (!empty($logo_color) ){
		if ($logo_color == 'Black'){
			$logo_img = 'SOJ-logo-zwart';
		} else {
			$logo_img = 'SOJ-logo-wit';
		}
	} else {
		$logo_img = 'SOJ-logo-wit';
	}
?>
<header>
	
	<?php echo get_the_time('l j F', $_GET["id"]); //Echos date in Y-m-d format.; ?>
	<a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo $template_directory; ?>/img/<?php echo $logo_img;?>.svg"  nopin="nopin" class="header-logo"/></a>
</header>
<?php



$args = array( 'p' => $_GET["id"] );
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

global $post_url;global $post_title;
$post_url = get_permalink(); 
$post_title = get_the_title();


/* NAVIGATION */
echo '<div class="nav-box">';
$next_post = get_next_post();
if (!empty( $next_post )): 
	echo '<a href=" '.get_permalink( $next_post->ID ).' " class="icon-nav-header nav-next icon-arrow-left"><span>Eerder</span></a>';
endif; 
$prev_post = get_previous_post();
if (!empty( $prev_post )): 
	echo '<a href=" '.get_permalink( $prev_post->ID ).' " class="icon-nav-header nav-prev icon-arrow-right"><span>Later</span></a>';
endif; 
echo '</div>';


get_footer(); ?>
