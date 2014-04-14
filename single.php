<?php get_header(); 





echo '<ul class="list">';
while ( have_posts() ) : the_post();



	echo '<li>';
		
		echo '<h2>'.get_the_title().'</h2>';
		the_content();
		
		
		$prev_post = get_adjacent_post(false,  '20,6', true);
		$prev_post_link = get_permalink($prev_post->ID);
		echo '<a href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink().'" class="facebook js-social-popup">SHARE ON FACEBOOK</a>';
		echo '<a href="'.$prev_post_link.'" class="next-post">NEXT CLIP</a>';
		
	echo '</li>';
	
	echo '<li><h3>WANT MORE? CHECK THESE CLIPS</h3></li>';
	
	

endwhile;
echo '</ul>';

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
$args = array('showposts'=>4,'paged'=>$paged);
$wp_query = new wp_query($args);
$current_page = get_query_var('paged'); 
$counter = 1;
$home_directory = get_site_url();



echo '<ul class="list">';
while ( have_posts() ) : the_post();



	echo '<li>';
		echo '<a href="'.get_permalink().'">';
		echo '<span class="date">'.get_the_date('M d').'</span> '.get_the_title();
	echo '</a></li>';	

endwhile;
echo '</ul>';

	//PAGINATION	
	echo '<div class="navigation"><div class="navigation-content">';
		echo paginate_links( array(
		    'base' => $home_directory.'/page/%#%/',
		    'format' => $home_directory.'/page/%#%/',
		    'type' => 'list',
		    'prev_next' => 'true',
		     'prev_text' => __('<span class="icon-arrow-left icon-nav">< Newer</span>'),
		    'next_text' => __('<span class="icon-arrow-right icon-nav">Older ></span>'),
		    'total' => $wp_query->max_num_pages,
		    'mid_size' => 1,
		    'end_size' => 1,
		    'current' => get_query_var('paged')
		));
	echo '</div></div>';


get_footer(); ?>