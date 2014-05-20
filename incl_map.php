<?php
	
	//echo '<div  class=" page-bg-'.$counter.' bg  bg-shop" style="background:#FFF;">&nbsp;</div>';
	
	
	
	$src = $template_directory.'/img/pixel.gif';
	
	$color_scheme = 'page-wrapper-'.get_sub_field('colorscheme');
	
	echo '<div class="page-element page-map-box page-'.$counter.' '.$color_scheme.'" data-src="'.$src.'" data-src-1024="'.$src.'" data-src-768="'.$src.'" data-src-480="'.$src.'" style="background:#FFF;">';
	
	echo '<div class="page-wrapper '.$color_scheme.'">';
	
	echo '<div class="page-content2  page-map">';
	
	// Get the (Sub)title
	$sub_title = get_sub_field('subtitle');
	if(strlen($sub_title)> 1){
		echo '<div class="subtitle"><h3>'.$sub_title.'</h3></div>';
	}
	$page_title = get_sub_field('title');
	if(strlen($page_title)> 1){
		echo '<h2>'.$page_title.'</h2>';
	}
	
	// Get page content / Map shortcode
	$page_content = get_sub_field('content');
	echo do_shortcode($page_content);
	
	
	echo '</div>';
	echo '</div>';
	echo '</div>';
?>