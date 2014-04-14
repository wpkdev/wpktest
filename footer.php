</div>


<footer>
	&nbsp;
</footer>


<?php global $template_directory; ?>


<script>
  
  /*************************************************************
  **** POSITION TEXTAREA
  **************************************************************/
   
  var screen_height = $(window).height();
  var counter = 1;
  $('.page-content').each(function(index, item) {
  	var window_height = $(window).height();
  	var window_width = $(window).width();
  	
  	
  	

 
  
  
 

  	if($(this).hasClass('col-25')){
  		$(this).css({ "width": "25%" });
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
  	var vertical_center = ((window_height - content_height)/2)-60;
  	
  	if($(this).hasClass('vert-top')){
	  	$(this).css({ "top": "60px", "bottom": "auto" });
	}
  	if($(this).hasClass('vert-center')){
	  	$(this).css({ "top": vertical_center+"px", "bottom": "auto" });
  	}
  	if($(this).hasClass('vert-bottom')){
	  	$(this).css({ "bottom": "60px", "top": "auto" });
  	}
  	if($(this).hasClass('hor-left')){
	  	$(this).css({ "left": "60px", "right": "auto" });
  	}
  	if($(this).hasClass('hor-center')){
	  	$(this).css({ "left": horizontal_center+"px", "right": "auto" });
  	}
  	if($(this).hasClass('hor-right')){
	  	$(this).css({ "right": "60px", "left": "auto" });
  	}
  	
  	counter++;
  	
  });
  
  
  
  
  
  /*$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("ul.list li").fitVids();
  });*/
  
  $('.js-social-popup').click(function(e){
		var sTop = window.screen.height/2-(218); 
		var sLeft = window.screen.width/2-(313);
		var win = window.open(this.href,'sharer','toolbar=0,status=0,resizable=0,location=0,width=626,height=256,top='+sTop+',left='+sLeft);
		e.preventDefault();
	});
  
  
  
  
  
  var counter = 1;
  $('.page-element').each(function(index, item) {
  	if(counter > 1){
	  	$('.page-bg-'+counter).hide();
	  	
  	}
  	
  
  	counter++;
  });
  
  
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
		
	
		/*var top_pos = $(".page-2").offset().top - $(window).scrollTop();
		if(top_pos > 0){
			$(".page-bg-2").css('top', top_pos );
			$(".page-bg-2").show();
		}else{
			$(".page-bg-2").css('top', 0 );
		}
		
		var top_pos3 = $(".page-3").offset().top - $(window).scrollTop();
		if(top_pos3 > 0){
			$(".page-bg-3").css('top', top_pos3 );
			$(".page-bg-3").show();
		}else{
			$(".page-bg-3").css('top', 0 );
		}

		var top_pos4 = $(".page-4").offset().top - $(window).scrollTop();
		if(top_pos4 > 0){
			$(".page-bg-4").css('top', top_pos4 );
			$(".page-bg-4").show();
		}else{
			$(".page-bg-4").css('top', 0 );
		}*/
		
	}
	
	
	
	
	$(window).scroll(function() {
		scroll_page();
	});

	$(".go_to_page").click(function() {
		
		page = $(this).html();
		
		
		$('html, body').animate({
			 scrollTop: $(".page-"+page).offset().top
		}, 1000, "swing");
		
		return false;
		
	});
  
	 var counter = 1;
	  setTimeout(function(){
	  		$('.page-content').each(function(index, item) {
	  			var window_height = $(window).height();
				var window_width = $(window).width();
				var page_height = $(this).height() + 220;
				if(page_height < screen_height){
					page_height = screen_height;
				}
				
				console.log('page height2: ' +page_height);
				$('.page-'+counter).height(page_height);
				$(this).show();
				counter++;
				
			});
	  },1);
	 
    
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
			
			
			//$('.article-featured-video').css('background','#000');
			
			var new_height = $('.responsive-container iframe').width()/ 1.777777778;
			$('.responsive-container iframe').animate({height: new_height+"px"}, 500);
			
			
			//video_loader.show();
			
			$('.video-overlay').hide();
				
					
			
			setTimeout(function() {
				
				
				
				
				video_pos = (($(window).height() - new_height)/2)-30;
				
				
				$('.responsive-container iframe').attr('src', video_src);
				$(".responsive-container iframe")[0].src += "&autoplay=1";
				
				$(".responsive-container iframe").css('margin-top', video_pos+'px');
				
				video_loader.hide();
				
				$('.video-play-btn').hide();
				
				
				
				
				
				
				
				$(this).hide();
			}, 510);
			
			
		});
	}
	toggle_video();

    
</script>


</body>
</html>