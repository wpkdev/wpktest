<?php 
	$image = get_sub_field('image');
	$src = aq_resize( $image['url'], 1920, 1080, true, false ); //resize & crop img
	$src_1024 = aq_resize( $image['url'], 1024, 559, true, false ); //resize & crop img
	$src_768 = aq_resize( $image['url'], 786, 429, true, false ); //resize & crop img
	$src_480 = aq_resize( $image['url'], 480, 480, true, false ); //resize & crop img
	
	$extra_image = get_sub_field('extra_image');
	$position_horizontal_extra = get_sub_field('title_image_horizontal');
	$position_vertical_extra = get_sub_field('title_image_vertical');
	
		
	
	$quote = get_sub_field('quote');
	$color_scheme = get_sub_field('colorscheme');
	
	echo '<div class="page-element page-element-quote page-content-'.$color_scheme.' page-'.$counter.'">';
	//echo '<img src="'.get_bloginfo('template_directory').'/img/black.gif" class=" page-bg-'.$counter.' bg stickem"   />';
		$position_horizontal = get_sub_field('title_image_horizontal');
		$position_vertical = get_sub_field('title_image_vertical');
		$image_title = get_sub_field('title_image');
		echo '<div class="page-content page-content-box page-quote start-page vert-'.$position_vertical.'-title hor-'.$position_horizontal.'-title  "><h1 class="main-title">';
			echo $quote;
		echo '</h1>';
		
		$sub_title = get_sub_field('subtitle');
		if(strlen($sub_title)> 1){
			echo '<div class="subtitle_quote" ><h3>'.$sub_title.'</h3></div>';
		}
		echo '</div>';
		
		if($src[0]){
			echo '<div class="content-large-image"><img src="'.$template_directory.'/img/pixel.gif" class=" page-bg-'.$counter.' bg " data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'"  /></div>';
		}
		
		if(strlen($extra_image['url'])> 1){
			echo '<div class="extra-img vert-'.$position_vertical_extra.'-title hor-'.$position_horizontal_extra.'-title"><img src="'.$extra_image['url'].'" class=" lrg-img-over "></div>';
		}
		
		
		echo '</div>';