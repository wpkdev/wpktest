	<?php /*
    Template Name: Register
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	echo '<div class="content content-page-users">';
	echo '<img src="'.$template_directory.'/img/previewvideo.jpg" id="previewvideo"/>';
	
	
	echo '<h2>'.get_the_title().'</h2>';
	
	
	if($_GET['action'] == 'registeruser'){
		echo '<p>Registreer je eerst op Shot of Joy.</p>';
	}elseif($_GET['action'] == 'subscriptionsignup'){
		echo '<p>We vragen je om 1 cent over te maken om daarna de automatische afschrijving te starten.</p>
			<p><input type="checkbox" value="true" style="width:20px!important; ">Ik ga akkoord met de <a href="http://www.shotofjoy.nl/algemene-voorwaarden/" target="_blank">algemene voorwaarden</a>.</p>
		';
	}else{
		echo '<p>Kies hieronder je lidmaatschap om Shot of Joy te bekijken.</p>';
	}
	
	
	
	
	the_content();
	echo '</div>';
	
endwhile;

get_footer(); ?>

