<?php get_header(); 

while ( have_posts() ) : the_post();
	echo '<div class="content">';
	echo '<h2>'.get_the_title().'</h2>';
	echo '</div>';
	the_content();
endwhile;

get_footer(); ?>