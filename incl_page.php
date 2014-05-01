<?php
	$position_horizontal = get_sub_field('position_text_horizontal');
	$position_vertical = 'top';
	$image = get_sub_field('background_image');
	$src = aq_resize( $image['url'], 1200, 100000000, true, false ); //resize & crop img
	$src_1024 = aq_resize( $image['url'], 850, 638, true, false ); //resize & crop img
	$src_768 = aq_resize( $image['url'], 600, 450, true, false ); //resize & crop img
	$src_480 = aq_resize( $image['url'], 375, 281, true, false ); //resize & crop img
	echo '<div class="page-element page-'.$counter.'" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'">';
	
	
	
	$color_scheme = 'page-content-'.get_sub_field('colorscheme');
	
	
	echo '<div class="page-content page-content-box vert-'.$position_vertical.' hor-'.$position_horizontal.'  '.$color_scheme.' "><div class="text-wrapper">';
	
	
	
	$sub_title = get_sub_field('subtitle');
	if(strlen($sub_title)> 1){
		echo '<div class="subtitle"><h3>'.$sub_title.'</h3></div>';
	}
	$page_title = get_sub_field('title');
	if(strlen($page_title)> 1){
		echo '<h2>'.$page_title.'</h2>';
	}
	echo get_sub_field('content');
	echo '</div>';
	echo '</div>';
	echo '</div>';

?>