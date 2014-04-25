<?php /*
    Template Name: Protected content
*/






get_header(); 


$post_id =  url_to_postid($_GET["redirect_to"]); 

$post_7 = get_post($post_id); 
$title = $post_7->post_title;

echo $title;

while ( have_posts() ) : the_post();
	
	echo wp_get_referer();
	
	echo '<div class="content content-page">';
	echo '<h2>'.get_the_title().'</h2>';
	the_content();
	echo '</div>';
	
endwhile;

get_footer(); ?>

