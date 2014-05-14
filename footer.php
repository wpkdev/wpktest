</div>


<?php if(!is_page()){ ?>
<div class="scroll-indicator-box">
	<div class="scroll-indicator">
		scroll
		<div class="icon-arrow-down">&nbsp;</div>
	</div>
</div>
<?php global $post_url;global $post_title; ?>
<div class="social-media-box">
	<ul>
		<li class="mobile-popup"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($post_url); ?>" class="icon-facebook js-social-popup ">&nbsp;</a></li>
		<li class="mobile-popup"><a href="https://twitter.com/intent/tweet?text=<?php echo $post_title ?>&url=<?php echo urlencode($post_url); ?>&via=shotofjoynl&related=shotofjoynl" class="icon-twitter  js-social-popup">&nbsp;</a></li>
		<li class="mobile-popup"><span class="social-media-pinterest social-media-button  "><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a></span></li>
		<li class="mobile-popup"><a href="mailto:?SUBJECT=<?php echo $post_title ?>- Shotofjoy.nl&BODY=Hi..., ik wil graag dit artikel met je delen: <?php echo urlencode($post_url); ?>" target="_blank" class="icon-mail mobile-popup" >&nbsp;</a></li>
		<li class="mobile-popup"><a href="mailto:?SUBJECT=<?php echo $post_title ?>- Shotofjoy.nl&BODY=Hi..., ik wil graag dit artikel met je delen: <?php echo urlencode($post_url); ?>" target="_blank" class="icon-mail mobile-popup" >&nbsp;</a></li>
		
		<li class="mobile-popup-btn"><a href="" class="icon-export ">&nbsp;</a></li>
	</ul>
</div>
<?php } ?>



<footer>
	<ul>
		<li><a href="http://www.shotofjoy.nl/over-shot-of-joy/">Over Shot of Joy</a></li>
		<li><a href="http://www.shotofjoy.nl/privacy-beleid-statement-van-shot-of-joy/">Privacy Policy</a></li>
		<li><a href="http://www.shotofjoy.nl/algemene-voorwaarden/">Gebruiksvoorwaarden</a></li>
		<li><a href="http://www.shotofjoy.nl/contact/">Contact</a></li>
		<li><a href="http://www.shotofjoy.nl/uitschrijven/">Abonnement opzeggen</a></li>
		<li><a href="http://www.shotofjoy.nl/nieuwsbrief/">Inschrijven nieuwsbrief</a></li>
	</ul>
</footer>



<div class="overlay"></div>
<div id="video-modal" class="modal">
    <p class="btn-close-modal">Sluit video <span>X</span></p>
	<div class="responsive-container">
		<iframe width="100%" height="" frameborder="0" class="video"></iframe> <!-- 853 x 480 -->
	</div>
</div>




<?php wp_footer(); global $template_directory; ?>


<?php
	if(is_home()){
		if ( !is_user_logged_in() ) {
			include('incl_homepopup.php');
		}
	}
?>





<script>


if ( $( ".tml-user-links" ).length ) {
	document.location="http://www.shotofjoy.nl";
}

/*******************************************
*** GLOBAL VARIABLES
********************************************/
 
var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());
var isAndroid = /android/i.test(navigator.userAgent.toLowerCase());
var window_width = $(window).width();
  
