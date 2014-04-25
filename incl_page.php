<?php
	$position_horizontal = get_sub_field('position_text_horizontal');
	$position_vertical = get_sub_field('position_text_vertical');
	$col_width = get_sub_field('text_width');
	$image = get_sub_field('background_image');
	$src = aq_resize( $image['url'], 1200, 100000000, true, false ); //resize & crop img
	echo '<img src="'.$src[0].'" class=" page-bg-'.$counter.' bg "   />';
	echo '<div class="page-element page-'.$counter.'">';
	echo '<div class="page-content page-content-box vert-'.$position_vertical.' hor-'.$position_horizontal.' col-'.$col_width.' ">';
	echo get_sub_field('content');
	echo '</div>';
	echo '</div>';
?>