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


<<<<<<< HEAD
echo '<a href="http://www.shotofjoy.nl" ><img src="'.$template_directory.'/img/close-btn.jpg" class="cls-btn" ></a>';
=======

>>>>>>> FETCH_HEAD

while ( have_posts() ) : the_post();
	
	
<<<<<<< HEAD
	echo '<div class="content account-page " style="position:static;">';
=======
	echo '<div class="acount-pages ">';
>>>>>>> FETCH_HEAD
	//echo '<h2>'.get_the_title().'</h2>';
	the_content();
	
	
	if ( !is_user_logged_in() ) {
		echo '
			<p><a href="http://www.shotofjoy.nl/register?action=registeruser&subscription=1" class="btn btn-soj btn-large" onclick="_gaq.push(["_trackEvent", "Aanmelden", "Start je abonnement", "Protected page"]);">Start je gratis 2 weken</a></p>
			<p>of</p>
			<p><a href="http://www.shotofjoy.nl/login" class="btn btn-soj btn-large" onclick="_gaq.push(["_trackEvent", "Aanmelden", "Login", "Protected page"]);">Log in</a> </p>';
	}else{
		echo '<p><a href="http://www.shotofjoy.nl/register?action=subscriptionsignup&subscription=1" class="btn btn-soj btn-large" onclick="_gaq.push(["_trackEvent", "Aanmelden", "Start je abonnement", "Protected page"]);">Start je gratis 2 weken</a></p>';
	}
	
	
	
	
	echo '</div>';
	
	
	
	
	
endwhile;


<<<<<<< HEAD
?>

<script>
	$('.icon-list').hide();
</script>

<?php
=======
>>>>>>> FETCH_HEAD
get_footer(); ?>

