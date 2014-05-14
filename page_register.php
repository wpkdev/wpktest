	<?php /*
    Template Name: Register
*/









get_header(); 




while ( have_posts() ) : the_post();
	
	
	echo '<div class="content content-page-users">';
	
	?>
	<a href="http://www.shotofjoy.nl"><img src="<?php echo $template_directory; ?>/img/close-btn.jpg" class="cls-btn" ></a>
	
	<?php
	//echo '<h2>'.get_the_title().'</h2>';
	
	
	if($_GET['action'] == 'registeruser'){
		echo '<h2>Wil je Shot of Joy een maand gratis uitproberen?</h2><p class="payment">Maak een account aan.</p>';
	}elseif($_GET['action'] == 'subscriptionsignup'){
		echo '<h2>Start je gratis maand op Shot of Joy</h2><p class="payment">Om de automatische afschrijving te starten vragen we u om eenmalig 1 cent over te maken.</p>
			<p class="payment">U betaalt &euro;2,99 per maand, per maand opzegbaar.</p>';
	}else{
		echo '<p>Kies hieronder je lidmaatschap om Shot of Joy te bekijken.</p>';
	}
	
	
	
	
	the_content();
	
	if($_GET['action'] == 'subscriptionsignup'){
		echo '<p><input type="checkbox" value="true" style="width:20px!important; ">Ik ga akkoord met de <a href="http://www.shotofjoy.nl/algemene-voorwaarden/" target="_blank">algemene voorwaarden</a> en <a href="http://www.shotofjoy.nl/privacy-beleid-statement-van-shot-of-joy/" target="_blank">privacy policy</a>.</p>';
	}
	
	
	echo '</div>';
	
endwhile;

get_footer(); ?>

