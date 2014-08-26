<<<<<<< HEAD
	<?php /*
=======
<?php /*
>>>>>>> FETCH_HEAD
    Template Name: Register
*/









get_header(); 




while ( have_posts() ) : the_post();
<<<<<<< HEAD
	?>
	<a href="http://www.shotofjoy.nl"><img src="<?php echo $template_directory; ?>/img/close-btn.jpg" class="cls-btn" ></a>
	
	<?php
	
	echo '<div class="content content-page-users">';
=======
	
	
	echo '<div class="acount-pages">';
>>>>>>> FETCH_HEAD
	
	
	//echo '<h2>'.get_the_title().'</h2>';
	
	
	if($_GET['action'] == 'registeruser'){
		echo '<h2>Probeer nu twee weken gratis.</h2><p style="text-align:center;">Maak een account aan.</p>';
	}elseif($_GET['action'] == 'subscriptionsignup'){
		echo '<h2>Start je gratis twee weken Shot of Joy</h2>
		<p class="payment">
			<strong>Zo werkt het</strong><br/>
			Start je lidmaatschap met iDEAL. Als je via iDEAL een eerste verificatietransactie van &euro; 00,01 uitvoert, zal je rekeningnummer worden doorgegeven aan Shot of Joy. 
			Je geeft Shot of Joy dan toestemming om na je gratis proefperiode maandelijks &euro; 2,99 af te schrijven van je rekening. Altijd online opzegbaar. 
		
		</p>';
	}else{
		echo '<p>Kies hieronder je lidmaatschap om Shot of Joy te bekijken.</p>';
	}
	
	
	
	
	the_content();
	
	if($_GET['action'] == 'subscriptionsignup'){
		echo '<p class="payment"><input type="checkbox" value="true" style="width:20px!important; " id="payment_checker">Ik ben 18 jaar of ouder en ga akkoord met de 
		bovenvermelde <a href="http://www.shotofjoy.nl/algemene-voorwaarden/" target="_blank">algemene voorwaarden</a> en <a href="http://www.shotofjoy.nl/privacy-beleid-statement-van-shot-of-joy/" target="_blank">privacy policy</a>.</p>
		
		<p class="extra-info-abonnement payment">Je Shot of Joy-lidmaatschap, dat begint met een gratis aanbieding van twee weken, gaat in wanneer je op Lidmaatschap Starten klikt. 
		Je kunt in de eerste twee weken altijd opzeggen en hoeft dan niets te betalen. Ga hiervoor naar Mijn account en klik op Lidmaatschap Opzeggen. 
		We verrichten geen terugbetaling of creditering voor gedeeltelijke maanden. 
		Door op Lidmaatschap Starten te klikken geef je ons toestemming om je maandelijkse Shot of Joy-lidmaatschap (momenteel &euro; 2,99) automatisch voort te zetten. 
		De kosten worden maandelijks afgeschreven van de opgegeven rekening totdat je opzegt. </p>
		
		';
	}
	
	
	echo '</div>';
	
endwhile;

get_footer(); ?>

