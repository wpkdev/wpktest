<?php
/*
Template Name: Shop redirect
*/
get_header();
global $template_directory;
$shop_url = $_GET['redirect'];
$shop_clean_url = explode( '/', $shop_url );

?>

	<div class="shop-redirect">
		<img src="<?php echo get_bloginfo('template_directory');?>/img/SOJ-logo-wit.svg" alt="Shot of Joy">
		<div class="content">
			<h1>Je verlaat nu shotofjoy.nl</h1>
			<p>We sturen je door naar <a href="<?php echo $shop_url;?>"><?php echo $shop_clean_url[2]; ?></a></p>
		</div>
	
	</div>
	<script>
		$('body').addClass('page-redirect');
		$('#wrapper').addClass('center');
		
		setTimeout("top.location.href = '<?php echo $shop_url;?>/'",2000);
	</script>

</div><!-- wrapper -->
</body>
</html>

