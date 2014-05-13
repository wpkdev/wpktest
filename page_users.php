	<?php /*
    Template Name: Users
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	echo '<div class="content content-page-users">';
	?>
			<a href="http://www.shotofjoy.nl"><img src="<?php echo $template_directory; ?>/img/close-btn.jpg" class="cls-btn" ></a>
	<?php
	echo '<a href="#video-modal" class="modalLink"><img src="'.$template_directory.'/img/previewvideo.jpg" id="previewvideo"/></a>';
	
	
	echo '<h2>'.get_the_title().'</h2>';
	the_content();
	echo '</div>';
	
endwhile;

$video_url = 'http://player.vimeo.com/video/31795904?title=0&byline=0&portrait=0&wmode=transparent&color=ffffff';


get_footer(); ?>

