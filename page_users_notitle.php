<?php /*
    Template Name: Users no title
*/









get_header(); 




while ( have_posts() ) : the_post();
	?>
			<a href="http://www.shotofjoy.nl"><img src="<?php echo $template_directory; ?>/img/close-btn.jpg" class="cls-btn" ></a>
	<?php
	
	echo '<div class="content account-page " style="position:static;">';
		
	echo '<a href="#video-modal" class="modalLink22"><img src="'.$template_directory.'/img/previewvideo.jpg" id="previewvideo"/></a>';
	

		
		the_content();
	echo '</div>';
	
endwhile;

get_footer(); ?>