isiPhone
if( !isiDevice && !isAndroid && !isiPhone && !isiPad ){

if(window_width > 1024){
var counter = 1;
   $('.page-element').each(function(index, item) {
   	if(counter > 1){
 	  	$('.page-bg-'+counter).hide();
 	  	
   	}
   	
   
   	counter++;
   });
  } 
   }
   	var act_page = 1;
   	  	function scroll_page(){
 		var counter = 1;
 		var top_pos = [];
 
 		$('.page-element').each(function(index, item) {
 			
 			top_pos[counter] = $(".page-"+counter).offset().top - $(window).scrollTop();
 			if(top_pos[counter] > 0){
 				
 				
 				
 				
 				
 				$(".page-bg-"+counter).css('top', top_pos[counter] );
 				$(".page-bg-"+counter).show();
 			}else{
 				$(".page-bg-"+counter).css('top', 0 );
 			}
 			
 			counter++;
 			
 		});

}

  
  /*************************************************************
  **** POSITION TEXTAREA
  **************************************************************/
   
  /*var screen_height = $(window).height();
  var counter = 1;
  $('.page-content').each(function(index, item) {
  	var window_height = $(window).height();
  	var window_width = $(window).width();
  	if($(this).hasClass('col-25')){
  		$(this).css({ "width": "35%" });
  	}
  	
  	if($(this).hasClass('col-50')){
  		$(this).css({ "width": "50%" });
  	}
  	
  	if($(this).hasClass('col-75')){
  		$(this).css({ "width": "75%" });
  	}
  	
  	var content_width = $(this).width();
  	
  	if(content_width < 320){
	  	$(this).width(320);
	}
  	
  	var content_height = $(this).height();
  	var horizontal_center = ((window_width - content_width)/2)-60;
  	var vertical_center = ((window_height - content_height)/2);
  	
  	if($(this).hasClass('vert-top')){
	  	$(this).css({ "top": "100px", "bottom": "auto" });
	}
  	if($(this).hasClass('vert-center')){
	  	$(this).css({ "top": vertical_center+"px", "bottom": "auto" });
  	}
  	if($(this).hasClass('vert-bottom')){
	  	$(this).css({ "bottom": "100px", "top": "auto" });
  	}
  	if($(this).hasClass('hor-left')){
	  	$(this).css({ "left": "100px", "right": "auto" });
  	}
  	if($(this).hasClass('hor-center')){
	  	$(this).css({ "left": horizontal_center+"px", "right": "auto" });
  	}
  	if($(this).hasClass('hor-right')){
	  	$(this).css({ "right": "100px", "left": "auto" });
  	}
  	
  	counter++;
  	
  });
  */


$('.control-label').each(function(index, item) {
	html = $(this).html();
	
	if(html == 'Kies een gebruikersnaam'){
		$(this).html('E-mailadres');
	}
	if(html == 'E-mailadres'){
		$(this).html('Herhaal e-mailadres');
	}
});

$('#loginform label').each(function(index, item) {
	html = $(this).html();
	
	if(html == 'Kies een gebruikersnaam'){
		$(this).html('E-mailadres');
	}
	
});


if($('#login_right').html()  == 'Heeft u al een account?'){
	$('#login_right').html('Heb je al een account?');
}





 $("#pronamic-pay-form input[type=submit]").attr('value','Lidmaatschap starten');
 $("#pronamic-pay-form input[type=submit]").attr("disabled", "disabled");
 $("#pronamic-pay-form input[type=submit]").css("background", "#cccccc");


$('#pronamic-pay-form img').hide();
$('#pronamic-pay-form').prepend('<p style="float:right;margin-top:-13px;"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/betaalmethode.jpg" /></p>');
  
   $('#payment_checker').click(function(e){
   		if($(this).is(':checked')){
	   		$("#pronamic-pay-form input[type=submit]").removeAttr("disabled");
	   		$("#pronamic-pay-form input[type=submit]").css("background", "#ff7271");    
   		}else{
	   		 $("#pronamic-pay-form input[type=submit]").attr("disabled", "disabled");
	   		 $("#pronamic-pay-form input[type=submit]").css("background", "#cccccc");
   		}
   });
  
  
  
   
  
  
/*******************************************
*** SOCIAL MEDIA POPUP
********************************************/  
  $('.js-social-popup').click(function(e){
		var sTop = window.screen.height/2-(218); 
		var sLeft = window.screen.width/2-(313);
		var win = window.open(this.href,'sharer','toolbar=0,status=0,resizable=0,location=0,width=626,height=256,top='+sTop+',left='+sLeft);
		e.preventDefault();
	});
  
