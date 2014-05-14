<?php 
	global $feat_video;
	global $feat_video_arr;
	$image = get_sub_field('background_image');
	$src = aq_resize( $image['url'], 1920, 1080, true, false ); //resize & crop img
	$src_1024 = aq_resize( $image['url'], 1024, 559, true, false ); //resize & crop img
	$src_768 = aq_resize( $image['url'], 786, 429, true, false ); //resize & crop img
	$src_480 = aq_resize( $image['url'], 480, 480, true, false ); //resize & crop img
	//echo '<img src="" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'" class=" page-bg-'.$counter.' bg "   />';
	
	// Get color scheme of page
	$color_scheme = get_sub_field('colorscheme');
	$feat_video = get_sub_field('video_id'); 
	
	$feat_video_arr = $feat_video;
	
	echo '<div class="page-element page-'.$counter.' " data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'">';
	//echo '<img src="'.$src[0].'" class=" page-bg-'.$counter.' bg stickem"   />';
	echo '<img src="'.$template_directory.'/img/pixel.gif" nopin="nopin" class=" page-bg-'.$counter.' bg bg-video" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'"  />';
	
	
		$position_horizontal = get_sub_field('title_image_horizontal');
		$position_vertical = get_sub_field('title_image_vertical');
		$image_title = get_sub_field('title_image');
		echo '<div class=" page-content-box start-page  vert-'.$position_vertical.'-title hor-'.$position_horizontal.'-title page-content-'.$color_scheme.' ">';
		
		// Show video play btn
		echo '<div class="video-play-btn center"><a href="#video-modal" class="modalLink"></a></div>';
		
		echo '<h1 class="main-title">';
			echo $image_title;
		echo '</h1>';
		echo '</div>';
		
		echo '</div>'; // page-element


		// Get Video ID
		$feat_video = get_sub_field('video_id'); 
		$feat_video_arr = $feat_video;
		global $video_url;
		echo '<!--  '.$feat_video_arr.'  -->';
		
		if (!is_numeric($feat_video_arr) ){ 
		
			$video_url = 'http://www.youtube.com/embed/'.$feat_video_arr.'?rel=0&modestbranding=1&autohide=1';
			
		} else { 
		 
		 	$video_url = 'http://player.vimeo.com/video/'.$feat_video_arr.'?title=0&byline=0&portrait=0&wmode=transparent&color=ffffff&autoplay=true';	
		} 	
							 
?>
