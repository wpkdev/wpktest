<?php 
	$image = get_sub_field('image');
	$src = aq_resize( $image['url'], 1200, 100000000, true, false ); //resize & crop img
	$src_1024 = aq_resize( $image['url'], 1024, 638, true, false ); //resize & crop img
	$src_768 = aq_resize( $image['url'], 786, 450, true, false ); //resize & crop img
	$src_480 = aq_resize( $image['url'], 480, 281, true, false ); //resize & crop img
	//echo '<img src="" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'" class=" page-bg-'.$counter.' bg "   />';
	
	$quote = get_sub_field('quote');
	
	echo '<div class="page-element page-'.$counter.'" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'">';
	
		$position_horizontal = get_sub_field('title_image_horizontal');
		$position_vertical = get_sub_field('title_image_vertical');
		$image_title = get_sub_field('title_image');
		echo '<div class="page-content page-content-box start-page  vert-'.$position_vertical.'-title hor-'.$position_horizontal.'-title  "><h1 class="main-title">';
			echo $quote;
		echo '</h1></div>';
		
		
		
		
		echo '<div class="content-large-image">';

		echo '</div></div>';