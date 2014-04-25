<script>
	
	<?php if($counter == 1){ ?>
		var nav_item = '<a href="" class="go_to_page nav-act"><?php echo $counter ?></a>';
	<?php }else{ ?>
		var nav_item = '<a href="" class="go_to_page"><?php echo $counter ?></a>';
	<?php } ?>
	
	
	$('nav').append(nav_item);
	
</script>