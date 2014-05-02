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

	<div class="content">
		<h1>Je verlaat nu shotofjoy.nl</h1>
		<p>We sturen je door naar <a href="<?php echo $shop_url;?>"><?php echo $shop_clean_url[2]; ?></a></p>
	</div>

</div>
<script>
$('body').addClass('page-redirect');
$('#wrapper').addClass('center');

//setTimeout("top.location.href = '<?php echo $redirect_url;?>/'",3000);

</script>

</div><!-- wrapper -->
</body>
</html>

