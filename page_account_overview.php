	<?php /*
    Template Name: Accout overview
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	echo '<div class="acount-pages">';
	
	//echo '<a href="#video-modal" class="modalLink22" ><img src="'.$template_directory.'/img/previewvideo.jpg" id="previewvideo"/></a>';
	
	
	echo '<h2>'.get_the_title().'</h2>';
	
	global $current_user;
      get_currentuserinfo();
	  
	  echo '
	  	<div class="account-line account-line-center account-noline" >Jouw gegevens</div>
	  	<div class="account-line"> <span>E-mailadres:</span> ' . $current_user->user_login .'</div>
	  	<div class="account-line account-noline"> <span>Voornaam:</span> ' . $current_user->user_firstname .'</div>
	  	<div class="account-line account-noline"> <span>Achternaam:</span> ' . $current_user->user_lastname .'</div>
	  	<div class="account-line account-line-center"><a href="'.wp_logout_url().'" class="btn btn-soj btn-small">Uitloggen</a></div>
	  	<div>&nbsp;</div>
	  	<div class="account-line account-line-center account-noline">Account wijzigen</div>
	  	<div class="account-line account-line-center"><a href="http://www.shotofjoy.nl/account" class="btn btn-soj btn-small">Gegevens aanpassen</a></div>
	  	<div class="account-line account-line-center account-noline"><a href="http://www.shotofjoy.nl/uitschrijven/" class="btn btn-soj btn-small">Abonnement opzeggen</a></div>
	  	<div class="account-line">&nbsp;</div>
	  
	  ';
	  
	the_content();
	echo '</div>';
	
endwhile;




get_footer(); ?>

