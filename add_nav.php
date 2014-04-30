<script>
	
	<?php if($counter == 1){ ?>
		var nav_item = '<a href="" class="go_to_page nav-act"><span><?php echo $counter ?></span></a>';
	<?php }else{ ?>
		var nav_item = '<a href="" class="go_to_page"><span><?php echo $counter ?></span></a>';
	<?php } ?>
	
	
	$('nav').append(nav_item);
	
</script>