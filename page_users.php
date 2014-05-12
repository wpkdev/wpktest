	<?php /*
    Template Name: Users
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	echo '<div class="content content-page-users">';
	echo '<img src="'.$template_directory.'/img/previewvideo.jpg" id="previewvideo"/>';
	
	
	echo '<h2>'.get_the_title().'</h2>';
	the_content();
	echo '</div>';
	
endwhile;

get_footer(); ?>

