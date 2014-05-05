<?php /*
    Template Name: Protected content
*/









$post_id =  url_to_postid($_GET["redirect_to"]); 
global $post;
$post = get_post($post_id); 
$title = $post->post_title;
$next_post = get_next_post();


if(!$next_post){
	wp_redirect('http://www.shotofjoy.nl/');
	exit;
}

get_header(); 




while ( have_posts() ) : the_post();
	
	echo wp_get_referer();
	
	echo '<div class="content content-page">';
	echo '<h2>'.get_the_title().'</h2>';
	the_content();
	echo '</div>';
	
endwhile;

get_footer(); ?>

