	<?php /*
    Template Name: Welcome
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	
	?>
			<a href="http://www.shotofjoy.nl" ><img src="<?php echo $template_directory; ?>/img/close-btn.jpg" class="cls-btn" ></a>
	
	
	
	
	<?php

	
	
	echo '<div class="content content-page-users">';
		
	if(current_user_is_member()){
		echo '
			<h2>Welkom bij</h2>
			<center><a href="http://www.shotofjoy.nl"><img src="'.$template_directory.'/img/SOJ-logo-wit.svg" style="width:80%; max-width:200px; "/></a></center>
			<h2>Heel veel plezier met je abonnement!</h2>
			<center><a href="http://www.shotofjoy.nl/" class="btn btn-soj btn-large">Naar de homepage</a></center>
			
			<div>&nbsp;</div><div>&nbsp;</div>
		';
	}else{
		echo '
		<h2>Er ging iets mis.</h2>
		<p style="text-align:center;"> Tijdens de registratie of betaling is er iets misgegaan. Probeer je nogmaals aan te melden of neem contact op met <a href="mailto:info@shotofjoy.nl">Shot of Joy</a> </p>
		
		<center><a href="http://www.shotofjoy.nl/register?action=subscriptionsignup&amp;subscription=1" class="btn btn-soj btn-large">Probeer opnieuw</a></center>
		<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
		';
		
		
	}
	
	
	
	//echo '<h2>'.get_the_title().'</h2>';
	//the_content();
	echo '</div>';
	
endwhile;




get_footer(); ?>

