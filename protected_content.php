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
	
	echo '<div class="content account-page " style="position:static;">';
	//echo '<h2>'.get_the_title().'</h2>';
	the_content();
	
	
	if ( !is_user_logged_in() ) {
		echo '<p><a href="http://www.shotofjoy.nl/register?action=registeruser&subscription=1" class="btn btn-soj btn-large">Start je gratis 2 weken</a></p><p>of</p><p><a href="http://www.shotofjoy.nl/login" class="btn btn-soj btn-large">Inloggen</a> </p>';
	}else{
		echo '<p><a href="http://www.shotofjoy.nl/register?action=subscriptionsignup&subscription=1" class="btn btn-soj btn-large">Start je gratis 2 weken</a></p><p>of</p><p><a href="http://www.shotofjoy.nl/login" class="btn btn-soj btn-large">Inloggen</a> </p>';
	}
	
	
	
	
	echo '</div>';
	
	
	
	
	
endwhile;


?>

<script>
	$('.icon-list').hide();
</script>

<?php
get_footer(); ?>