/*******************************************
*** LOAD BACKGROUND FOR DIFFERENT VIEWPORTS
********************************************/    
	function load_bg_img(){
	
		var counter = 1;
		$('.bg').each(function(index, item) {
		  	if(window_width > 1024){
				res_img = $(this).attr('data-src');
			}else if(window_width < 481){
				res_img = $(this).attr('data-src-480');
			}else if(window_width < 769){
				res_img = $(this).attr('data-src-768');
			}else if(window_width < 1025){
				res_img = $(this).attr('data-src-1024');
			}
			
			$(this).attr('src', res_img);
			
			
			
		  	counter++;
		});
	
	}
	
	load_bg_img();
  
/*******************************************
*** SHOW THE RIGHT NAVIGATION INDICATOR
********************************************/   
 	function active_nav(){
		var counter = 1;
		var activeelement = 1;
		var activeelementold = 1;
		$('.page-element').each(function(index, item) {
			if($(".page-"+counter).position().top  < ($(window).scrollTop())+100 ){
				 $(".go_to_page").removeClass('nav-act');
				 $(".go_to_page:nth-child("+counter+")").addClass('nav-act');
				 
				 
				 activeelementold = activeelement;
				 activeelement = counter;
				 				 
				 
				 
			 }
			counter++;
			
			
			
			
		});
	}
	
/*******************************************
*** CLICK ON THE NAVIAGTION INDICATOR
********************************************/   
	$(".go_to_page").click(function() {
		page = $("span",this).html();
		$('html, body').animate({
			 scrollTop: $(".page-"+page).offset().top
		}, 1000, "swing");
		
		return false;
	});
	
	
/*******************************************
*** HIDE THE LOGO AFTER SCROLLING X PIXELS
********************************************/   	
	var img_big = true;
	function logo_position(){
		var new_alpha = 1-(($(window).scrollTop() * 0.25)/100);
		$("#soj-logo-big").css({ opacity: new_alpha });
		$(".scroll-indicator-box").css({ opacity: new_alpha });
		
		
		
		if($("#soj-logo-big").css('opacity') == 0){
			$("#soj-logo-big").hide();
		}else{
			$("#soj-logo-big").show();
		}
		
		
	}
	
	
/*******************************************
*** FIRE FUNCTIONS ON SCROLL EVENTS
********************************************/   	
	if(isiDevice){
		$(window).bind('touchmove',function(e){
    		active_nav();
			logo_position();
		});
	}else{
		$(window).scroll(function() {
			active_nav();
			logo_position();
			if( !isiDevice && !isAndroid && !isiPhone && !isiPad ) {
				if(window_width > 1280){
					scroll_page();
				}
			}
		});
	}
	
/*******************************************
*** CALCULATE THE HEIGHT OF PAGES
********************************************/   	
  
  $('.page-element').each(function(index, item) {
  	$(this).height($(window).height());
  });
  
  
  
	
	function get_page_element_height(){
	
		 var counter = 1;
		  setTimeout(function(){
		  		$('.page-content-box').each(function(index, item) {
		  			var window_height = $(window).height();
					var window_width = $(window).width();
					var page_height = $(this).height();
					var screen_height = $(window).height();
					
					console.log('screenheight:' + page_height);
					
					if(page_height > screen_height){
						//page_height = screen_height;
						$('.page-'+counter).height(page_height);
						$('.page-box-'+counter).height(page_height);
						
						console.log('set height ' +page_height);

					}
					
					console.log('page height2: ' +page_height);
					//$('.page-'+counter).height(page_height);
					//$('.page-box-'+counter).height(page_height);
					
					//$(this).height(page_height);
					$(this).show();
					counter++;
					
				});
				
						  },100);
		
	} 
	
	
	get_page_element_height();
		

    
    /*
    
	$(window).on("resize scroll",function(){
	    position_close_btn();
	});
	*/

	$(function(){
	
		
		
		// Hide welcome popup
		$('.btn-close-welcome-popup').on('click', function(){
			//if(e.target == this){
				$('.welcomepopup-box').hide();
			//}
			
			
		});
		
				
	});
	
	
	
	
	
	
	function resizeBg() {
 		counter = 1;
 		$('.page-element').each(function(index, item) {
 		
 		
 			var theWindow        = $(window),
 			$bg              =  $(".bg", this),
 			aspectRatio      = $bg.width() / $bg.height();
 			
 			aspectRatioWindow      = theWindow.width() / theWindow.height();
 			
 			if ( aspectRatioWindow < aspectRatio ) {
	 		    $bg
	 		    	.removeClass('bgheight')
	 		    	.removeClass('bgwidth')
	 		    	.addClass('bgheight');
	 		} else {
	 		    $bg
	 		    	.removeClass('bgheight')
	 		    	.removeClass('bgwidth')
	 		    	.addClass('bgwidth');
	 		}
	 		counter++;
 		});
 					
 	}
 	     
 	     setTimeout(function(){
 	     	resizeBg();       
 	     }, 105);       			
	
	
	
	

 
 
		
	
		
	
 	
 	    			    		
 	
 
 	/*var theWindow        = $(window),
 	    $bg              = $(".bg"),
 	    aspectRatio      = $bg.width() / $bg.height();
 	    			    		
 	function resizeBg() {
 		
 		
 		
 		if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
 		    $bg
 		    	.removeClass('bgheight')
 		    	.removeClass('bgwidth')
 		    	.addClass('bgheight');
 		} else {
 		    $bg
 		    	.removeClass('bgheight')
 		    	.removeClass('bgwidth')
 		    	.addClass('bgwidth');
 		}
 					
 	}
 	                   			
 	theWindow.resize(resizeBg).trigger("resize");
 	
 	resizeBg();*/
 	

  window.onorientationchange = function() { 
        var orientation = window.orientation; 
            switch(orientation) { 
                case 0: window.location.reload(); 
                break; 
                case 90: window.location.reload(); 
                break; 
                case -90: window.location.reload(); 
                break; } 
    };

	
