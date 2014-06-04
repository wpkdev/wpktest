<?php
	$position_horizontal = get_sub_field('position_text_horizontal');
	$position_vertical = 'top';
	$image = get_sub_field('background_image');
	
	$extra_image = get_sub_field('extra_image');
	$position_horizontal_extra = get_sub_field('title_image_horizontal');
	$position_vertical_extra = get_sub_field('title_image_vertical');
	
	
	
	
	$src = aq_resize( $image['url'], 1920, 1080, true, false ); //resize & crop img
	$src_1024 = aq_resize( $image['url'], 1024, 559, true, false ); //resize & crop img
	$src_768 = aq_resize( $image['url'], 786, 429, true, false ); //resize & crop img
	$src_480 = aq_resize( $image['url'], 480, 480, true, false ); //resize & crop img
	$sub_title = get_sub_field('subtitle');
	$page_title = get_sub_field('title');
	$spotify_id = get_sub_field('spotify_id');
	
	
	
	?>
	
	<div class="page page-spotify page-<?php echo $counter; ?>"   data-src="<?php echo $src[0]; ?>" data-src-1024="<?php echo $src_1024[0]; ?>" data-src-768="<?php echo $src_768[0]; ?>" data-src-480="<?php echo $src_480[0]; ?>">
		
		<?php 
			echo '<div class="spotify-box page-content" vert-'.$position_vertical.' pos-'.$position_horizontal.'">';
				if(strlen($sub_title)> 1){
					echo '<div class="subtitle" ><h3>'.$sub_title.'</h3></div>';
				}
				if(strlen($page_title)> 1){
					echo '<div class="subtitle" ><h3>'.$page_title.'</h3></div>';
				}
				
				if(strlen($spotify_id)> 1){
					echo '<iframe src="https://embed.spotify.com/?uri=spotify:user:shotofjoy:playlist:'.$spotify_id.'" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
				}else{
					echo get_sub_field('spotify_link');
				}
				
				
				
				
				
				
				
			echo '</div>';
		?>
		
		
		
		<?php
			if(strlen($extra_image['url'])> 1){
				echo '<img src="'.$extra_image['url'].'" class="img-overlay vert-'.$position_vertical_extra.' pos-'.$position_horizontal_extra.'"  nopin="nopin" />';
			}
		?>
	</div>
	
	
	
	<?php
	/*echo '<div class="page-element page-spotify-box page-'.$counter.' " data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'">';
	
	
	
	$color_scheme = 'page-content-'.get_sub_field('colorscheme');
	
	
	// Get Large Image
	echo '<img src="'.$template_directory.'/img/pixel.gif" nopin="nopin" class=" page-bg-'.$counter.' bg bg-page" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'"  />';
	
	echo '<div class=" page-spotify page-content-box page-box-'.$counter.' "><div class="text-wrapper text-wrapper-spotify vert-'.$position_vertical.' hor-'.$position_horizontal.'  '.$color_scheme.' ">';
	
	
	
	$sub_title = get_sub_field('subtitle');
	if(strlen($sub_title)> 1){
		echo '<div class="subtitle" ><h3>'.$sub_title.'</h3></div>';
	}
	$page_title = get_sub_field('title');
	if(strlen($page_title)> 1){
		echo '<h2>'.$page_title.'</h2>';
	}
	
	
	
	
	echo get_sub_field('spotify_link');
	echo '</div>';
	echo '</div>';
	
	
		

	
	
	if(strlen($extra_image['url'])> 1){
		echo '<div class="extra-img vert-'.$position_vertical_extra.'-title hor-'.$position_horizontal_extra.'-title"><img src="'.$extra_image['url'].'"  nopin="nopin" class=" "></div>';
	}

	echo '</div>';*/

?>