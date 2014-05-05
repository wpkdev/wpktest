<?php 
	$image = get_sub_field('background_image');
	$src = aq_resize( $image['url'], 1200, 100000000, true, false ); //resize & crop img
	$src_1024 = aq_resize( $image['url'], 1024, 638, true, false ); //resize & crop img
	$src_768 = aq_resize( $image['url'], 786, 450, true, false ); //resize & crop img
	$src_480 = aq_resize( $image['url'], 480, 281, true, false ); //resize & crop img
	//echo '<img src="" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'" class=" page-bg-'.$counter.' bg "   />';
	
	echo '<div class="page-element page-'.$counter.'" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'">';
	
		$position_horizontal = get_sub_field('title_image_horizontal');
		$position_vertical = get_sub_field('title_image_vertical');
		$image_title = get_sub_field('title_image');
		echo '<div class=" page-content-box start-page  vert-'.$position_vertical.'-title hor-'.$position_horizontal.'-title  "><h1 class="main-title">';
			echo $image_title;
		echo '</h1></div>';
		
		echo '<div class="content-video">';
		// BUILDING VIDEO / IMAGE HEADER
		$feat_video = get_sub_field('video_id'); 
			    	if(strlen($feat_video)>2){
			    		 $feat_video_arr = $feat_video;
						 echo '<div class="article-featured article-featured-video">';
						 echo '<div class="video-overlay">
							<div class="video-play-btn"></div>
								<img src="'.get_template_directory_uri() . '/img/pixel.gif" data-src-mobile="'.$src_480[0] . '" data-src="'.$src[0].'"  class="featured-image article-header-img">
							</div>';
							echo '<div class="video-loading is-loading"></div>';
						if (!is_numeric($feat_video_arr[0]) ){ ?>
							<div class="responsive-container">
								<iframe  src="" width="1300" height="611" data-src="http://www.youtube.com/embed/<?php echo $feat_video_arr; ?>?rel=0&modestbranding=1&autohide=1" frameborder="0" allowfullscreen></iframe>
							</div>
						<?php }else{ ?>
						<div class="responsive-container">
							<iframe src="" width="1000" height="611" data-src="http://player.vimeo.com/video/<?php echo $feat_video_arr; ?>?title=0&amp;byline=0&amp;portrait=0&amp;wmode=transparent&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<?php 
						}	
						echo '</div>'; // article featured video
					}
		echo '</div></div>';