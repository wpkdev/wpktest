	<?php /*
    Template Name: Abo
*/









get_header(); 
?>


<div class="abo-page">
	<div class="abo-page-header">
		<a href="#video-modal" class="modalLink22" ><img src="<?php echo get_bloginfo('template_directory'); ?>/img/bekijk_trailer_v2.svg" /></a>
	</div>
	<div class="abo-page-content">
		<h2>Elke dag beginnen met een geluksmomentje?</h2>
		<h2>Neem nu een abonnement of geef een Shot of Joy cadeau!</h2>
		<p>Voor maar &euro;2,99 per maand</p>
		<p>&nbsp;</p>
		<p>
		<a href="http://www.shotofjoy.nl/register?action=registeruser&amp;subscription=1" class="btn btn-soj btn-large">Probeer nu twee weken gratis</a> 
		<!--<a href="http://www.shotofjoy.nl/register?action=registeruser&amp;subscription=1" class="btn btn-soj btn-large">Geef abonnement</a>-->
		</p>
		<p><a href="http://www.shotofjoy.nl" >Of lees de shot van vandaag gratis...</a></p>
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/soj-payoff.jpg" class="abo-page-payoff">
	</div>
	
	
	
</div>


<script>
	$( document ).ready(function() {
		$('.icon-user').hide();
		$('footer').hide();
	});
</script>




<?php get_footer(); ?>

