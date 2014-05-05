<?php
	
	//echo '<div  class=" page-bg-'.$counter.' bg  bg-shop" style="background:#FFF;">&nbsp;</div>';
	

	$src = $template_directory.'/img/pixel.gif';
	
	
	
	echo '<div class="page-element page-'.$counter.'" data-src="'.$src.'" data-src-1024="'.$src.'" data-src-768="'.$src.'" data-src-480="'.$src.'" style="background:#FFF;">';
	
	
	
	
	echo '<div class="page-gallery page-content-box ">';
	
	$sub_title = get_sub_field('subtitle');
	
	$position_text = get_sub_field('position_extra_text');
	
	if(get_sub_field('extra_text')){
		
		if($position_text == 'left'){
			echo '<div class="extra_content_col">';
				$page_title = get_sub_field('title');
				if (!empty($sub_title)){
					echo '<div class="subtitle"><h3>'.$sub_title.'</h3></div>';
				}
				if(strlen($page_title)> 1){
					echo '<h2>'.$page_title.'</h2>';
				}
				echo get_sub_field('extra_text');
			echo '</div>';
			echo '<div class="gallery_col">';
				echo get_sub_field('shop_gallery');
			echo '</div>';
		}else{
			echo '<div class="text-pos-right ">';
				echo '<div class="gallery_col ">';
					echo get_sub_field('shop_gallery');
				echo '</div>';
				echo '<div class="extra_content_col ">';
					echo get_sub_field('extra_text');
				echo '</div>';
			echo '</div>';
		}
		
		
	}else{
		
		echo get_sub_field('shop_gallery');
	}
	
	
	
	
	

	
	

	
	echo '</div>';
	echo '</div>';
?>