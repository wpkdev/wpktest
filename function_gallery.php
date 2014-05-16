<?php
	
//CREATE OUR OWN GALLERY FROM THE DEFAULT WORDPRESS GALLERY FUNCTION
	function gallery_func( $atts ){
	 	extract( shortcode_atts( array(
			'ids' => 'something',
			'columns' => '3',
		), $atts ) );
		
					//Split the id's in to an array
			$idArray = explode(",", $ids);
			$output = '<ul class="wpk-gallery gallery-'.$columns.'">';
			$counter = 1;
			//Loop over array
			foreach ($idArray as &$id) {
	    		
	    		//get images
	    		$galleryimagelrg = wp_get_attachment_image_src($id, 'full');
	    		
				$setresize  = false;
    			$imgWidth = 300; $imgHeight = 250 ;
					
	    		
	    		$src = aq_resize( $galleryimagelrg[0], $imgWidth, $imgHeight, true, false ); //resize & crop img
	    		
	    		//get the img caption
	   			$caption = get_post($id)->post_excerpt;
	    		
	    		$shop_title = esc_attr( get_post_meta( $id, '_wp_attachment_source_shop_title', true ) );
	    		
	    		// Get extra shop fields
	    		$shop_info1 = esc_attr( get_post_meta( $id, '_wp_attachment_source_shop_extra_field1', true ) );
	    		$shop_info2 = esc_attr( get_post_meta( $id, '_wp_attachment_source_shop_extra_field2', true ) );
	    		
	    		//$shop_name = esc_attr( get_post_meta( $id, '_wp_attachment_source_shop_name', true ) );
	    		//$shop_price = esc_attr( get_post_meta( $id, '_wp_attachment_source_shop_price', true ) );
	    		$shop_url = esc_attr( get_post_meta( $id, '_wp_attachment_source_shop_url', true ) );
	    		
	    		
				
				if (strlen($shop_title) && strlen($shop_price) ){
					
					$caption = $shop_title.'||'.$shop_name.'||&euro;'.$shop_price.'||'.$shop_url;
					
				}
	    		
	    		
	    		//check if last column
	    		if($counter == $columns){
		        	$class = 'class="last"';
		        	$counter = 0;
		        } else {
		        	$class = '';
		        }
	    		
	    		
	    		
	    		$output .= '<li '.$class.'><a href="'.get_site_url().'/out?redirect='.urlencode($shop_url).' " target="_blank" class="js-gallery"><div class="img-gallery-box"><div class="gallery-btn"><span>Shop it</span></div><img src="'.$src[0].'" width="'.$src[1].'" height="'.$src[2].'"  nopin="nopin" class="js-no-lazy-loading" /></div><div class="gallery-description">
	    		<span class="product-title">'.$shop_title.'</span>
	    		<span class="product-info1">'.$shop_info1.'</span>
	    		<span class="product-info2">'.$shop_info2.'</span></a>';
	    		$counter++;
			}
			
			$output .= '</ul><div class="clearer">&nbsp;</div>';
			return $output;
		}
		
	
	add_shortcode( 'gallery', 'gallery_func' );
	
	
?>