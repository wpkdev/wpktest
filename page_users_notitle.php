<?php /*
    Template Name: Users no title
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	echo '<div class="content account-page">';
		the_content();
	echo '</div>';
	
endwhile;

get_footer(); ?>

