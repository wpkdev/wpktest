<?php 
	global $feat_video;
	global $feat_video_arr;
	$image = get_sub_field('background_image');
	$src = aq_resize( $image['url'], 1920, 1080, true, false ); //resize & crop img
	$src_1024 = aq_resize( $image['url'], 1024, 559, true, false ); //resize & crop img
	$src_768 = aq_resize( $image['url'], 786, 429, true, false ); //resize & crop img
	$src_480 = aq_resize( $image['url'], 480, 480, true, false ); //resize & crop img
	//echo '<img src="" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'" class=" page-bg-'.$counter.' bg "   />';
	
	// Get color scheme of page
	$color_scheme = get_sub_field('colorscheme');
	$feat_video = get_sub_field('video_id'); 
<<<<<<< HEAD
	
	$feat_video_arr = $feat_video;
	
	echo '<div class="page-element page-'.$counter.' " data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'">';
=======
	$feat_video_arr = $feat_video;
	$position_vertical = get_sub_field('title_image_vertical');
	$image_title = get_sub_field('title_image');
	
	?>
	
	<div class="page page-video page-<?php echo $counter; ?>"data-src="<?php echo $src[0]; ?>" data-src-1024="<?php echo $src_1024[0]; ?>" data-src-768="<?php echo $src_768[0]; ?>" data-src-480="<?php echo $src_480[0]; ?>">
		<h1 class="vert-<?php echo $position_vertical;?> <?php echo  $color_scheme;  ?>"><?php echo $image_title; ?></h1>
		<div class="video-play-btn vert-center"><a href="#video-modal" class="modalLink_page<?php echo $counter; ?>"></a></div>
	</div>
	
	<?php
		// Get Video ID
		if (!is_numeric($feat_video_arr) ){ 
			$video_url = 'http://www.youtube.com/embed/'.$feat_video_arr.'?rel=0&modestbranding=1&autohide=1';
		} else { 
		 	$video_url = 'http://player.vimeo.com/video/'.$feat_video_arr.'?title=0&byline=0&portrait=0&wmode=transparent&color=ffffff&autoplay=true';	
		} 

	
	
	/*echo '<div class="page-element page-'.$counter.' " data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'">';
>>>>>>> FETCH_HEAD
	//echo '<img src="'.$src[0].'" class=" page-bg-'.$counter.' bg stickem"   />';
	echo '<img src="'.$template_directory.'/img/pixel.gif" nopin="nopin" class=" page-bg-'.$counter.' bg bg-video" data-src="'.$src[0].'" data-src-1024="'.$src_1024[0].'" data-src-768="'.$src_768[0].'" data-src-480="'.$src_480[0].'"  />';
	
	
		$position_horizontal = get_sub_field('title_image_horizontal');
		$position_vertical = get_sub_field('title_image_vertical');
		$image_title = get_sub_field('title_image');
		
		
		// Show video play btn
<<<<<<< HEAD
		echo '<div class="video-play-btn center"><a href="#video-modal" class="modalLink_page_'.$counter.'"></a></div>';
=======
		echo '<div class="video-play-btn center"><a href="#video-modal" class="modalLink"></a></div>';
>>>>>>> FETCH_HEAD
		
		
		
		echo '<div class=" page-content-box start-page  vert-'.$position_vertical.'-title hor-'.$position_horizontal.'-title page-content-'.$color_scheme.' ">';
		
		
		
		echo '<h1 class="main-title">';
			echo $image_title;
		echo '</h1>';
		echo '</div>';
		
		echo '</div>'; // page-element


		// Get Video ID
		$feat_video = get_sub_field('video_id'); 
		$feat_video_arr = $feat_video;
		global $video_url;
		echo '<!--  '.$feat_video_arr.'  -->';
		
		if (!is_numeric($feat_video_arr) ){ 
		
			$video_url = 'http://www.youtube.com/embed/'.$feat_video_arr.'?rel=0&modestbranding=1&autohide=1';
			
		} else { 
		 
		 	$video_url = 'http://player.vimeo.com/video/'.$feat_video_arr.'?title=0&byline=0&portrait=0&wmode=transparent&color=ffffff&autoplay=true';	
<<<<<<< HEAD
		} 
		
		
		
			
							 
?>


<script>
$('.modalLink1_<?php echo $counter;?>').modal({
        trigger: '.modalLink_page_<?php echo $counter;?>',          
        olay:'div.overlay',             
        modals:'div.modal',             
        animationEffect: 'fadeIn',   
        animationSpeed: 400,          
        moveModalSpeed: 'slow',         
        background: '000000',           
        opacity: 1,                   
        openOnLoad: false,             
        docClose: true,                    
        closeByEscape: true,           
        moveOnScroll: false,            
        resizeWindow: true,             
        video: '<?php echo $video_url; ?>',
        
        videoClass:'video',      
        close:'.btn-close-modal' 
    });
    
    $('.modalLink_page_<?php echo $counter;?>').click(function(e){
			
		 setTimeout(function(){
			// var iframe = $('.responsive-container iframe')[0];
			// var player = $f(iframe);

			 
			  $('.overlay').fadeIn();
			 
			 
			 /*player.addEvent('ready', function() {
=======
		} 	*/
							 
?>

<script>
//LOAD VIDEO IN PAGE
	$(document).ready(function(){
		$('.modalLink').modal({
			trigger: '.modalLink_page<?php echo $counter; ?>',
			olay:'div.overlay',
			modals:'div.modal',
			animationEffect: 'fadeIn',
			animationSpeed: 400,
			moveModalSpeed: 'slow',
			background: '000',
			opacity: 0.95,
			openOnLoad: false,
			docClose: true,
			closeByEscape: true,
			moveOnScroll: true,
			resizeWindow: true,
			video:'<?php echo $video_url;?>',
			//video:'<?php echo $video_url; ?>',
			close:'.closeBtn'
		});
	});
	
	$('.modalLink_page<?php echo $counter; ?>').click(function(e){
			
		 setTimeout(function(){
			 var iframe = $('.responsive-container iframe')[0];
			 var player = $f(iframe);
			 $('.overlay').fadeIn();
			  player.addEvent('ready', function() {
>>>>>>> FETCH_HEAD
				 player.api('play');
				 player.addEvent('finish', function(){
					 $('#video-modal,.overlay').fadeOut();
					 
				 });
<<<<<<< HEAD
			});*/
			 
			 
		},100);
		
		//player = iframe;
		//player.addEvent('ready', function() {
			//player.addEvent('finish', onFinish);
		//});
		
		//function onFinish(video) {
			//alert(11111); 
		//}
		
		
	});

    
    

=======
			});
			 
			 
		},402);
		
	});
>>>>>>> FETCH_HEAD
</script>

