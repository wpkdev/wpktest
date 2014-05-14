<div class="welcomepopup-box btn-close-welcome-popup">
	<?php
	echo '<a href="#video-modal" class="modalLink22"><img src="'.$template_directory.'/img/previewvideo.jpg" data-pin-no-hover="true" id="previewvideo"/></a>';
	?>
	
	<div class="welcomepopup center">	
		<div class="shotofjoy-logo">
			<img src="<?php echo $template_directory; ?>/img/SOJ-logo.png" data-pin-no-hover="true" alt="Shot of Joy">
		</div>
	
			

	
	<div class="welcomepopup">
		<!--<a href="#" class="btn btn-circle btn-close btn-close-welcome-popup">X</a>	-->
		<!--<img src="<?php echo $template_directory; ?>/img/SOJ-logo.png" alt="Shot of Joy">-->
			
		
		<h1>Het allerbeste begin van de dag</h1>
		<p class="line-p">Dagelijks voor maar &euro;2,99 per maand</p>
		<p><a href="<?php echo get_site_url();?>/register?action=registeruser&subscription=1" class="btn btn-soj btn-large">Start je gratis twee weken</a> &nbsp; 
		
		<?php if(!is_user_logged_in()){ ?>
		
		<a href="<?php echo get_site_url(); ?>/login" class="btn btn-soj btn-large">Log in</a> </p>
		<?php } ?>
		
		
		<a href="#" class="btn-close-welcome-popup">Of lees de shot van vandaag gratis...</a>
		
		
	</div>
	
	
	
</div>