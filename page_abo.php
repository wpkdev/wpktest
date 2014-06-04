<?php /* Template Name: Abo */









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
		//$('.icon-user').hide();
		$('footer').hide();
	});
	
	
	//LOAD VIDEO IN PAGE
	$(document).ready(function(){
		$('.modalLink').modal({
			trigger:'.modalLink22',
			olay:'div.overlay',
			modals:'div.modal',
			animationEffect: 'fadeIn',
			animationSpeed: 400,
			moveModalSpeed: 'slow',
			background: '000',
			opacity: 0.95,
			openOnLoad: false,
			docClose: true,
			closeByEscape: true,
			moveOnScroll: true,
			resizeWindow: true,
			video:'http://player.vimeo.com/video/95103229?title=0&byline=0&portrait=0&wmode=transparent&color=ffffff&autoplay=true',
			close:'.closeBtn'
		});
	});
	
	$('.modalLink22').click(function(e){
			
		 setTimeout(function(){
			 var iframe = $('.responsive-container iframe')[0];
			 var player = $f(iframe);
			 $('.overlay').fadeIn();
			  player.addEvent('ready', function() {
				 player.api('play');
				 player.addEvent('finish', function(){
					 $('#video-modal,.overlay').fadeOut();
					 
				 });
			});
			 
			 
		},402);
		
	});


	
	
</script>




<?php get_footer(); ?>