</script>
<script async type="text/javascript" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>

<?php 
// Get video url
global $video_url; 


?>
<script>
  $(document).ready(function(){
    $(".text-wrapper").fitVids();
     //position_close_btn();
    
    video = '';
    
    $('.modalLink').on('click', function(e){
		//position_close_btn(video);    
    });
    
    $('.modalLink11').modal({
        trigger: '.modalLink',          
        olay:'div.overlay',             
        modals:'div.modal',             
        animationEffect: 'fadeIn',   
        animationSpeed: 400,          
        moveModalSpeed: 'slow',         
        background: '000000',           
        opacity: 1,                   
        openOnLoad: false,             
        docClose: true,                    
        closeByEscape: true,           
        moveOnScroll: true,            
        resizeWindow: true,             
        video: '<?php echo $video_url; ?>',
        
        videoClass:'video',      
        close:'.btn-close-modal' 
    });
    
    
    $('.modalLink22').on('click', function(e){
		//position_close_btn(video);    
    });
    
    $('.modalLink111').modal({
        trigger: '.modalLink22',          
        olay:'div.overlay',             
        modals:'div.modal',             
        animationEffect: 'fadeIn',   
        animationSpeed: 400,          
        moveModalSpeed: 'slow',         
        background: '000000',           
        opacity: 1,                   
        openOnLoad: false,             
        docClose: true,                    
        closeByEscape: true,           
        moveOnScroll: false,            
        resizeWindow: true,             
        video: 'http://player.vimeo.com/video/95103229?title=0&byline=0&portrait=0&wmode=transparent&color=ffffff&autoplay=true',
        
        videoClass:'video',      
        close:'.btn-close-modal' 
    });

    
   
    
   function position_close_btn(video){
    	var close_btn = $('.btn-close-modal');
		var video_width = $('.responsive-container iframe').width();
		close_btn.css('width', video_width + 'px');
	}

    

 });
	
	$('.mobile-popup-btn').on('click', function(){
			$( ".mobile-popup" ).toggle();
			return false;
		});

	$(window).on("resize", function(){
	    get_page_element_height();
	    resizeBg();
	    load_bg_img();
	});
	
	
	
	
	
	
	
	
</script>
<script async type="text/javascript" data-pin-hover="false" src="//assets.pinterest.com/js/pinit.js"></script>
<script>
  $(document).ready(function(){
     //$(".text-wrapper").fitVids();

  });
</script>

</body>
</html>