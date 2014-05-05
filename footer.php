</div>



<div class="scroll-indicator-box">
	<div class="scroll-indicator">
		scroll
		<div class="icon-arrow-down">&nbsp;</div>
	</div>
</div>
<?php global $post_url;global $post_title; ?>

<div class="social-media-box">
	<ul>
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($post_url); ?>" class="icon-facebook js-social-popup">&nbsp;</a></li>
		<li><a href="https://twitter.com/intent/tweet?text=<?php echo $post_title ?>&url=<?php echo urlencode($post_url); ?>&via=ShotofJoy&related=Shotofjoy" class="icon-twitter js-social-popup">&nbsp;</a></li>
		<li><span class="social-media-pinterest social-media-button "><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a></span></li>
		<li><a href="" class="icon-mail">&nbsp;</a></li>
	</ul>
</div>


<footer></footer>


<?php wp_footer(); global $template_directory; ?>


<?php
	if(is_home()){
		if ( !is_user_logged_in() ) {
			//include('incl_homepopup.php');
		}
	}
?>




<script>
  
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

/*******************************************
*** GLOBAL VARIABLES
********************************************/
 
var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());
var isAndroid = /android/i.test(navigator.userAgent.toLowerCase());
var window_width = $(window).width();
  
  
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
	var counter = 1;
	$('.page-element').each(function(index, item) {
	  	if(window_width > 1024){
			res_img = $(this).attr('data-src');
		}else if(window_width < 481){
			res_img = $(this).attr('data-src-480');
		}else if(window_width < 769){
			res_img = $(this).attr('data-src-768');
		}else if(window_width < 1025){
			res_img = $(this).attr('data-src-1024');
		}
		
		$(this).css('background-image', 'url('+res_img+')');
		
	  	counter++;
	});
  
/*******************************************
*** SHOW THE RIGHT NAVIGATION INDICATOR
********************************************/   
 	function active_nav(){
		var counter = 1;
		$('.page-element').each(function(index, item) {
			if($(".page-"+counter).position().top  < ($(window).scrollTop())+100 ){
				 $(".go_to_page").removeClass('nav-act');
				 $(".go_to_page:nth-child("+counter+")").addClass('nav-act');
			 }
			counter++;
		});
	}
	
/*******************************************
*** CLICK ON THE NAVIAGTION INDICATOR
********************************************/   
	$(".go_to_page").click(function() {
		page = $(this).html();
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
		});
	}
	
/*******************************************
*** CALCULATE THE HEIGHT OF PAGES
********************************************/   	
  
	 var counter = 1;
	  setTimeout(function(){
	  		$('.page-content-box').each(function(index, item) {
	  			var window_height = $(window).height();
				var window_width = $(window).width();
				var page_height = $(this).height()+100;
				var screen_height = $(window).height();
				
				
				
				if(page_height < screen_height){
					page_height = screen_height;
				}
				
				console.log('page height2: ' +page_height);
				$('.page-'+counter).height(page_height);
				$('.page-box-'+counter).height(page_height);
				
				//$(this).height(page_height);
				$(this).show();
				counter++;
				
			});
	  },500);
	 
    
/****************************************
** VIDEO OVERLAY 
****************************************/
	function toggle_video(){
		var video_overlay = $('.video-overlay');
		var video_loader = $('.video-loading');
		var video_src = $('.responsive-container iframe').data('src');
		var_videoframe = $('.responsive-container iframe'); 
		video_loader.hide();
		video_overlay.on('click', function(){
			
			var new_height = $('.responsive-container iframe').width()/ 1.777777778;
			$('.responsive-container iframe').animate({height: new_height+"px"}, 500);
			
			$('.video-overlay').hide();
				
			setTimeout(function() {
				
				video_pos = (($(window).height() - new_height)/2)-30;
				$('.responsive-container iframe').attr('src', video_src);
				$(".responsive-container iframe")[0].src += "&autoplay=1";
				$(".responsive-container iframe").css('margin-top', video_pos+'px');
				video_loader.hide();
				$('.video-play-btn').hide();
				$('.content-video').addClass('video-background');
				$('#soj-logo-big').hide();
				$('.main-title').hide();
				
				
				$(this).hide();
			}, 510);
		});
	}
	toggle_video();
	
</script>
<script async type="text/javascript" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>

</body>
</html>