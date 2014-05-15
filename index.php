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
	 	
	 	// include Large Image
	 	if( get_row_layout() == 'large_image' ):
	 		include('incl_large_image.php');
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
	 	
	 	// include spotify page
	 	if( get_row_layout() == 'spotify' ):
	 		include('incl_spotify.php');
	 		include('add_nav.php');
	 		$counter++;
	 	endif;

	 	
		
	  endwhile;
endif;

break;
endwhile;


	$src = $template_directory.'/img/pixel.gif';
	global $post_url;global $post_title;
	$post_url = get_permalink(); 
	$post_title = get_the_title();
	echo '<div class="page-element page-element-footer page-'.$counter.'"  data-src="'.$src.'" data-src-1024="'.$src.'" data-src-768="'.$src.'" data-src-480="'.$src.'"><div class="page-content-box">
	
	<div class="footer-content text-wrapper">
		<div class="subtitle">Share the Joy</div>
			
		<h2 class="share-this-shot">Deel dit shot via</h2>	
			
		<div class="social-links">
			<a href="https://www.facebook.com/sharer/sharer.php?u='.urlencode($post_url).'" onclick="_gaq.push(["_trackEvent", "Social media", "Facebook", "Footer"]);" class="btn btn-small btn-facebook js-social-popup" target="_blank"><span class="icon-facebook"></span>Facebook</a>
			<a href="https://twitter.com/intent/tweet?text='.$post_title.'&url='.urlencode($post_url).'&via=shotofjoynl&related=shotofjoynl" class="btn btn-small btn-twitter js-social-popup" onclick="_gaq.push(["_trackEvent", "Social media", "Twitter", "Footer"]);" target="_blank"><span class="icon-twitter"></span>Twitter</a>
			<span class="btn btn-small btn-pinterest social-media-pinterest-footer social-media-button-footer "><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /><span class="icon-pinterest"></span>Pinterest</a></span>
			<a href="mailto:?SUBJECT='.$post_title.'- Shotofjoy.nl&BODY=Hi..., ik wil graag dit artikel met je delen: '.urlencode($post_url).'" class="btn btn-small btn-email" target="_blank" onclick="_gaq.push(["_trackEvent", "Social media", "Mail", "Footer"]);"><span class="icon-mail"></span>Email</a>
		</div>';
		
		if(!current_user_is_member()){
		echo '<div class="subscribe-now">
			<div><img src="'.$template_directory.'/img/SOJ-logo-wit.svg" width="200" /></div>
			<h1>Word nu abonnee en ontvang de eerste twee weken gratis</h1>
			';
		
		if(is_user_logged_in()){
			echo '<a href="http://www.shotofjoy.nl/register/?action=subscriptionsignup&subscription=1" class="btn btn-large btn-subscribe">Abonneer</a>';
		}else{
			echo '<a href="http://www.shotofjoy.nl/register/?action=registeruser&subscription=1" class="btn btn-large btn-subscribe">Abonneer</a>';
		}
		
		echo '<p>Dagelijks voor maar &euro; 2,99 per maand</p>
		</div>';
		}
		echo '
	</div>

	
	</div></div>';
	//include('add_nav.php');
	

get_footer(); ?>