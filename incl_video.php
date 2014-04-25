<?php 
	$image = get_sub_field('background_image');
	$src = aq_resize( $image['url'], 1200, 100000000, true, false ); //resize & crop img
	echo '<img src="'.$src[0].'" class=" page-bg-'.$counter.' bg"   />';
	echo '<div class="page-element page-'.$counter.'">';
		$position_horizontal = get_sub_field('title_image_horizontal');
		$position_vertical = get_sub_field('title_image_vertical');
		$image_title = get_sub_field('title_image');
		echo '<div class="page-content page-content-box start-page  vert-'.$position_vertical.' hor-'.$position_horizontal.'  ">';
			echo '<img src="'.$image_title['url'].'" class=""   />';
		echo '</div>';
		
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
							<iframe src="" width="1300" height="611" data-src="http://player.vimeo.com/video/<?php echo $feat_video_arr; ?>?title=0&amp;byline=0&amp;portrait=0&amp;wmode=transparent&amp;color=d59154" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<?php 
						}	
						echo '</div>'; // article featured video
					}
		echo '</div></div>';