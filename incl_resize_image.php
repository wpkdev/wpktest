<?php
	function resize_img($postid,$width,$height){
		$thumb = get_post_thumbnail_id($postid);
		
		if($thumb){
			$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
			
			
			$src = aq_resize( $img_url, $width, $height, true, false ); //resize & crop img
			
			
			
			
			
			
			
			
			return $src[0];
		
		
		
		
		
		
		}
	}
?>