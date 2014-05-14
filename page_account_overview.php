	<?php /*
    Template Name: Accout overview
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	echo '<div class="content content-page-users">';
	?>
			<a href="http://www.shotofjoy.nl" ><img src="<?php echo $template_directory; ?>/img/close-btn.jpg" class="cls-btn" ></a>
	<?php
	//echo '<a href="#video-modal" class="modalLink22" ><img src="'.$template_directory.'/img/previewvideo.jpg" id="previewvideo"/></a>';
	
	
	echo '<h2>'.get_the_title().'</h2>';
	
	global $current_user;
      get_currentuserinfo();

      echo 'Username: ' . $current_user->user_login . "<br/>";
      echo 'E-mailadres: ' . $current_user->user_email . "<br/>";
      echo 'Voornaam: ' . $current_user->user_firstname . "<br/>";
      echo 'Achternaam: ' . $current_user->user_lastname . "<br/>";
	  
	  echo '<p><a href="http://www.shotofjoy.nl/account" class="btn btn-soj btn-small">Account aanpassen</a><br/> '; 
	  echo '<a href="http://www.shotofjoy.nl/uitschrijven/" class="btn btn-soj btn-small">Abonnement opzeggen</a><br/>';
	  echo '<a href="http://www.shotofjoy.nl/logout" class="btn btn-soj btn-small">Uitloggen</a><br/></p>';
	  
	  
    
	  
	
	
	
	
	the_content();
	echo '</div>';
	
endwhile;




get_footer(); ?>

