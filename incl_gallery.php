<?php
	
	//echo '<div  class=" page-bg-'.$counter.' bg  bg-shop" style="background:#FFF;">&nbsp;</div>';
	

	$src = $template_directory.'/img/pixel.gif';
	
	$color_scheme = 'page-wrapper-'.get_sub_field('colorscheme');
	
	echo '<div class="page-element page-'.$counter.'" style="background:#FFF;">';
	
	
	
	
	echo '<div class="page-gallery page-content-box">';
	
	$page_title = get_sub_field('title');
	$sub_title = get_sub_field('subtitle');
	$position_text = get_sub_field('position_extra_text');
	
	
	
	if (get_sub_field('extra_text')){
		
		
		// Text block left
		if($position_text == 'left'){

			echo '<div class="extra_content_col '.$color_scheme.'">';

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
			
			

			
		} else {
		
			echo '<div class="text-pos-right ">';

/*
				echo '<div class="gallery_col ">';
					echo get_sub_field('shop_gallery');
				echo '</div>';
*/				
				
				echo '<div class="extra_content_col '.$color_scheme.'">';
				
					if (!empty($sub_title)){
						echo '<div class="subtitle"><h3>'.$sub_title.'</h3></div>';
					}
					if(strlen($page_title)> 1){
						echo '<h2>'.$page_title.'</h2>';
					}
					echo get_sub_field('extra_text');
				echo '</div>'; // extra content col
			
				echo '<div class="gallery_col ">';
					echo get_sub_field('shop_gallery');
				echo '</div>';
				

				
			echo '</div>';
		}
		
		
	} else {
		
		echo get_sub_field('shop_gallery');
	}
	

	
	echo '</div>';
	echo '</div>';
?>