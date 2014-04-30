<?php
	
	//echo '<div  class=" page-bg-'.$counter.' bg  bg-shop" style="background:#FFF;">&nbsp;</div>';
	
	
	
	$src = $template_directory.'/img/pixel.gif';
	
	
	
	echo '<div class="page-element page-'.$counter.'" data-src="'.$src.'" data-src-1024="'.$src.'" data-src-768="'.$src.'" data-src-480="'.$src.'" style="background:#FFF;">';
	
	echo '<div class="page-wrapper">';
	
	echo '<div class="page-content2">';
	
	
	//echo get_sub_field('map');
	
	print_r(get_sub_field('content'));
	
	
	
	echo '</div>';
	echo '</div>';
	echo '</div>';
?>