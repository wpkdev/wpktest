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

$src = resize_img($post->ID, 1200,1000000); //Get the featured image for this post
	
	echo '<img src="'.$src.'" class="page-bg-img page-bg-'.$counter.'"   />';
	
	
	echo '<div class="page-element page-'.$counter.'">';
		
		
		$position_horizontal = get_field('horizontaal');
		$position_vertical = get_field('verticaal');
		$col_width = get_field('tekstbreedte');
		
		
		if(in_category('Start page')){
			echo '<div class="page-content start-page  vert-'.$position_vertical.' hor-'.$position_horizontal.'  ">';
				the_content();
			echo '</div>';
			
				echo '<div class="content-video">';
					// BUILDING VIDEO / IMAGE HEADER
			    	$feat_video = get_post_meta($post->ID, 'video', false); 
			    	if(strlen($feat_video[0])>2){
			    		 $feat_video_arr = explode("|", $feat_video[0]);
						 echo '<div class="article-featured article-featured-video">';
						 echo '<div class="video-overlay">
							<div class="video-play-btn"></div>
								
								
								<img src="'.get_template_directory_uri() . '/img/pixel.gif" data-src-mobile="'.$src_480[0] . '" data-src="'.$src[0].'"  class="featured-image article-header-img">
							
							
							
							</div>';
							echo '<div class="video-loading is-loading"></div>';
						
				    	if (!is_numeric($feat_video_arr[0]) ){ ?>
							<div class="responsive-container">
								<iframe  src="" width="1300" height="611" data-src="http://www.youtube.com/embed/<?php echo $feat_video_arr[0]; ?>?rel=0&modestbranding=1&autohide=1" frameborder="0" allowfullscreen></iframe>
							</div>
						<?php }else{ ?>
						<div class="responsive-container">
							<iframe src="" width="1300" height="611" data-src="http://player.vimeo.com/video/<?php echo $feat_video_arr[0]; ?>?title=0&amp;byline=0&amp;portrait=0&amp;wmode=transparent&amp;color=d59154" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<?php 
						}	
						echo '</div>'; // article featured video
					}
				
				
				
						
									
				
				//echo '</div>';
			
			
			
			
		}else{
			echo '<div class="page-content  vert-'.$position_vertical.' hor-'.$position_horizontal.' col-'.$col_width.' ">';
				echo '<h2>'.get_the_title().'</h2>';
				the_content();
			echo '</div>';
		}
		
				
	echo '</div>';
	
	
	
	
	echo '<div class="nav"><ul><li><a href="#" class="go_to_page">1</a></li><li><a href="#" class="go_to_page">2</a></li><li><a href="#" class="go_to_page">3</a></li><li><a href="#" class="go_to_page">4</a></li><li><a href="#" class="go_to_page">5</a></li></div>';
	
	


$counter++;
endwhile;


	
	



get_footer(); ?>